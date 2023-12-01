<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Researchers;

class ResearchersController extends Controller
{
    public function index(){
        return view('admin.researchers.index', [
            'researchers' => Researchers::all()
        ]);
    }

    public function create(){
        return view('admin.researchers.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'fullname' => 'required',
            'position' => 'required',
            'research_fields' => 'required',
            'email' => ['required', 'email'],
            'facebook_url' => 'required',
            'instagram_url' => 'required'
        ]);

        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('researcher_photos', 'public');
        } else {
            $formFields['photo'] = "no";
        }

        $formFields['twitter_url'] = "no";

        Researchers::create($formFields);

        return redirect('/dashboard/researchers');
    }

    public function edit(Researchers $researcher) {
        return view('admin.researchers.edit', ['researcher' => $researcher]);
    }
    
    public function destroy(Researchers $researcher) {
        $researcher->delete();
        return redirect('/dashboard/researchers');
    }

    public function update(Request $request, Researchers $researcher) {
        $formFields = $request->validate([
            'fullname' => 'required',
            'position' => 'required',
            'research_fields' => 'required',
            'email' => ['required', 'email'],
            'facebook_url' => 'required',
            'instagram_url' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('researcher_photos', 'public');
        }

        $researcher->update($formFields);

        return redirect('/dashboard/researchers');
    }
}
