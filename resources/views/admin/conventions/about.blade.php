@extends('admin.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row content-end">
                <div class="col-4">
                    <h5>Conventions</h5>
                </div>
                <div class="col-md-4 text-end offset-md-4">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addConventionModal">Add Convention</button>
                </div>
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>File</th>
                    <th style="width: 15%">Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($conventions->isEmpty())
                    <tr>
                        <td colspan="4">No data available.</td>
                    </tr>
                @else
                    @foreach($conventions as $convention)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $convention->name }}</td>
                            <td>
                                @if($convention->file_url)
                                    <a href="{{ asset('storage/' . $convention->file_url) }}" target="_blank">Download</a>
                                @else
                                    No file
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editConventionModal{{ $convention->id }}"><i class="bx bx-edit-alt me-1"></i></button>

                                    <form action="{{ route('conventions.destroy', $convention->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this convention?')">
                                            <i class="bx bx-trash me-1"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Edit Convention Modal -->
                        <div class="modal fade" id="editConventionModal{{ $convention->id }}" tabindex="-1" aria-labelledby="editConventionModalLabel{{ $convention->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editConventionModalLabel{{ $convention->id }}">Edit Convention</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Validation Errors -->
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ route('conventions.update', $convention->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $convention->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="file_url" class="form-label">File</label>
                                                <input type="file" class="form-control" id="file_url" name="file_url">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Convention Modal -->
    <div class="modal fade" id="addConventionModal" tabindex="-1" aria-labelledby="addConventionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addConventionModalLabel">Add Convention</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Validation Errors -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('conventions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="file_url" class="form-label">File</label>
                            <input type="file" class="form-control" id="file_url" name="file_url">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Convention</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
