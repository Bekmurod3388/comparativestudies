<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();
        return view("admin.photos.index", compact("photos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.photos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Store the image in the storage folder
        $request->image->storeAs('public/images', $imageName);

        Photo::create([
            'title' => $request->title,
            'image' => $imageName,
        ]);

        return redirect()->route('photos.index')->with('success','Rasm muvaffaqiyatli yaratildi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        return view("admin.photos.edit", compact("photo"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete the previous image
            Storage::delete('public/images/' . $photo->image);

            // Upload the new image
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $imageName);

            // Update the photo record with the new image name
            $photo->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imageName,
            ]);
        } else {
            // Update the photo record without changing the image
            $photo->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('photos.index')->with('success', 'Rasm muvaffaqiyatli tahrirlandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        // Delete the image from storage
        Storage::delete('public/images/' . $photo->image);

        // Delete the photo record from the database
        $photo->delete();

        return redirect()->route('photos.index')->with('success', 'Rasm muvaffaqiyatli o\'chirildi');
    }
}
