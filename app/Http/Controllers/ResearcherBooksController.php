<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\ResearcherBook;
use App\Models\Researcher;

class ResearcherBooksController extends Controller
{
    // Display create researcher form
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $researchers = Researcher::all();
        return view('admin.researchersbooks.create', ['researchers' => $researchers]);
    }

    // Store a new researcher
    public function store(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        // Validate form fields
        $request->validate([
            'name' => 'required',
            'position' => 'nullable|string',
            'research' => 'nullable|string',
            'scholar_link' => 'nullable|url',
            'email' => 'nullable|email',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming 'img' is an image file
        ]);

        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('public/researchers');
        } else {
            $imgPath = null;
        }


        Researcher::create(array_merge($request->all(), ['img' => $imgPath]));

        return redirect()->route('researcher.index')
            ->with('success', 'Tadqiqotchi muvaffaqiyatli qo`shildi.');
    }

    // Display edit researcher form
    public function edit(Researcher $researcher): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.edit', ['researcher' => $researcher]);
    }

    // Delete a researcher
    public function destroy(Researcher $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $researcher->delete();

        return redirect()->route('researcher.index')->with('success', 'Hamkasb muvaffaqiyatli o`chirildi.');
    }

    // Update a researcher
    public function update(Request $request, Researcher $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        // Validate form fields
        $request->validate([
            'fullname' => 'required',
            'position' => 'nullable|string',
            'research' => 'nullable|string',
            'scholar_link' => 'nullable|url',
            'email' => 'nullable|email',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming 'img' is an image file
        ]);

        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('public/researchers');
        } else {
            $imgPath = null;
        }

        $researcher->update(array_merge($request->all(), ['img' => $imgPath]));
        // Update the researcher

        return redirect()->route('researcher.index')->with('success', 'Hamkasb muvaffaqiyatli o`zgartirildi.');
    }
}
