<?php

namespace App\Http\Controllers;

use App\Models\Dissertations;
use App\Models\Locale;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DissertationsController extends Controller
{
    /**
     * Display a listing of the dissertations.
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function index(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $dissertations = Dissertations::all();
        return view('admin.dissertations.index', compact('dissertations'));
    }

    /**
     * Show the form for creating a new dissertation.
     *
     * @return Application|Factory|\Illuminate\Contracts\Foundation\Application|View
     */
    public function create(): View|Factory|Application|\Illuminate\Contracts\Foundation\Application
    {
        $locales = Locale::all();
        return view('admin.dissertations.create', compact('locales'));
    }

    /**
     * Store a newly created dissertation in the database.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'locale_id' => 'required',
            'country' => 'required',
            'author' => 'required',
            'topic' => 'required',
            'file_pdf' => 'nullable|file|mimes:pdf,doc,docx',
            'file_url' => 'nullable|url',
            'thesis_date' => 'nullable|date',
        ]);

        if($request->hasFile('file_pdf')){
            $validatedData['file_url'] = $request->file('file_pdf')->store('faculty_books/book_files', 'public');
        }

        unset($validatedData['file_pdf']); // Remove 'file_pdf' from the array

        Dissertations::create($validatedData);

        return redirect()->route('dissertations.index')->with('success', 'Dissertatsiya muvaffaqiyatli yaratildi!');
    }

    /**
     * Show the form for editing the specified dissertation.
     *
     * @param  Dissertations  $dissertation
     * @return Application|Factory|\Illuminate\Contracts\Foundation\Application|View
     */
    public function edit(Dissertations $dissertation): View|Factory|Application|\Illuminate\Contracts\Foundation\Application
    {
        $locales = Locale::all();
        return view('admin.dissertations.edit', compact('dissertation', 'locales'));
    }

    /**
     * Update the specified dissertation in the database.
     *
     * @param Request $request
     * @param  Dissertations  $dissertation
     * @return RedirectResponse
     */
    public function update(Request $request, Dissertations $dissertation): RedirectResponse
    {
        $validatedData = $request->validate([
            'locale_id' => 'required',
            'country' => 'required',
            'author' => 'required',
            'topic' => 'required',
            'file_url' => 'nullable|url',
            'thesis_date' => 'nullable|date',
        ]);

        if($request->hasFile('file_pdf')){
            $validatedData['file_url'] = $request->file('file_pdf')->store('faculty_books/book_files', 'public');
        }

        unset($validatedData['file_pdf']); // Remove 'file_pdf' from the array

        $dissertation->update($validatedData);

        return redirect()->route('dissertations.index')->with('success', 'Dissertatsiya muvaffaqiyatli o`zgartirildi!');
    }

    /**
     * Remove the specified dissertation from the database.
     *
     * @param  Dissertations  $dissertation
     * @return RedirectResponse
     */
    public function destroy(Dissertations $dissertation): RedirectResponse
    {
        $dissertation->delete();

        return redirect()->route('dissertations.index')->with('success', 'Dissertatsiya muvaffaqiyatli o`zgartirildi!');
    }
}
