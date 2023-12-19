<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function create()
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
        }

        if ($request->type == "gazeta"){
            $fileName = time().'.'.$url->extension();
            $url->storeAs('public/oav_pdf', $fileName);
            $url = $fileName;
        }

        About::create([
            "title" => $request->title,
            "url" => $url,
            "type" => $request->type,
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
        }

        if ($request->type == "gazeta"){
            $fileName = time().'.'.$url->extension();
            $url->storeAs('public/oav_pdf', $fileName);
            $url = $fileName;
        }

        $about->update([
            "title" => $request->title,
            "url" => $url,
            "type" => $request->type,
        ]);

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
