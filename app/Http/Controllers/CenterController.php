<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Http\Controllers\Controller;
use App\Service\CountryService;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = CountryService::get_countries();
        $centers = Center::all();
        return view("admin.centers.index", compact("centers", "countries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = CountryService::get_countries();
        return view("admin.centers.create", compact("countries"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'country' => 'required',
            'file_url' => 'nullable',
            'file_pdf' => 'nullable',
        ]);

        if($request->hasFile('file_pdf')){
            $request['url'] = "storage/".$request->file('file_pdf')->store('center_files/files', 'public');
        } else {
            $request['url'] = $request['file_url'];
        }

        Center::create([
            "type" => $request->type,
            "url" => $request->url,
            "country" => $request->country,
            "name" => $request->name,
        ]);
        return redirect()->route('centers.index')->with('success', 'Markaz muvaffaqiyatli yaratildi.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Center $center)
    {
        $countries = CountryService::get_countries();
        return view("admin.centers.edit", compact("countries", "center"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Center $center)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'country' => 'required',
            'url' => 'required|url',
        ]);

        if($request->hasFile('file_pdf')){
            $request['url'] = $request->file('file_pdf')->store('center_files/files', 'public');
        } else {
            $request['url'] = $request['file_url'];
        }

        $center->update([
            "type" => $request->type,
            "url" => $request->url,
            "country" => $request->country,
            "name" => $request->name,
        ]);

        return redirect()->route('centers.index')->with('success', 'Markaz muvaffaqiyatli tahrirlandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Center $center)
    {
        $center->delete();
        return redirect()->route('centers.index')->with('success', 'Markaz muvaffaqiyatli o\'chirildi');
    }
}
