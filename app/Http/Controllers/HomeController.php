<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Abstracts;
use App\Models\Article;
use App\Models\Connection;
use App\Models\Convention;
use App\Models\FacultyBook;
use App\Models\Locale;
use App\Models\Monograph;
use App\Models\Photo;
use App\Models\Journal;
use App\Models\Researcher;
use App\Models\ResearcherArticle;
use App\Models\ResearcherBook;
use App\Models\TrainingManual;
use App\Models\Video;
use App\Models\Center;
use App\Models\Colleagues;
use App\Models\Dissertations;
use App\Service\CountryService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Scalar\MagicConst\File;

class HomeController extends Controller
{
    public function index(){
        $videos = Video::latest()->simplePaginate(1);

        $centers = Center::all()->sortBy(['type', 'country', 'name']); // Sort by 'type', 'country', and 'name'
        $centersByType = $centers->groupBy('type');
        $countries = CountryService::get_countries();
        $colleagues = Researcher::all(); // Sort by 'type', 'country', and 'name'
        $books = ResearcherBook::latest()->take(4)->get();
        return view('user.pages.index',['videos'=>$videos, "centersByType"=>$centersByType, "countries"=>$countries, "colleagues"=>$colleagues, "books"=>$books]);
    }

    public function contact(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.pages.contact');
    }

    public function aboutThePlatform(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.pages.about.aboutThePlatform');
    }

