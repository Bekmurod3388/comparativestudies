<?php

namespace App\Http\Controllers;

use App\Models\FacultyBook;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class FacultyBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function index(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $facultyBooks = FacultyBook::all();
        return view('admin.facultybooks.index', compact('facultyBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function create(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.facultybooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|Application|RedirectResponse|Redirector
     */
    public function store(Request $request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $formFields = $request->validate([
            'book_name' => 'required|string',
            'authors' => 'required|string',
            'publication_date' => 'required|date',
            'title' => 'required|string',
            'description' => 'required|string',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file_pdf' => 'nullable|file|mimes:pdf,doc,docx',
//            'file_url' => 'nullable|string',
            'file_url' => 'nullable|string',
        ]);

        if($request->hasFile('file_pdf')){
            $formFields['file_url'] = $request->file('file_pdf')->store('faculty_books/book_files', 'public');
        }

        unset($formFields['file_pdf']); // Remove 'file_pdf' from the array

        if($request->hasFile('image_url')){
            $formFields['image_url'] = $request->file('image_url')->store('faculty_books/book_photos', 'public');
        }

        FacultyBook::create($formFields);
        return redirect('/dashboard/facultybooks')->with('success', 'Kitob muvaffaqiyatli qo`shildi.');

//        return redirect('/dashboard/facultybooks/');
    }

    /**
     * Display the specified resource.
     *
     * @param FacultyBook $facultyBook
     * @return Application|Factory|\Illuminate\Contracts\Foundation\Application|View
     */
    public function show(FacultyBook $facultyBook): View|Factory|Application|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.facultybooks.show', compact('facultyBook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param FacultyBook $facultybook
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function edit(FacultyBook $facultybook): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.facultybooks.edit', compact('facultybook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param FacultyBook $facultyBook
     * @return Application|\Illuminate\Contracts\Foundation\Application|Redirector|RedirectResponse
     */
    public function update(Request $request, FacultyBook $facultyBook): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $formFields = $request->validate([
            'book_name' => 'required|string',
            'authors' => 'required|string',
            'publication_date' => 'nullable|date',
            'title' => 'required|string',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file_pdf' => 'nullable|file|mimes:pdf,doc,docx',
//            'file_url' => 'nullable|string',
            'file_url' => 'nullable|string',
        ]);

        if($request->hasFile('file_pdf')){
            $formFields['file_url'] = $request->file('file_pdf')->store('faculty_books/book_files', 'public');
        }

        unset($formFields['file_pdf']); // Remove 'file_pdf' from the array

        if($request->hasFile('image_url')){
            $formFields['image_url'] = $request->file('image_url')->store('faculty_books/book_photos', 'public');
        }

        $facultyBook->update($formFields);

        return redirect('/dashboard/facultybooks')->with('success', 'Kitob muvaffaqiyatli o`zgartirildi.');
//        return redirect('/dashboard/facultybooks/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param FacultyBook $facultyBook
     * @return Application|\Illuminate\Contracts\Foundation\Application|Redirector|RedirectResponse
     */
    public function destroy(FacultyBook $facultyBook): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $facultyBook->delete();

        return redirect('/dashboard/facultybooks')->with('success', 'Kitob muvaffaqiyatli o`chirildi.');
//        return redirect('/dashboard/facultybooks/');
    }
}
