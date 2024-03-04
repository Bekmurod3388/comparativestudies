<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Locale;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve articles associated with the authenticated user
        $articles = $user->articles()->get();
        return view('client.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $locales = Locale::all();
        return view('client.articles.create', compact('locales'));
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
            'file_url' => 'nullable|string',
            'photo_url' => 'nullable|file|image|mimes:png,jpg,jpeg|max:2048', // Example: Allow PNG, JPG, JPEG files up to 2MB
        ]);

        if ($request->hasFile('photo_url')) {
            $FormFields['photo_url'] = $request->file('photo_url')->store('article_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $FormFields['file_url'] = $request->file('file_pdf')->store('article_files/files', 'public');
        }

        $FormFields['status'] = 0;
        // Retrieve the authenticated user
        $user = Auth::user();

        $FormFields['user_id'] = $user->id;

//        dd($FormFields);

        Article::create($FormFields);

        return redirect()->route('clientarticles.index')
            ->with('success', 'Maqola muvaffaqiyatli jo`natildi.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit(Article $article): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $locales = Locale::all();
        return view('admin.articles.edit', compact('article', 'locales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Article $article
     * @return RedirectResponse
     */
    public function update(Request $request, Article $article): RedirectResponse
    {
        $FormFields = $request->validate([
            'locale_id' => 'required|exists:locales,id',
            'name' => 'required|string|max:255',
            'journal_name' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'file_url' => 'nullable|string',
            'photo_url' => 'nullable|file|image|mimes:png,jpg,jpeg|max:2048', // Example: Allow PNG, JPG, JPEG files up to 2MB
            'published_date' => 'nullable|date',
        ]);

        if ($request->hasFile('photo_url')) {
            $FormFields['photo_url'] = $request->file('photo_url')->store('article_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $FormFields['file_url'] = $request->file('file_pdf')->store('article_files/files', 'public');
//            dd($FormFields);
        }

        $article->update($FormFields);

        return redirect()->route('articles.index')
            ->with('success', 'Maqola muvaffaqiyatli yaratildi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return RedirectResponse
     */
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Maqola muvaffaqiyatli yaratildi.');
    }
}
