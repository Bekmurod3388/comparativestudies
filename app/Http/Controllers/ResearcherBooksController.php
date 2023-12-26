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
    public function add(Researcher $researcher): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchersbooks.create', ['researcher' => $researcher]);
    }
    // Store a new researcher
    public function store(Request $request, Researcher $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        // Validate form fields
        $request->validate([
            'name' => 'required',
            'country' => 'nullable|string',
            'pub_date' => 'nullable|date',
            'pages' => 'nullable|int',
            'publisher' => 'nullable|string',
        ]);

//        dd($researcher);
        ResearcherBook::create(array_merge($request->all(), ['researcher_id' => $researcher->id]));

        return redirect()->route('researcher.index')
            ->with('success', 'Kitob muvaffaqiyatli qo`shildi.');
    }
    // Display edit researcher form

    public function edit(ResearcherBook $book): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchersbooks.edit', ['book' => $book]);
    }

    // Delete a researcher
    public function destroy(ResearcherBook $book): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $book->delete();

        return redirect()->route('researcher.index')->with('success', 'Kitob muvaffaqiyatli o`chirildi.');
    }

    // Update a researcher
    public function update(Request $request, ResearcherBook $book): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        // Validate form fields
        $request->validate([
            'name' => 'required',
            'country' => 'nullable|string',
            'pub_date' => 'nullable|date',
            'pages' => 'nullable|int',
            'publisher' => 'nullable|string',
        ]);


        $book->update(array_merge($request->all()));
        // Update the researcher

        return redirect()->route('researcher.index')->with('success', 'Kitob muvaffaqiyatli o`zgartirildi.');
    }
}
