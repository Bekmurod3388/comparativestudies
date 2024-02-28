<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Carousel;
use Illuminate\Routing\Redirector;

class CarouselsController extends Controller
{
    /**
     * Display a listing of the carousels.
     *
     * @return View|Application|Factory
     */
    public function index(): View|Application|Factory
    {
        $carousels = Carousel::all();
        return view('admin.carousels.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new carousel.
     *
     * @return View|Application|Factory
     */
    public function create(): View|Application|Factory
    {
        return view('admin.carousels.create');
    }

    /**
     * Store a newly created carousel in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request): Application|Redirector|RedirectResponse
    {
        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img_url')) {
            $formFields['img_url'] = $request->file('img_url')->store('carousel_photos', 'public');
        }

        Carousel::create($formFields);

        return redirect()->route('carousels.index')->with('success', 'Karusel muvaffaqiyatli qo`shildi.');
    }

    /**
     * Show the form for editing the specified carousel.
     *
     * @param Carousel $carousel
     * @return View|Application|Factory
     */
    public function edit(Carousel $carousel): View|Application|Factory
    {
        return view('admin.carousels.edit', compact('carousel'));
    }

    /**
     * Update the specified carousel in storage.
     *
     * @param Request $request
     * @param Carousel $carousel
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, Carousel $carousel): Application|Redirector|RedirectResponse
    {
        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img_url')) {
            $formFields['img_url'] = $request->file('img_url')->store('carousel_photos', 'public');
        }

        $carousel->update($formFields);

        return redirect()->route('carousels.index')->with('success', 'Karusel muvaffaqiyatli yangilandi.');
    }

    /**
     * Remove the specified carousel from storage.
     *
     * @param Carousel $carousel
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Carousel $carousel): Application|Redirector|RedirectResponse
    {
        $carousel->delete();

        return redirect()->route('carousels.index')->with('success', 'Karusel muvaffaqiyatli o`chirildi.');
    }
}
