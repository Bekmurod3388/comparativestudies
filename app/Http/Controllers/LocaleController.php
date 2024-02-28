<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Locale;

class LocaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $locales = Locale::all();
        return view('admin.locales.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.locales.create');
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
            'name' => 'required|string|max:255|unique:locale',
        ]);

        Locale::create($request->all());

        return redirect()->route('locales.index')
            ->with('success', 'Til muvaffaqiyatli qo`shildi.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Locale $locale
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit(Locale $locale): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.locales.edit', compact('locale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Locale $locale
     * @return RedirectResponse
     */
    public function update(Request $request, Locale $locale): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:locale,name,' . $locale->id,
        ]);

        $locale->update($request->all());

        return redirect()->route('locales.index')
            ->with('success', 'Til muvaffaqiyatli yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Locale $locale
     * @return RedirectResponse
     */
    public function destroy(Locale $locale): RedirectResponse
    {
        $locale->delete();

        return redirect()->route('locales.index')
            ->with('success', 'Til muvaffaqiyatli o`chirildi');
    }
}
