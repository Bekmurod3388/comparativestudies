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

class AdminArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        // Retrieve the authenticated user
        $articles = ClientArticle::all();
        return view('admin.clientarticles.index', compact('articles'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function apply(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        // Retrieve the authenticated user
        $articles = ClientArticle::where('status', 0)->get();
        return view('admin.clientarticles.apply', compact('articles'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function check(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        // Retrieve the authenticated user
        $articles = ClientArticle::where('status', 2)->orwhere('status', 3)->get();
        return view('admin.clientarticles.check', compact('articles'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function reject(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        // Retrieve the authenticated user
        $articles = ClientArticle::where('status', 1)->orwhere('status', 4)->get();
        return view('admin.clientarticles.rejected', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ClientArticle $article
     * @return RedirectResponse
     */
    public function updatestatus(Request $request, ClientArticle $article): RedirectResponse
    {
        // Fetch the status from the request
        $status = $request->input('status');
        // Update the article status
        $article->status = $status;
        $article->save();

        return redirect()->route('adminarticles.index')
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
