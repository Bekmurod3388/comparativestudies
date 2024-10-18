@extends('admin.master') {{-- Assuming you have a layout --}}

@section('content')
    <div class="container">
        <h2 class="my-4">Textbooks</h2>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Button to trigger Create Textbook Modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createTextbookModal">
            Add Textbook
        </button>

        <!-- Table for Textbooks -->
        <table class="table">
            <thead>
            <tr>
                <th>Book Name</th>
                <th>Authors</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($textbooks as $textbook)
                <tr>
                    <td>{{ $textbook->book_name }}</td>
                    <td>{{ $textbook->authors }}</td>
                    <td><a href="{{ asset('storage/' . $textbook->file) }}" target="_blank">View File</a></td>
                    <td>
                        <!-- Edit Button -->
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editTextbookModal{{ $textbook->id }}">
                            Edit
                        </button>

                        <!-- Delete Form -->
                        <form action="{{ route('textbooks.destroy', $textbook->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this textbook?');">Delete</button>
                        </form>
                    </td>
                </tr>

                <!-- Edit Textbook Modal -->
                <div class="modal fade" id="editTextbookModal{{ $textbook->id }}" tabindex="-1"
                     aria-labelledby="editTextbookLabel{{ $textbook->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editTextbookLabel{{ $textbook->id }}">Edit Textbook</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Edit Form -->
                                <form action="{{ route('textbooks.update', $textbook->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="book_name" class="form-label">Book Name</label>
                                        <input type="text" class="form-control" id="book_name" name="book_name"
                                               value="{{ $textbook->book_name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="authors" class="form-label">Authors</label>
                                        <input type="text" class="form-control" id="authors" name="authors"
                                               value="{{ $textbook->authors }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="file" class="form-label">File (optional)</label>
                                        <input type="file" class="form-control" id="file" name="file">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Textbook</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Create Textbook Modal -->
    <div class="modal fade" id="createTextbookModal" tabindex="-1" aria-labelledby="createTextbookLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createTextbookLabel">Add Textbook</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Create Form -->
                    <form action="{{ route('textbooks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="book_name" class="form-label">Book Name</label>
                            <input type="text" class="form-control" id="book_name" name="book_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="authors" class="form-label">Authors</label>
                            <input type="text" class="form-control" id="authors" name="authors" required>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Textbook</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
