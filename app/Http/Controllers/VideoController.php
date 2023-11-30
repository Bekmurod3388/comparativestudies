<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_url' => 'required|url',
        ]);

        $url = $request->video_url;
        $videoId = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_FILENAME);
        $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
        if ($query = parse_url($url, PHP_URL_QUERY)) {
            $embeddedUrl .= '?' . $query;
        }
        Video::create([
            "title" => $request->title,
            "video_url" => $embeddedUrl
        ]);

        return redirect()->route('videos.index')->with('success', 'Video added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'video_url' => 'required|url',
        ]);

        $url = $request->video_url;
        $videoId = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_FILENAME);
        $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
        if ($query = parse_url($url, PHP_URL_QUERY)) {
            $embeddedUrl .= '?' . $query;
        }

        $video->update([
            "title" => $request->title,
            "video_url" => $embeddedUrl
        ]);

        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }
}