    public function contact_post(Request $request): \Illuminate\Http\RedirectResponse
    {
        $formFields = $request->validate([
            'fullname' => 'required|string',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        Connection::create($formFields);

        return redirect()->route('user_contact')->with('success','Xabar muvaffaqiyatli yuborildi.');
    }

    public function gallery(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $photos = Photo::all();
        $videos = Video::all();
        $abouts = About::where('type', 'gazeta')->orWhere('type', 'sayt')->get();
        return view('user.pages.gallery', compact('photos','videos', 'abouts'));    }

    public function gallery_photos(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $photos = Photo::all();
        $abouts = About::where('type', 'gazeta')->orWhere('type', 'sayt')->get();
        return view('user.pages.gallery.photos', ["photos" => $photos, "abouts" => $abouts]);    }

    public function gallery_videos(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $videos = Video::all();
        return view('user.pages.gallery.videos', ["videos" => $videos]);    }


    public function literature(){
        return view('user.pages.literature');    }

    public function literature_textbooks(){
        return view('user.pages.literature.textbooks');    }

    public function literature_manuals(Request $request){
        $publishers = TrainingManual::distinct()->pluck('publisher');
        $authors = TrainingManual::distinct()->pluck('authors');
        $locales = Locale::all();

        $query = TrainingManual::query();

        // Filter by search_publisher
        if ($request->has("search_publisher") && $request->search_publisher != "None") {
            $query->where('publisher', $request->search_publisher);
        }

        // Filter by search_language
        if ($request->has("search_language") && $request->search_language != "None") {
            $query->where('locale_id', $request->search_language);
        }

        // Filter by search_author
        if ($request->has("search_author") && $request->search_author != "None") {
            $query->where('authors', $request->search_author);
        }

        // Filter by keyword search
        if ($request->q) {
            $query->where('authors', 'like', '%' . $request->q . '%')
                ->orWhere('name', 'like', '%' . $request->q . '%');
        }

        $training_manuals = $query->get();

        return view('user.pages.literature.manuals', compact('publishers', 'authors', 'training_manuals', 'locales'));
    }

    public function literature_methodical(){
        return view('user.pages.literature.methodical');    }


    public function magazines(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $journals = Journal::all();
        return view('user.pages.magazines', compact('journals'));    }

    public function magazines_yevrope(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $journals = Journal::where('category', "1")->get();
        return view('user.pages.magazines.yevropa', compact('journals'));    }

    public function magazines_amerika(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $journals = Journal::where('category', "2")->get();
        return view('user.pages.magazines.amerika', compact('journals'));    }

    public function magazines_turkiya(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $journals = Journal::where('category', "3")->get();
        return view('user.pages.magazines.turkiya', compact('journals'));    }

    public function magazines_rossiya(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $journals = Journal::where('category', "4")->get();
        return view('user.pages.magazines.rossiya', compact('journals'));    }

    public function magazines_central_asia(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $journals = Journal::where('category', "5")->get();
        return view('user.pages.magazines.central_asia', compact('journals'));    }


    public function scientific_research(){
        return view('user.pages.scientific_research');    }

    public function scientific_research_dissertations(Request $request){
        $years = Dissertations::all()->pluck('thesis_date')->map(function ($date) {
            return \Carbon\Carbon::parse($date)->format('Y');
        });
        $locales = Locale::all();
        $authors = Dissertations::distinct()->pluck('author');

        $query = Dissertations::query();

        $search_author = false;
        $search_locale = false;
        $search_year = false;
        $q = false;

        // Filter by author
        if ($request->has("search_author") && $request->search_author != "None") {
            $query->where('author', $request->search_author);
            $search_author = $request->search_author;
        }

        // Filter by locale
        if ($request->has("search_locale") && $request->search_locale != "None") {
            $query->where('locale_id', $request->search_locale);
            $search_locale = $request->search_locale;
        }

        // Filter by year
        if ($request->has("search_year") && $request->search_year != "None") {
            $search_year = $request->search_year;
            // Assuming 'search_year' contains the year in YYYY format
            $query->whereYear('thesis_date', $search_year);
        }

        // Filter by keyword search
        if ($request->q) {
            $query->where(function ($query) use ($request) {
                $query->where('author', 'like', '%' . $request->q . '%')
                    ->orWhere('topic', 'like', '%' . $request->q . '%');
            });
            $q = $request->q;
        }

        $dissertations = $query->orderBy('thesis_date')->get();

        return view('user.pages.scientific_research.dissertations', compact('years', 'locales', 'authors', 'dissertations', 'search_year', 'search_locale', 'search_year', 'search_author', 'q'));
    }

    public function scientific_research_abstracts(Request $request){
        $locales = Locale::all();
        $academicDegrees = Abstracts::distinct()->pluck('academic_degree')->toArray();
        $protectionYears = Abstracts::distinct()->pluck('protection_year')->toArray();
        $query = Abstracts::query();

        $search_academicDegree = false;
        $search_locale = false;
        $search_protectionYear = false;
        $q = false;

        // Filter by search_publisher
        if ($request->has("search_academicDegree") && $request->search_academicDegree != "None") {
            $query->where('academic_degree', $request->search_academicDegree);
            $search_academicDegree = $request->search_academicDegree;
        }

        // Filter by search_language
        if ($request->has("search_locale") && $request->search_locale != "None") {
            $query->where('locale_id', $request->search_locale);
            $search_locale = $request->search_locale;
        }

        // Filter by search_author
        if ($request->has("search_protectionYear") && $request->search_protectionYear != "None") {
            $query->where('protection_year', $request->search_protectionYear);
            $search_protectionYear = $request->search_protectionYear;
        }

        // Filter by keyword search
        if ($request->q) {
            $query->where('authors', 'like', '%' . $request->q . '%')
                ->orWhere('name', 'like', '%' . $request->q . '%');
            $q = $request->q;
        }

        $abstracts = $query->get();
//        dd( $abstracts[102]->file_url);
//        if(\Illuminate\Support\Facades\File::exists(public_path('storage/abstract_files/1.pdf'))){
//            dd(true);
//        }else{dd(false);}
        return view('user.pages.scientific_research.abstracts', compact("locales", "academicDegrees", "protectionYears", "abstracts", "search_protectionYear", "search_academicDegree", "search_locale", "q"));    }

    public function scientific_research_monographs(Request $request){
        $publishers = Monograph::distinct()->pluck('publisher');
        $authors = Monograph::distinct()->pluck('authors');
        $locales = Locale::all();

        $query = Monograph::query();

        $search_publisher = false;
        $search_language = false;
        $search_author = false;
        $q = false;

        // Filter by search_publisher
        if ($request->has("search_publisher") && $request->search_publisher != "None") {
            $query->where('publisher', $request->search_publisher);
            $search_publisher = $request->search_publisher;
        }

        // Filter by search_language
        if ($request->has("search_language") && $request->search_language != "None") {
            $query->where('locale_id', $request->search_language);
            $search_language = $request->search_language;
        }

        // Filter by search_author
        if ($request->has("search_author") && $request->search_author != "None") {
            $query->where('authors', $request->search_author);
            $search_author = $request->search_author;
        }

        // Filter by keyword search
        if ($request->q) {
            $query->where('authors', 'like', '%' . $request->q . '%')
                ->orWhere('name', 'like', '%' . $request->q . '%');
            $q = $request->q;
        }

        $monographs = $query->get();

        return view('user.pages.scientific_research.monographs', compact('publishers', 'authors', 'monographs', 'locales', 'search_author', 'search_language', 'search_publisher', 'q'));    }

    public function scientific_research_articles(Request $request){
        $locales = Locale::all();
        $journal_names = Article::with('status', '5')->distinct()->pluck('journal_name');
        $authors = Article::with('status', '5')->distinct()->pluck('authors');

        $query = Article::query();

        $search_author = false;
        $search_locale = false;
        $search_journal_name = false;
        $q = false;

        // Filter by search_publisher
        if ($request->has("search_author") && $request->search_author != "None") {
            $query->where('authors', $request->search_author);
            $search_author = $request->search_author;
        }

        // Filter by search_language
        if ($request->has("search_locale") && $request->search_locale != "None") {
            $query->where('locale_id', $request->search_locale);
            $search_locale = $request->search_locale;
        }

        // Filter by search_author
        if ($request->has("search_journal_name") && $request->search_journal_name != "None") {
            $query->where('journal_name', $request->search_journal_name);
            $search_journal_name = $request->search_journal_name;
        }

        // Filter by keyword search
        if ($request->q) {
            $query->where('authors', 'like', '%' . $request->q . '%')
                ->orWhere('name', 'like', '%' . $request->q . '%');
            $q = $request->q;
        }

        $articles = $query->get();

        return view('user.pages.scientific_research.articles', compact('locales', 'journal_names', 'authors', 'articles', 'search_locale', 'search_author', 'search_journal_name', 'q'));    }

    public function scientific_research_conventions(){
        $conventions = Convention::all();
        $locales = Locale::all();
        return view('user.pages.scientific_research.conventions', compact('conventions', 'locales'));
    }

    public function about(){
        return view('user.pages.about');    }

    public function about_goals(){
        return view('user.pages.about.goals_and_objectives');    }

    public function about_participants(){
        $colleagues = Researcher::all(); // Sort by 'type', 'country', and 'name'
        return view('user.pages.about.participants', compact('colleagues'));    }

    public function about_books(Request $request){
        $publishers = ResearcherBook::distinct()->pluck('publisher');
        $authors = ResearcherBook::distinct()->pluck('authors');
        $locales = Locale::all();

        $query = ResearcherBook::query();

        $search_publisher = false;
        $search_language = false;
        $search_author = false;
        $q = false;

        // Filter by search_publisher
        if ($request->has("search_publisher") && $request->search_publisher != "None") {
            $query->where('publisher', $request->search_publisher);
            $search_publisher = $request->search_publisher;
        }

        // Filter by search_language
        if ($request->has("search_language") && $request->search_language != "None") {
            $query->where('locale_id', $request->search_language);
            $search_language = $request->search_language;
        }

        // Filter by search_author
        if ($request->has("search_author") && $request->search_author != "None") {
            $query->where('authors', $request->search_author);
            $search_author = $request->search_author;
        }

        // Filter by keyword search
        if ($request->q) {
            $query->where('authors', 'like', '%' . $request->q . '%')
                ->orWhere('name', 'like', '%' . $request->q . '%');
            $q = $request->q;
        }
        $books = $query->get();

        return view('user.pages.about.books', compact('publishers', 'authors', 'books', 'locales', 'search_publisher', 'search_author', 'search_language', 'q'));

        //        $books = ResearcherBook::all();
//        return view('user.pages.about.books', compact('books'));
    }

    public function about_articles(Request $request){
        $publishers = ResearcherArticle::distinct()->pluck('article_type');
        $authors = ResearcherArticle::distinct()->pluck('authors');
        $locales = Locale::all();

        $query = ResearcherArticle::query();

        $search_publisher = false;
        $search_language = false;
        $search_author = false;
        $q = false;

        // Filter by search_publisher
        if ($request->has("search_publisher") && $request->search_publisher != "None") {
            $query->where('article_type', $request->search_publisher);
            $search_publisher = $request->search_publisher;
        }

        // Filter by search_language
        if ($request->has("search_language") && $request->search_language != "None") {
            $query->where('locale_id', $request->search_language);
            $search_language = $request->search_language;
        }

        // Filter by search_author
        if ($request->has("search_author") && $request->search_author != "None") {
            $query->where('authors', $request->search_author);
            $search_author = $request->search_author;
        }

        // Filter by keyword search
        if ($request->q) {
            $query->where('article_topic', 'like', '%' . $request->q . '%')
                ->orWhere('article_type', 'like', '%' . $request->q . '%')
                ->orWhere('authors', 'like', '%' . $request->q . '%');
            $q = $request->q;
        }
        $articles = $query->get();

        return view('user.pages.about.articles', compact('articles', "search_author", "search_language", "search_publisher", "publishers", "locales", "authors", "q"));
    }

    public function about_oav(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        $about_gazeta = About::where('type', 'gazeta')->get();
        $about_site = About::where('type', 'sayt')->get();
        $about_youtube = About::where('type', 'youtube')->get();
        return view('user.pages.about.oav', compact('about_youtube', 'about_gazeta', 'about_site'));
    }

    public function services(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.pages.services');
    }

    public function services_exam_preparation(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.pages.services.exam_preparation');
    }

    public function services_teaching_research(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.pages.services.teaching_research');
    }

    public function services_online_lecture(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.pages.services.online_lecture');
    }

    public function home_search(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $query = Abstracts::query();

        $q = false;

        // Filter by keyword search
        if ($request->q) {
            $query->where('dissertation_topic', 'like', '%' . $request->q . '%')
//                ->orWhere('dissertation_topic', 'like', '%' . $request->q . '%')
//                ->orWhere('academic_degree', 'like', '%' . $request->q . '%')
//                ->orWhere('specialty_code_and_name', 'like', '%' . $request->q . '%')
//                ->orWhere('protection_year', 'like', '%' . $request->q . '%')
            ;
            $q = $request->q;
        }

        $abstracts = $query->get();

        $query = Article::query();

        if ($request->q) {
            $query->where('journal_name', 'like', '%' . $request->q . '%')
//                ->orWhere('journal_name', 'like', '%' . $request->q . '%')
//                ->orWhere('authors', 'like', '%' . $request->q . '%')
//                ->orWhere('published_date', 'like', '%' . $request->q . '%')
            ;
        }

        $articles = $query->get();


        $query = Convention::query();

        if ($request->q) {
            $query->where('name', 'like', '%' . $request->q . '%')
//                ->orWhere('description', 'like', '%' . $request->q . '%')
//                ->orWhere('published_date', 'like', '%' . $request->q . '%')
            ;
        }

        $convention = $query->get();


        $query = Dissertations::query();

        if ($request->q) {
            $query->where('topic', 'like', '%' . $request->q . '%')
//                ->orWhere('country', 'like', '%' . $request->q . '%')
//                ->orWhere('author', 'like', '%' . $request->q . '%')
            ;
        }

        $dissertations = $query->get();


        $query = FacultyBook::query();

        if ($request->q) {
            $query->where('book_name', 'like', '%' . $request->q . '%')
//                ->orWhere('title', 'like', '%' . $request->q . '%')
//                ->orWhere('publication_date', 'like', '%' . $request->q . '%')
//                ->orWhere('book_name', 'like', '%' . $request->q . '%')
//                ->orWhere('authors', 'like', '%' . $request->q . '%')
            ;
        }

        $facultybooks = $query->get();


        $query = Journal::query();

        if ($request->q) {
            $query->where('name', 'like', '%' . $request->q . '%')
//                ->orWhere('name', 'like', '%' . $request->q . '%')
            ;
        }

        $journal = $query->get();


        $query = Monograph::query();

        if ($request->q) {
            $query->where('name', 'like', '%' . $request->q . '%')
//                ->orWhere('name', 'like', '%' . $request->q . '%')
//                ->orWhere('publisher', 'like', '%' . $request->q . '%')
            ;
        }

        $monograph = $query->get();


        $query = ResearcherArticle::query();

        if ($request->q) {
            $query->where('article_topic', 'like', '%' . $request->q . '%')
//                ->orWhere('article_type', 'like', '%' . $request->q . '%')
//                ->orWhere('article_topic', 'like', '%' . $request->q . '%')
//                ->orWhere('authors', 'like', '%' . $request->q . '%')
            ;
        }

        $researchers_articles = $query->get();


        $query = ResearcherBook::query();

        if ($request->q) {
            $query->where('name', 'like', '%' . $request->q . '%')
//                ->orWhere('name', 'like', '%' . $request->q . '%')
            ;
        }

        $researchers_books = $query->get();


        $query = TrainingManual::query();

        if ($request->q) {
            $query->where('name', 'like', '%' . $request->q . '%')
//                ->orWhere('authors', 'like', '%' . $request->q . '%')
//                ->orWhere('publisher', 'like', '%' . $request->q . '%')
//                ->orWhere('name', 'like', '%' . $request->q . '%')
            ;
        }

        $training_manual = $query->get();

        return view('user.pages.search', compact('articles', 'abstracts', 'training_manual', 'researchers_books', 'researchers_articles', 'convention', 'monograph', 'journal', 'dissertations', 'facultybooks', 'q'));
    }
}
