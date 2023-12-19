<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Center;
use App\Models\Researchers;
use Illuminate\Http\Request;
use App\Service\CountryService;

class HomeController extends Controller
{
    public function index(){
        $videos = Video::latest()->simplePaginate(1);

        $centers = Center::all()->sortBy(['type', 'country', 'name']); // Sort by 'type', 'country', and 'name'
        $centersByType = $centers->groupBy('type');
        $countries = CountryService::get_countries();
        $researchers = Researchers::all(); // Sort by 'type', 'country', and 'name'
        return view('welcome',['videos'=>$videos, "centersByType"=>$centersByType, "countries"=>$countries, "researchers"=>$researchers]);
    }

    public function dissertations(){
        $dissertation = Researchers::all();
        return view('user.pages.dissertation',["dissertation"=>$dissertation]);
    }
}
