<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JournalsControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::all();
        return view("admin.journals.index", compact("journals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.journals.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
            'site_url' => 'required',
            'category' => 'required',
        ]);

        $imageName = time().'.'.$request->img_url->extension();

        // Store the image in the storage folder
        $request->img_url->storeAs('public/journals', $imageName);
        Journal::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'site_url' => $request->site_url,
            'img_url' => $imageName,
        ]);

        return redirect()->route('journals.index')->with('success','Jurnal muvaffaqiyatli yaratildi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journal $journal)
    {
        return view("admin.journals.edit", compact("journal"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journal $journal)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
            'site_url' => 'required',
            'category' => 'required',
        ]);

        if($request->img_url){
            $imageName = time().'.'.$request->img_url->extension();
            $request->img_url->storeAs('public/journals', $imageName);
            $journal->update([
                'name' => $request->name,
                'category' => $request->category,
                'description' => $request->description,
                'site_url' => $request->site_url,
                'img_url' => $imageName,
            ]);
        } else {
            $journal->update([
                'name' => $request->name,
                'category' => $request->category,
                'description' => $request->description,
                'site_url' => $request->site_url,
            ]);
        }


        return redirect()->route('journals.index')->with('success','Jurnal muvaffaqiyatli yangilandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        // Delete the image from storage
        Storage::delete('public/images/' . $journal->image);

        // Delete the journal record from the database
        $journal->delete();

        return redirect()->route('journals.index')->with('success', 'Jurnal muvaffaqiyatli o\'chirildi');
    }
}
