<?php

namespace App\Http\Controllers;

use App\Models\Monograph;
use App\Models\Locale;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MonographController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $monographs = Monograph::all();
        return view('admin.monograph.index', compact('monographs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $locales = Locale::all();
        return view('admin.monograph.create', compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $FormFields = $request->validate([
            'locale_id' => 'required|exists:locales,id',
            'name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'file_url' => 'nullable|string',
            'photo_url' => 'nullable|file|image|mimes:png,jpg,jpeg|max:2048', // Example: Allow PNG, JPG, JPEG files up to 2MB
            'published_date' => 'nullable|date',
        ]);

        if ($request->hasFile('photo_url')) {
            $FormFields['photo_url'] = $request->file('photo_url')->store('monograph_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $FormFields['file_url'] = $request->file('file_pdf')->store('monograph_files/files', 'public');
        }

//        dd($FormFields);

        Monograph::create($FormFields);

        return redirect()->route('monographs.index')
            ->with('success', 'Monografiya muvaffaqiyatli yaratildi.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Monograph $monograph
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit(Monograph $monograph): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $locales = Locale::all();
        return view('admin.monograph.edit', compact('monograph', 'locales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Monograph $monograph
     * @return RedirectResponse
     */
    public function update(Request $request, Monograph $monograph): RedirectResponse
    {
        $FormFields = $request->validate([
            'locale_id' => 'required|exists:locales,id',
            'name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'file_url' => 'nullable|string',
            'photo_url' => 'nullable|file|image|mimes:png,jpg,jpeg|max:2048', // Example: Allow PNG, JPG, JPEG files up to 2MB
            'published_date' => 'nullable|date',
        ]);

        if ($request->hasFile('photo_url')) {
            $FormFields['photo_url'] = $request->file('photo_url')->store('monograph_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $FormFields['file_url'] = $request->file('file_pdf')->store('monograph_files/files', 'public');
//            dd($FormFields);
        }

        $monograph->update($FormFields);

        return redirect()->route('monographs.index')
            ->with('success', 'Monografiya muvaffaqiyatli yaratildi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Monograph $monograph
     * @return RedirectResponse
     */
    public function destroy(Monograph $monograph): RedirectResponse
    {
        $monograph->delete();

        return redirect()->route('monographs.index')
            ->with('success', 'Monografiya muvaffaqiyatli yaratildi.');
    }
}
