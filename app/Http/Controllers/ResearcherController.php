<?php
namespace App\Http\Controllers;

use App\Models\ResearcherBook;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Researcher;
use Illuminate\Routing\Redirector;

class ResearcherController extends Controller
{
    // Display all colleagues
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
//        $researchers = Researcher::find(3)->books()->all();
//        dd($researchers);
        return view('admin.researchers.index', [
            'researchers' => Researcher::all()
        ]);
    }

    // Display create researcher form
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.create');
    }

    // Store a new researcher
    public function store(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        // Validate form fields
         $request->validate([
            'fullname' => 'required',
            'position' => 'nullable|string',
            'research' => 'nullable|string',
            'scholar' => 'nullable|url',
            'email' => 'nullable|email',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming 'img' is an image file
        ]);

        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('researchers', 'public');
        } else {
            $imgPath = null;
        }
//        dd($request);

        Researcher::create(array_merge($request->all(), ['img' => $imgPath]));

        return redirect()->route('researcher.index')
            ->with('success', 'Ishtirokchi muvaffaqiyatli qo`shildi.');
    }

    // Display edit researcher form
    public function edit(Researcher $researcher): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.researchers.edit', ['researcher' => $researcher]);
    }

    // Delete a researcher
    public function destroy(Researcher $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $researcher->delete();

        return redirect()->route('researcher.index')->with('success', 'Ishtirokchi muvaffaqiyatli o`chirildi.');
    }

    // Update a researcher
    public function update(Request $request, Researcher $researcher): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
    // Validate form fields
        $request->validate([
            'fullname' => 'required',
            'position' => 'nullable|string',
            'research' => 'nullable|string',
            'scholar' => 'nullable|url',
            'email' => 'nullable|email',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming 'img' is an image file
        ]);

        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('public/researchers');
        }


        $researcher->update(array_merge($request->all(), ['img' => $imgPath]));
        // Update the researcher

        return redirect()->route('researcher.index')->with('success', 'Ishtirokchi muvaffaqiyatli o`zgartirildi.');
    }
}
