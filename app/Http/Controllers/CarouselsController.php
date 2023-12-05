<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

class CarouselsController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();

        return view('admin.carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousels.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if($request->hasFile('img_url')){
            $formFields['img_url'] = $request->file('img_url')->store('carousel_photos', 'public');
        }
        Carousel::create($formFields);

        return redirect('/dashboard/carousels');    
    }

    public function edit(Carousel $carousel)
    {
        return view('admin.carousels.edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel)
    {
        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if($request->hasFile('img_url')){
            $formFields['img_url'] = $request->file('img_url')->store('carousel_photos', 'public');
        }
        $carousel->update($formFields);

        return redirect('/dashboard/carousels');    
    }

    public function destroy(Carousel $carousel)
    {
        $carousel->delete();

        return redirect('/dashboard/carousels');    
    }
}
