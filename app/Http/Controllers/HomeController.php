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

    public function dissertations(){

        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');

//        $dissertations = Dissertations::

        // Pass the distinct countries to the view
        return view('user.pages.dissertation', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }

    public function photos(){

        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');

//        $dissertations = Dissertations::

        // Pass the distinct countries to the view
        return view('user.pages.photos', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }

    public function oav(){

        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');

//        $dissertations = Dissertations::

        // Pass the distinct countries to the view
        return view('user.pages.oav', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }

    public function contact(){

        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');

//        $dissertations = Dissertations::

        // Pass the distinct countries to the view
        return view('user.pages.contact', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }

    public function about_goals(){
        // Pass the distinct countries to the view
        return view('user.pages.about.goals_and_objectives');    }

    public function about_participants(){
        // Pass the distinct countries to the view
        return view('user.pages.about.participants');    }

    public function about_books(){
        // Pass the distinct countries to the view
        return view('user.pages.about.books');    }

    public function about_articles(){
        // Pass the distinct countries to the view
        return view('user.pages.about.articles');    }

    public function scientific_research_dissertations(){
        // Pass the distinct countries to the view
        return view('user.pages.scientific_research.dissertations');    }

    public function scientific_research_textbooks(){
        // Pass the distinct countries to the view
        return view('user.pages.scientific_research.textbooks');    }

    public function scientific_research_preparation(){
        // Pass the distinct countries to the view
        return view('user.pages.scientific_research.preparation');    }

}
