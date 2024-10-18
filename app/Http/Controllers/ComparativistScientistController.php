<?php

namespace App\Http\Controllers;

use App\Models\ComparativistScientist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application as ApplicationAlias;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ComparativistScientistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|ApplicationAlias
     */
    public function index(): Factory|View|ApplicationAlias|Application
    {
        // Retrieve all scientists from the database
        $scientists = ComparativistScientist::all();

        // Return the 'index' view with the scientists data
        return view('admin.comparativistScientist.index', compact('scientists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'nullable|url',
        ]);

        // Create a new ComparativistScientist record
        ComparativistScientist::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Olim muvaffaqiyatli qo`shildi!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ComparativistScientist $comparativistScientist
     * @return RedirectResponse
     */
    public function update(Request $request, ComparativistScientist $comparativistScientist): RedirectResponse
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'nullable|url',
        ]);

        // Update the scientist record with the validated data
        $comparativistScientist->update($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Olim muvaffaqiyatli yangilandi!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param ComparativistScientist $comparativistScientist
     * @return RedirectResponse
     */
    public function destroy(ComparativistScientist $comparativistScientist): RedirectResponse
    {
        // Delete the scientist record
        $comparativistScientist->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Olim muvaffaqiyatliq o`chirildi!');
    }
}
