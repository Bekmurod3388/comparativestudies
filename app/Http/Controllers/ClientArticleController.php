<?php

namespace App\Http\Controllers;

use App\Models\ClientArticle;
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
        if ($user->hasRole('admin')){
            // Retrieve articles associated with the authenticated user
            $articles = ClientArticle::all();
            return view('client.articles.index', compact('articles'));
        } else {
            // Retrieve articles associated with the authenticated user
            $articles = $user->articles()->get();
            return view('client.articles.index', compact('articles'));
        }
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
            'file_url' => 'file|mimes:doc,docx',
        ]);

        if($request->hasFile('file_url')){
            $FormFields['file_url'] = $request->file('file_url')->store('article_files/files', 'public');
        }

        $FormFields['status'] = 0;
        // Retrieve the authenticated user
        $user = Auth::user();

        $FormFields['user_id'] = $user->id;

//        dd($FormFields);

        ClientArticle::create($FormFields);

        return redirect()->route('clientarticles.index')
            ->with('success', 'Maqola muvaffaqiyatli jo`natildi.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ClientArticle $article
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit(ClientArticle $article): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $locales = Locale::all();
        return view('admin.articles.edit', compact('article', 'locales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ClientArticle $article
     * @return RedirectResponse
     */
    public function update(Request $request, ClientArticle $article): RedirectResponse
    {
        // Fetch the status from the request
        $status = $request->input('status');
        dd($article->id);
        // Update the article status
        $article->status = $status;
        $article->save();

        return redirect()->route('articles.index')
            ->with('success', 'Maqola muvaffaqiyatli yaratildi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ClientArticle $article
     * @return RedirectResponse
     */
    public function destroy(ClientArticle $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Maqola muvaffaqiyatli o`chirildi.');
    }
}
