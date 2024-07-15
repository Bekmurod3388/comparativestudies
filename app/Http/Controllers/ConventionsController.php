<?php

namespace App\Http\Controllers;

use App\Models\Convention;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConventionsController extends Controller
{
    // Display the about page with conventions
    public function about()
    {
        $conventions = Convention::where('type', '0')->get();
        return view('admin.conventions.about', compact('conventions'));
    }

    // Store a new convention
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'file_url' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,mp4',
        ]);

        $convention = new Convention();
        $convention->name = $request->name;
        $convention->description = null;
        $convention->photo_url = null; // Photo is always null
        $convention->type = '0'; // Assuming type '0' for new conventions

        if ($request->hasFile('file_url')) {
            $convention->file_url = $request->file('file_url')->store('convention_files/files', 'public');
        }

        $convention->save();

        return redirect()->route('conventions.about')->with('success', 'Convention added successfully.');
    }

    // Update an existing convention
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'file_url' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,mp4',
        ]);

        $convention = Convention::findOrFail($id);
        $convention->name = $request->name;
        $convention->description = null;
        $convention->photo_url = null; // Photo is always null

        if ($request->hasFile('file_url')) {
            if ($convention->file_url) {
                Storage::disk('public')->delete($convention->file_url);
            }
            $convention->file_url = $request->file('file_url')->store('convention_files/files', 'public');
        }

        $convention->save();

        return redirect()->route('conventions.about')->with('success', 'Convention updated successfully.');
    }

    // Delete a convention
    public function destroy($id)
    {
        $convention = Convention::findOrFail($id);

        if ($convention->file_url) {
            Storage::disk('public')->delete($convention->file_url);
        }

        $convention->delete();

        return redirect()->route('conventions.about')->with('success', 'Convention deleted successfully.');
    }

    // Display the index page with type 1 conventions
    public function index()
    {
        $conventions = Convention::where('type', '1')->with('children')->get();
        return view('admin.conventions.index', compact('conventions'));
    }

    // Store a new type 1 convention
    public function storeType1(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file_url' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $convention = new Convention();
        $convention->name = $request->name;
        $convention->description = $request->description;
        $convention->type = '1'; // Type '1' for this convention

        if ($request->hasFile('photo_url')) {
            $convention->photo_url = $request->file('photo_url')->store('convention_files/photos', 'public');
        }

        if ($request->hasFile('file_url')) {
            $convention->file_url = $request->file('file_url')->store('convention_files/files', 'public');
        }

        $convention->save();

        return redirect()->route('conventions.index')->with('success', 'Convention added successfully.');
    }

    // Update an existing type 1 convention
    public function updateType1(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file_url' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $convention = Convention::findOrFail($id);
        $convention->name = $request->name;
        $convention->description = $request->description;

        if ($request->hasFile('photo_url')) {
            if ($convention->photo_url) {
                Storage::disk('public')->delete($convention->photo_url);
            }
            $convention->photo_url = $request->file('photo_url')->store('convention_files/photos', 'public');
        }

        if ($request->hasFile('file_url')) {
            if ($convention->file_url) {
                Storage::disk('public')->delete($convention->file_url);
            }
            $convention->file_url = $request->file('file_url')->store('convention_files/files', 'public');
        }

        $convention->save();

        return redirect()->route('conventions.index')->with('success', 'Convention updated successfully.');
    }

    // Delete a type 1 convention
    public function destroyType1($id)
    {
        $convention = Convention::findOrFail($id);

        if ($convention->photo_url) {
            Storage::disk('public')->delete($convention->photo_url);
        }

        if ($convention->file_url) {
            Storage::disk('public')->delete($convention->file_url);
        }

        $convention->delete();

        return redirect()->route('conventions.index')->with('success', 'Convention deleted successfully.');
    }

    // Store a new child element
    public function storeChild(Request $request, $conventionId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file_url' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $child = new Convention();
        $child->name = $request->name;
        $child->description = $request->description;
        $child->parent_id = $conventionId;
        $child->type = '1'; // Assuming children are also type '1'

        if ($request->hasFile('photo_url')) {
            $child->photo_url = $request->file('photo_url')->store('convention_files/photos', 'public');
        }

        if ($request->hasFile('file_url')) {
            $child->file_url = $request->file('file_url')->store('convention_files/files', 'public');
        }

        $child->save();

        return redirect()->route('conventions.index')->with('success', 'Child element added successfully.');
    }

    // Update an existing child element
    public function updateChild(Request $request, $childId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file_url' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $child = Convention::findOrFail($childId);
        $child->name = $request->name;
        $child->description = $request->description;

        if ($request->hasFile('photo_url')) {
            if ($child->photo_url) {
                Storage::disk('public')->delete($child->photo_url);
            }
            $child->photo_url = $request->file('photo_url')->store('convention_files/photos', 'public');
        }

        if ($request->hasFile('file_url')) {
            if ($child->file_url) {
                Storage::disk('public')->delete($child->file_url);
            }
            $child->file_url = $request->file('file_url')->store('convention_files/files', 'public');
        }

        $child->save();

        return redirect()->route('conventions.index')->with('success', 'Child element updated successfully.');
    }

    // Delete a child element
    public function destroyChild($childId)
    {
        $child = Convention::findOrFail($childId);

        if ($child->photo_url) {
            Storage::disk('public')->delete($child->photo_url);
        }

        if ($child->file_url) {
            Storage::disk('public')->delete($child->file_url);
        }

        $child->delete();

        return redirect()->route('conventions.index')->with('success', 'Child element deleted successfully.');
    }
}
