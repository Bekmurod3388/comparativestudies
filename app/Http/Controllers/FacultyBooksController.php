<?php

namespace App\Http\Controllers;

use App\Models\FacultyBook;
use Illuminate\Http\Request;

class FacultyBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultyBooks = FacultyBook::all();
        return view('admin.facultybooks.index', compact('facultyBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facultybooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect('/dashboard/facultybooks/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacultyBook  $facultyBook
     * @return \Illuminate\Http\Response
     */
    public function show(FacultyBook $facultyBook)
    {
        return view('admin.facultybooks.show', compact('facultyBook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacultyBook  $facultyBook
     * @return \Illuminate\Http\Response
     */
    public function edit(FacultyBook $facultybook)
    {
        return view('admin.facultybooks.edit', compact('facultybook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FacultyBook  $facultyBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacultyBook $facultyBook)
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

        return redirect('/dashboard/facultybooks/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacultyBook  $facultyBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultyBook $facultyBook)
    {
        $facultyBook->delete();

        return redirect('/dashboard/facultybooks/');
    }
}
