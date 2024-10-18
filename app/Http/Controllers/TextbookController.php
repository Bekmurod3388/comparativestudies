<?php

namespace App\Http\Controllers;

use App\Models\Textbook;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TextbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): Factory|View|\Illuminate\Foundation\Application|Application
    {
        $textbooks = Textbook::all();
        return view('admin.textbooks.index', compact('textbooks'));
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
            'book_name' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'file' => 'required|file', // Only allow PDF and DOC/DOCX files up to 2MB
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('textbook_files', 'public');
        }

        Textbook::create([
            'book_name' => $request->book_name,
            'authors' => $request->authors,
            'file' => $filePath ?? null,
        ]);

        return redirect()->back()->with('success', 'Textbook added successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Textbook $textbook
     * @return RedirectResponse
     */
    public function update(Request $request, Textbook $textbook): RedirectResponse
    {
        $request->validate([
            'book_name' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'file' => 'nullable|file', // Allow file update, but not required
        ]);

        // Handle file update
        if ($request->hasFile('file')) {
            // Delete the old file
            if ($textbook->file) {
                Storage::disk('public')->delete($textbook->file);
            }

            // Store the new file
            $filePath = $request->file('file')->store('textbook_files', 'public');
            $textbook->update(['file' => $filePath]);
        }

        $textbook->update([
            'book_name' => $request->book_name,
            'authors' => $request->authors,
        ]);

        return redirect()->back()->with('success', 'Textbook updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Textbook $textbook
     * @return RedirectResponse
     */
    public function destroy(Textbook $textbook): RedirectResponse
    {
        // Delete the associated file
        if ($textbook->file) {
            Storage::disk('public')->delete($textbook->file);
        }

        $textbook->delete();

        return redirect()->back()->with('success', 'Textbook deleted successfully!');
    }
}
