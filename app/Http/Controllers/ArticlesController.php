<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Locale;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $locales = Locale::all();
        return view('admin.articles.create', compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'locale_id' => 'required|exists:locales,id',
            'name' => 'required|string|max:255',
            'journal_name' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'file_url' => 'nullable|string',
            'photo_url' => 'nullable|string',
            'published_date' => 'nullable|date',
        ]);

        if ($request->hasFile('photo_url')) {
            $request['photo_url'] = $request->file('photo_url')->store('article_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $request['file_url'] = $request->file('file_pdf')->store('article_files/files', 'public');
        }

//        dd($request);

        Article::create($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Maqola muvaffaqiyatli yaratildi.');
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
        $request->validate([
            'locale_id' => 'required|exists:locales,id',
            'name' => 'required|string|max:255',
            'journal_name' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'file_url' => 'nullable|bigInteger',
            'photo_url' => 'nullable|string',
            'published_date' => 'nullable|date',
        ]);

        if ($request->hasFile('photo_url')) {
            $request['photo_url'] = $request->file('photo_url')->store('article_files/photos', 'public');
        }

        if($request->hasFile('file_pdf')){
            $request['file_url'] = $request->file('file_pdf')->store('article_files/files', 'public');
        }

        $article->update($request->all());

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
