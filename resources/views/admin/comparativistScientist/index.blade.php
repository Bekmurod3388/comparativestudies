@extends('admin.master') {{-- Extends your layout using Sneat Admin Template --}}

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <!-- Page Title -->
            <h2 class="my-4">
                Komparativist olimlar
            </h2>

            <!-- Button to trigger the Create Scientist Modal -->
            <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal" data-bs-target="#createScientistModal">
                Olim qo'shish
            </button>
        </div>
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

        <!-- Table to display the scientists -->
        <table class="table mt-4">
            <thead>
            <tr>
                <th>Nomi</th>
                <th>Havola</th>
                <th>Amallar</th>
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
                            O`zgartirish
                        </button>

                        <!-- Delete Form -->
                        <form action="{{ route('comparativist-scientists.destroy', $scientist->id) }}" method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Olimni o`chirmoqchimisiz?');">O'chirish</button>
                        </form>
                    </td>
                </tr>

                <!-- Edit Scientist Modal -->
                <div class="modal fade" id="editScientistModal{{ $scientist->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">O'zgartirish</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Update Form -->
                                <form action="{{ route('comparativist-scientists.update', $scientist->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nomi</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $scientist->name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="url" class="form-label">Havola</label>
                                        <input type="url" class="form-control" id="url" name="url" value="{{ $scientist->url }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bekor qilish</button>
                                        <button type="submit" class="btn btn-primary">Olimni yangilash</button>
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
                    <h5 class="modal-title" id="createModalLabel">Olimni qo'shish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Create Form -->
                    <form action="{{ route('comparativist-scientists.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nomi</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">Havola</label>
                            <input type="url" class="form-control" id="url" name="url">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bekor qilish</button>
                            <button type="submit" class="btn btn-primary">Olimni qo'shish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
