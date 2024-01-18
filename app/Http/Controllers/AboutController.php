<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use PhpOption\None;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);
            $url = $request->url;
        if ($request->type == "youtube"){
            $url = $request->url;
            $videoId = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_FILENAME);
            $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
            if ($query = parse_url($url, PHP_URL_QUERY)) {
                $url .= '?' . $query;
            }
        } else if ($request->type == "gazeta"){
            $request->validate(["img"=> 'required|image|mimes:jpeg,png,png,jpg,gif|max:2048']);
            $fileName = time().'.'.$url->extension();
            $url->storeAs('public/oav_pdf', $fileName);
            $url = $fileName;
        } else {
            $request->validate(["img"=> 'required|image|mimes:jpeg,png,png,jpg,gif|max:2048']);
        }

        if ($request->hasFile('img')) {
            $img_url = $request->file('img')->store('about_photos', 'public');
        } else {
            $img_url = "no";
        }


        About::create([
            "title" => $request->title,
            "url" => $url,
            "type" => $request->type,
            "img" => $img_url,
        ]);

        return redirect()->route('abouts.index')->with('success', 'OAV muvaffaqiyatli yaratildi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view("admin.about.edit", compact("about"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {

        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);

        $url = $request->url;
        if ($request->type == "youtube"){
            $url = $request->url;
            $videoId = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_FILENAME);
            $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
            if ($query = parse_url($url, PHP_URL_QUERY)) {
                $url .= '?' . $query;
            }
        } else if ($request->type == "gazeta"){
            $request->validate(["img"=> 'required|image|mimes:jpeg,png,png,jpg,gif|max:2048']);
            $fileName = time().'.'.$url->extension();
            $url->storeAs('public/oav_pdf', $fileName);
            $url = $fileName;
        } else {
            $request->validate(["img"=> 'required|image|mimes:jpeg,png,png,jpg,gif|max:2048']);
        }
        if ($request->hasFile('img')) {
            $img_url = $request->file('img')->store('about_photos', 'public');
            $about->update([
                "title" => $request->title,
                "url" => $url,
                "type" => $request->type,
                "img" => $img_url,
            ]);
        } else {
            $about->update([
                "title" => $request->title,
                "url" => $url,
                "type" => $request->type,
            ]);
        }

        return redirect()->route('abouts.index')->with('success', 'OAV muvaffaqiyatli tahrirlandi..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('abouts.index')->with('success', 'OAV muvaffaqiyatli o\'chirildi');
    }
}
