<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Abstracts;
use App\Models\Locale;
use App\Models\Photo;
use App\Models\Journal;
use App\Models\Researcher;
use App\Models\Video;
use App\Models\Center;
use App\Models\Colleagues;
use App\Models\Dissertations;
use App\Service\CountryService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    public function index(){
        $videos = Video::latest()->simplePaginate(1);

        $centers = Center::all()->sortBy(['type', 'country', 'name']); // Sort by 'type', 'country', and 'name'
        $centersByType = $centers->groupBy('type');
        $countries = CountryService::get_countries();
        $colleagues = Researcher::all(); // Sort by 'type', 'country', and 'name'
        return view('user.pages.index',['videos'=>$videos, "centersByType"=>$centersByType, "countries"=>$countries, "colleagues"=>$colleagues]);
    }

    public function contact(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.pages.contact');    }

    public function gallery(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $photos = Photo::all();
        $videos = Video::all();
        return view('user.pages.gallery', compact('photos','videos'));    }

    public function gallery_photos(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $photos = Photo::all();
        return view('user.pages.gallery.photos', ["photos" => $photos]);    }

    public function gallery_videos(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $videos = Video::all();
        return view('user.pages.gallery.videos', ["videos" => $videos]);    }


    public function literature(){
        return view('user.pages.literature');    }

    public function literature_textbooks(){
        return view('user.pages.literature.textbooks');    }

    public function literature_manuals(){
        return view('user.pages.literature.manuals');    }

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

    public function scientific_research_dissertations(){
        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');
        $dissertations = Dissertations::latest()->filter(request(['search_author', 'search_languages', 'search_countries', 'search']))->paginate(6)->pluck('dissertations');
        return view('user.pages.scientific_research.dissertations', ["countries" => $countries, "author" => $author, "languages" => $languages, "dissertations" => $dissertations]);    }

    public function scientific_research_abstracts(){
        $locales = Locale::all();
        $academicDegrees = Abstracts::distinct()->pluck('academic_degree')->toArray();
        $protectionYears = Abstracts::distinct()->pluck('protection_year')->toArray();
        $abstracts = Abstracts::all();

        return view('user.pages.scientific_research.abstracts', compact("locales", "academicDegrees", "protectionYears", "abstracts"));    }

    public function scientific_research_monographs(){
        return view('user.pages.scientific_research.monographs');    }

    public function scientific_research_articles(){
        return view('user.pages.scientific_research.articles');    }

    public function scientific_research_conventions(){
        return view('user.pages.scientific_research.conventions');    }

    public function about(){
        return view('user.pages.about');    }

    public function about_goals(){
        return view('user.pages.about.goals_and_objectives');    }

    public function about_participants(){
        $colleagues = Researcher::all(); // Sort by 'type', 'country', and 'name'
        return view('user.pages.about.participants', compact('colleagues'));    }

    public function about_books(){
        return view('user.pages.about.books');    }

    public function about_articles(){
        return view('user.pages.about.articles');    }

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
}
