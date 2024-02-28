<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use App\Models\TrainingManual;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TrainingManualController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $trainingmanuals = TrainingManual::all();
        return view('admin.trainingmanual.index', compact('trainingmanuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $locales = Locale::all();
        return view('admin.trainingmanual.create', compact('locales'));
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
            $FormFields['photo_url'] = $request->file('photo_url')->store('trainingmanual_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $FormFields['file_url'] = $request->file('file_pdf')->store('trainingmanual_files/files', 'public');
        }

//        dd($FormFields);

        TrainingManual::create($FormFields);

        return redirect()->route('trainingmanuals.index')
            ->with('success', 'O`quv qo`llanma muvaffaqiyatli yaratildi.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param TrainingManual $trainingmanual
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit(TrainingManual $trainingmanual): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $locales = Locale::all();
        return view('admin.trainingmanual.edit', compact('trainingmanual', 'locales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param TrainingManual $trainingmanual
     * @return RedirectResponse
     */
    public function update(Request $request, TrainingManual $trainingmanual): RedirectResponse
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
            $FormFields['photo_url'] = $request->file('photo_url')->store('trainingmanual_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $FormFields['file_url'] = $request->file('file_pdf')->store('trainingmanual_files/files', 'public');
//            dd($FormFields);
        }

        $trainingmanual->update($FormFields);

        return redirect()->route('trainingmanuals.index')
            ->with('success', 'O`quv qo`llanma muvaffaqiyatli yaratildi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param TrainingManual $trainingmanual
     * @return RedirectResponse
     */
    public function destroy(TrainingManual $trainingmanual): RedirectResponse
    {
        $trainingmanual->delete();

        return redirect()->route('trainingmanuals.index')
            ->with('success', 'O`quv qo`llanma muvaffaqiyatli yaratildi.');
    }
}
