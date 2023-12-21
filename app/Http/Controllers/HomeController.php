<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Center;
use App\Models\Researchers;
use App\Models\Dissertations;
use App\Service\CountryService;

class HomeController extends Controller
{
    public function index(){
        $videos = Video::latest()->simplePaginate(1);

        $centers = Center::all()->sortBy(['type', 'country', 'name']); // Sort by 'type', 'country', and 'name'
        $centersByType = $centers->groupBy('type');
        $countries = CountryService::get_countries();
        $researchers = Researchers::all(); // Sort by 'type', 'country', and 'name'
        return view('user.pages.index',['videos'=>$videos, "centersByType"=>$centersByType, "countries"=>$countries, "researchers"=>$researchers]);
    }

    public function dissertations(){

        $countries = Dissertations::distinct()->pluck('country');
        $languages = Dissertations::distinct()->pluck('language');
        $author = Dissertations::distinct()->pluck('author');

//        $dissertations = Dissertations::

        // Pass the distinct countries to the view
        return view('user.pages.dissertation', ["countries" => $countries, "author" => $author, "languages" => $languages]);    }
}
