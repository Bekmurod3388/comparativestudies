<?php

namespace App\Http\Controllers;

use App\Models\Abstracts;
use App\Models\Locale;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AbstractsController extends Controller
{
    /**
     * Display a listing of the abstracts.
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function index(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $abstracts = Abstracts::all();
        return view('admin.abstracts.index', compact('abstracts'));
    }

    /**
     * Show the form for creating a new abstract.
     *
     * @return Application|Factory|\Illuminate\Contracts\Foundation\Application|View
     */
    public function create(): View|Factory|Application|\Illuminate\Contracts\Foundation\Application
    {
        $academic_degrees = Abstracts::academicDegreesList(); // Assuming you have a method to retrieve degrees
        $locales = Locale::all();
        return view('admin.abstracts.create', compact('locales', 'academic_degrees'));
    }

    /**
     * Store a newly created abstract in the database.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'locale_id' => 'required',
            'applicant_name' => 'required',
            'dissertation_topic' => 'required',
            'academic_degree' => 'required',
            'file_pdf' => 'nullable|file|mimes:pdf,doc,docx',
            'file_url' => 'nullable|url',
            'specialty_code_and_name' => 'nullable|string',
            'protection_year' => 'nullable',
        ]);
//        dd($request);

        if($request->hasFile('file_pdf')){
            $validatedData['file_url'] = $request->file('file_pdf')->store('abstracts/files', 'public');
        }

        unset($validatedData['file_pdf']); // Remove 'file_pdf' from the array
        Abstracts::create($validatedData);

        return redirect()->route('abstracts.index')->with('success', 'Avtoreferat muvaffaqiyatli yaratildi!');
    }

    /**
     * Show the form for editing the specified abstract.
     *
     * @param  abstracts  $abstract
     * @return Application|Factory|\Illuminate\Contracts\Foundation\Application|View
     */
    public function edit(abstracts $abstract): View|Factory|Application|\Illuminate\Contracts\Foundation\Application
    {
        $academic_degrees = Abstracts::academicDegreesList(); // Assuming you have a method to retrieve degrees
        $locales = Locale::all();
        return view('admin.abstracts.edit', compact('abstract', 'locales', 'academic_degrees'));
    }

    /**
     * Update the specified abstract in the database.
     *
     * @param Request $request
     * @param  abstracts  $abstract
     * @return RedirectResponse
     */
    public function update(Request $request, abstracts $abstract): RedirectResponse
    {
        $validatedData = $request->validate([
            'locale_id' => 'required',
            'applicant_name' => 'required',
            'dissertation_topic' => 'required',
            'academic_degree' => 'required',
            'file_url' => 'nullable|url',
            'specialty_code_and_name' => 'nullable|string',
            'protection_year' => 'nullable',
        ]);

        if($request->hasFile('file_pdf')){
            $validatedData['file_url'] = $request->file('file_pdf')->store('abstracts/files', 'public');
        }

        unset($validatedData['file_pdf']); // Remove 'file_pdf' from the array
        $abstract->update($validatedData);

        return redirect()->route('abstracts.index')->with('success', 'Avtoreferat muvaffaqiyatli o`zgartirildi!');
    }

    /**
     * Remove the specified abstract from the database.
     *
     * @param  abstracts  $abstract
     * @return RedirectResponse
     */
    public function destroy(abstracts $abstract): RedirectResponse
    {
        $abstract->delete();

        return redirect()->route('abstracts.index')->with('success', 'Avtoreferat muvaffaqiyatli o`zgartirildi!');
    }
}
