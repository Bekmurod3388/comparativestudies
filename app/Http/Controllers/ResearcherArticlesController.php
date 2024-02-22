<?php

namespace App\Http\Controllers;

use App\Models\ResearcherArticle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ResearcherArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $researcherarticles = ResearcherArticle::all();
        return view('admin.researcherarticles.index', compact('researcherarticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researcherarticles.create');
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
            'article_topic' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'article_type' => 'required',
            'protection_year' => 'required|string|max:255',
            'file_url' => 'nullable|string',
            'photo_url' => 'nullable|file|image|mimes:png,jpg,jpeg|max:2048', // Example: Allow PNG, JPG, JPEG files up to 2MB
        ]);

        if ($request->hasFile('photo_url')) {
            $FormFields['photo_url'] = $request->file('photo_url')->store('researcher_articles/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $FormFields['file_url'] = $request->file('file_pdf')->store('researcher_articles/files', 'public');
        }

//        dd($FormFields);

        ResearcherArticle::create($FormFields);

        return redirect()->route('researcherarticles.index')
            ->with('success', 'Maqola muvaffaqiyatli yaratildi.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ResearcherArticle $researcherarticle
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit(ResearcherArticle $researcherarticle): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researcherarticles.edit', compact('researcherarticle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ResearcherArticle $researcherarticle
     * @return RedirectResponse
     */
    public function update(Request $request, ResearcherArticle $researcherarticle): RedirectResponse
    {
        $FormFields = $request->validate([
            'article_topic' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'article_type' => 'required',
            'protection_year' => 'required|string|max:255',
            'file_url' => 'nullable|string',
            'photo_url' => 'nullable|file|image|mimes:png,jpg,jpeg|max:2048', // Example: Allow PNG, JPG, JPEG files up to 2MB
        ]);

        if ($request->hasFile('photo_url')) {
            $FormFields['photo_url'] = $request->file('photo_url')->store('researcherarticle_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $FormFields['file_url'] = $request->file('file_pdf')->store('researcherarticle_files/files', 'public');
//            dd($FormFields);
        }

        $researcherarticle->update($FormFields);

        return redirect()->route('researcherarticles.index')
            ->with('success', 'Maqola muvaffaqiyatli yaratildi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ResearcherArticle $researcherarticle
     * @return RedirectResponse
     */
    public function destroy(ResearcherArticle $researcherarticle): RedirectResponse
    {
        $researcherarticle->delete();

        return redirect()->route('researcherarticles.index')
            ->with('success', 'Maqola muvaffaqiyatli yaratildi.');
    }
}
