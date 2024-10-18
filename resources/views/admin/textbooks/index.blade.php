@extends('admin.master') {{-- Assuming you have a layout --}}

@section('content')
    <div class="container">
        <h2 class="my-4">O`quv qo`llanmalar</h2>

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
            O`quv qo`llanma qo`shish
        </button>

        <!-- Table for Textbooks -->
        <table class="table">
            <thead>
            <tr>
                <th>Kitob nomi</th>
                <th>Avtorlar</th>
                <th>Fayl</th>
                <th>Harakatlar</th>
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
                            O`zgartirish
                        </button>

                        <!-- Delete Form -->
                        <form action="{{ route('textbooks.destroy', $textbook->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('O`chirishga aminmisiz?');">O`chirish</button>
                        </form>
                    </td>
                </tr>

                <!-- Edit Textbook Modal -->
                <div class="modal fade" id="editTextbookModal{{ $textbook->id }}" tabindex="-1"
                     aria-labelledby="editTextbookLabel{{ $textbook->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editTextbookLabel{{ $textbook->id }}">O`quv qo`llanmani o`zgartirish</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Edit Form -->
                                <form action="{{ route('textbooks.update', $textbook->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="book_name" class="form-label">Kitob nomi</label>
                                        <input type="text" class="form-control" id="book_name" name="book_name"
                                               value="{{ $textbook->book_name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="authors" class="form-label">Avtorlar</label>
                                        <input type="text" class="form-control" id="authors" name="authors"
                                               value="{{ $textbook->authors }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="file" class="form-label">Fayl</label>
                                        <input type="file" class="form-control" id="file" name="file">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bekor qilish</button>
                                        <button type="submit" class="btn btn-primary">Yangilash</button>
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
                    <h5 class="modal-title" id="createTextbookLabel">O`quv qo`llanma qo`shish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Create Form -->
                    <form action="{{ route('textbooks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="book_name" class="form-label">Kitob nomi</label>
                            <input type="text" class="form-control" id="book_name" name="book_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="authors" class="form-label">Avtorlar</label>
                            <input type="text" class="form-control" id="authors" name="authors" required>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Fayl</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bekor qilish</button>
                            <button type="submit" class="btn btn-primary">Qo'shish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
