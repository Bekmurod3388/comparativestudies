@extends('admin.master') {{-- Extends your layout using Sneat Admin Template --}}

@section('content')
    <div class="container">
        <!-- Page Title -->
        <h2 class="my-4">Comparativist Scientists</h2>

        <!-- Button to trigger the Create Scientist Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createScientistModal">
            Add Scientist
        </button>

        <!-- Table to display the scientists -->
        <table class="table mt-4">
            <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($scientists as $scientist)
                <tr>
                    <td>{{ $scientist->name }}</td>
                    <td><a href="{{ $scientist->url }}" target="_blank">{{ $scientist->url }}</a></td>
                    <td>
                        <!-- Edit Button -->
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editScientistModal{{ $scientist->id }}">
                            Edit
                        </button>

                        <!-- Delete Form -->
                        <form action="{{ route('comparativist-scientists.destroy', $scientist->id) }}" method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this scientist?');">Delete</button>
                        </form>
                    </td>
                </tr>

                <!-- Edit Scientist Modal -->
                <div class="modal fade" id="editScientistModal{{ $scientist->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Scientist</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Update Form -->
                                <form action="{{ route('comparativist-scientists.update', $scientist->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $scientist->name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="url" class="form-label">URL</label>
                                        <input type="url" class="form-control" id="url" name="url" value="{{ $scientist->url }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Scientist</button>
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

    <!-- Create Scientist Modal -->
    <div class="modal fade" id="createScientistModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Add Scientist</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Create Form -->
                    <form action="{{ route('comparativist-scientists.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="url" class="form-control" id="url" name="url">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Scientist</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
