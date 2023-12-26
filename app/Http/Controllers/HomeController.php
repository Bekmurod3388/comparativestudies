<?php

namespace App\Http\Controllers;

use App\Models\Researcher;
use App\Models\Video;
use App\Models\Center;
use App\Models\Colleagues;
use App\Models\Dissertations;
use App\Service\CountryService;

class HomeController extends Controller
{
    public function index(){
        $videos = Video::latest()->simplePaginate(1);

        $centers = Center::all()->sortBy(['type', 'country', 'name']); // Sort by 'type', 'country', and 'name'
        $centersByType = $centers->groupBy('type');
        $countries = CountryService::get_countries();
        $researchers = Researcher::all(); // Sort by 'type', 'country', and 'name'
        return view('user.pages.index',['videos'=>$videos, "centersByType"=>$centersByType, "countries"=>$countries, "researchers"=>$researchers]);
    }

    public function contact(){
        return view('user.pages.contact');    }


    public function gallery(){

        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');
        return view('user.pages.gallery', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }

    public function gallery_photos(){

        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');
        return view('user.pages.gallery.photos', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }

    public function gallery_videos(){

        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');
        return view('user.pages.gallery.videos', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }


    public function literature(){
        return view('user.pages.literature');    }

    public function literature_textbooks(){
        return view('user.pages.literature.textbooks');    }

    public function literature_manuals(){
        return view('user.pages.literature.manuals');    }

    public function literature_methodical(){
        return view('user.pages.literature.methodical');    }


    public function scientific_research(){
        return view('user.pages.scientific_research');    }

    public function scientific_research_dissertations(){
        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');
        return view('user.pages.scientific_research.dissertations', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }

    public function scientific_research_textbooks(){
        return view('user.pages.scientific_research.textbooks');    }

    public function scientific_research_preparation(){
        return view('user.pages.scientific_research.preparation');    }


    public function about(){
        return view('user.pages.about');    }

    public function about_goals(){
        return view('user.pages.about.goals_and_objectives');    }

    public function about_participants(){
        return view('user.pages.about.participants');    }

    public function about_books(){
        return view('user.pages.about.books');    }

    public function about_articles(){
        return view('user.pages.about.articles');    }

    public function about_oav(){
        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');
        return view('user.pages.about.oav', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }

}
