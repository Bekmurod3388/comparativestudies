@extends('admin.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row content-end">
                <div class="col-4">
                    <h5>Jurnallar</h5>
                </div>
                <div class="col-md-4 text-end offset-md-4">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addConventionModal">Jurnal qo'shish</button>
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
                    <th>Nomi</th>
                    <th>Jurnal haqida</th>
                    <th>Fayl</th>
                    <th style="width: 20%">Amallar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($conventions->isEmpty())
                    <tr>
                        <td colspan="6">Malumotlar topilmadi.</td>
                    </tr>
                @else
                    @foreach($conventions as $convention)
                        @if(!$convention->parent_id)
                            <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $convention->name }}</td>
                            <td>{{ $convention->description }}</td>
                            <td>
                                @if($convention->file_url)
                                    <a href="{{ asset('storage/' . $convention->file_url) }}" target="_blank">Yuklash</a>
                                @else
                                    Fayl topilmadi
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editConventionModal{{ $convention->id }}"><i class="bx bx-edit-alt me-1"></i></button>

                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#manageChildrenModal{{ $convention->id }}">Maqolalar</button>

                                    <form action="{{ route('conventions.type1.destroy', $convention->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this convention?')">
                                            <i class="bx bx-trash me-1"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>


    @foreach($conventions as $convention)
        <!-- Edit Convention Modal -->
        <div class="modal fade" id="editConventionModal{{ $convention->id }}" tabindex="-1" aria-labelledby="editConventionModalLabel{{ $convention->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editConventionModalLabel{{ $convention->id }}">Jurnalni o'zgartirish</h5>
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
                        <form action="{{ route('conventions.type1.update', $convention->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nomi</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $convention->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Jurnal haqida</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $convention->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="photo_url" class="form-label">Rasm</label>
                                <input type="file" class="form-control" id="photo_url" name="photo_url">
                            </div>
                            <div class="mb-3">
                                <label for="file_url" class="form-label">Fayl</label>
                                <input type="file" class="form-control" id="file_url" name="file_url">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                                <button type="submit" class="btn btn-primary">O'zgarishlarni saqlash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Children Modal -->
        <div class="modal fade" id="manageChildrenModal{{ $convention->id }}" tabindex="-1" aria-labelledby="manageChildrenModalLabel{{ $convention->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="manageChildrenModalLabel{{ $convention->id }}">Jurnal maqolalari</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addChildModal{{ $convention->id }}">Qo'shish</button>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nomi</th>
                                    <th>Fayl</th>
                                    <th>Amallar</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach($convention->children as $child)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $child->name }}</td>
                                        <td>
                                            @if($child->file_url)
                                                <a href="{{ asset('storage/' . $child->file_url) }}" target="_blank">Yuklash</a>
                                            @else
                                                Fayl topilmadi
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editConventionModal{{ $child->id }}"><i class="bx bx-edit-alt me-1"></i></button>
                                            <form action="{{ route('conventions.children.destroy', $child->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this child?')">
                                                    <i class="bx bx-trash me-1"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Child Modal -->
        <div class="modal fade" id="addChildModal{{ $convention->id }}" tabindex="-1" aria-labelledby="addChildModalLabel{{ $convention->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addChildModalLabel{{ $convention->id }}">Maqola qo'shish</h5>
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
                        <form action="{{ route('conventions.children.store', $convention->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $convention->id }}">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nomi</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Avtorlar</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="photo_url" class="form-label">Rasm</label>
                                <input type="file" class="form-control" id="photo_url" name="photo_url" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="file_url" class="form-label">Fayl</label>
                                <input type="file" class="form-control" id="file_url" name="file_url" accept=".pdf,.doc,.docx">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                                <button type="submit" class="btn btn-primary">Qo'shish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Add Convention Modal -->
    <div class="modal fade" id="addConventionModal" tabindex="-1" aria-labelledby="addConventionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addConventionModalLabel">Jurnal qo'shish</h5>
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
                    <form action="{{ route('conventions.type1.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nomi</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Jurnal haqida</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="photo_url" class="form-label">Rasm</label>
                            <input type="file" class="form-control" id="photo_url" name="photo_url" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="file_url" class="form-label">Fayl</label>
                            <input type="file" class="form-control" id="file_url" name="file_url" accept=".pdf,.doc,.docx">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                            <button type="submit" class="btn btn-primary">Qo'shish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
