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
    // Display all researchers
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.index', [
            'researchers' => Researchers::all()
        ]);
    }

    // Display create researcher form
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.create');
    }

    // Store a new researcher
    public function store(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        // Validate form fields
        $formFields = $request->validate([
            'fullname' => 'required',
            'position' => 'required',
            'research_fields' => 'required',
            'email' => ['required', 'email'],
            'facebook_url' => 'required',
            'instagram_url' => 'required'
        ]);

        // Handle photo upload
        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('researcher_photos', 'public');
        } else {
            $formFields['photo'] = "no";
        }

        $formFields['twitter_url'] = "no";

        // Create a new researcher
        Researchers::create($formFields);

        return redirect()->route('researchers.index')->with('success', 'Hamkasb muvaffaqiyatli qo`shildi.');
    }

    // Display edit researcher form
    public function edit(Researchers $researcher): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.edit', ['researcher' => $researcher]);
    }

    // Delete a researcher
    public function destroy(Researchers $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $researcher->delete();

        return redirect()->route('researchers.index')->with('success', 'Hamkasb muvaffaqiyatli o`chirildi.');
    }

    // Update a researcher
    public function update(Request $request, Researchers $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        // Validate form fields
        $formFields = $request->validate([
            'fullname' => 'required',
            'position' => 'required',
            'research_fields' => 'required',
            'email' => ['required', 'email'],
            'facebook_url' => 'required',
            'instagram_url' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        // Handle photo upload
        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('researcher_photos', 'public');
        }

        // Update the researcher
        $researcher->update($formFields);

        return redirect()->route('researchers.index')->with('success', 'Hamkasb muvaffaqiyatli o`zgartirildi.');
    }
}
