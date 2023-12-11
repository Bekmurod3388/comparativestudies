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
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $carousels = Carousel::all();

        return view('admin.carousels.index', compact('carousels'));
    }

    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.carousels.create');
    }

    public function store(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if($request->hasFile('img_url')){
            $formFields['img_url'] = $request->file('img_url')->store('carousel_photos', 'public');
        }
        Carousel::create($formFields);
        return redirect('/dashboard/carousels')->with('success', 'Karusel muvaffaqiyatli qo`shildi.');
//        return redirect('/dashboard/carousels');
    }

    public function edit(Carousel $carousel): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.carousels.edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if($request->hasFile('img_url')){
            $formFields['img_url'] = $request->file('img_url')->store('carousel_photos', 'public');
        }
        $carousel->update($formFields);

        return redirect('/dashboard/carousels')->with('success', 'Karusel muvaffaqiyatli o`zgartirildi.');

//        return redirect('/dashboard/carousels');
    }

    public function destroy(Carousel $carousel): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $carousel->delete();
        return redirect('/dashboard/carousels')->with('success', 'Karusel muvaffaqiyatli o`chirildi.');

//        return redirect('/dashboard/carousels');
    }
}
