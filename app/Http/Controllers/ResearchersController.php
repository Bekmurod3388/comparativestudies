<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Researchers;
use Illuminate\Routing\Redirector;

class ResearchersController extends Controller
{
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.index', [
            'researchers' => Researchers::all()
        ]);
    }

    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.create');
    }

    public function store(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
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

        return redirect('/dashboard/researchers')->with('success', 'Hamkasb muvaffaqiyatli qo`shildi.');
//        return redirect('/dashboard/researchers');
    }

    public function edit(Researchers $researcher): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.edit', ['researcher' => $researcher]);
    }

    public function destroy(Researchers $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $researcher->delete();
        return redirect('/dashboard/researchers')->with('success', 'Hamkasb muvaffaqiyatli o`chirildi.');
//        return redirect('/dashboard/researchers');
    }

    public function update(Request $request, Researchers $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
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

        return redirect('/dashboard/researchers')->with('success', 'Hamkasb muvaffaqiyatli o`zgartirildi.');
//        return redirect('/dashboard/researchers');
    }
}
