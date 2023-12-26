@extends('admin.master')
@section('content')
    <!-- Striped Rows -->
    <div class="card">
        @unless(count($researchers) == 0)
            <div class="card-header">
                <div class="row content-end">
                    <div class="col-4">
                        <h5>Tadqiqotchilar ro'yxati</h5>
                    </div>
                    <div class="col-md-4 text-end offset-md-4">
                        <a href="{{ route('researcher.create') }}" class="btn-primary p-2 rounded">
                            Tadqiqotchi qo'shish
                        </a>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>T/R</th>
                            <th>F.I.SH</th>
                            <th>Lavozim</th>
                            <th>Rasm</th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    Kitoblar
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    Amallar
                                </div>
                            </th>
                        </tr>
                    </thead>
                    @foreach ($researchers as $researcher)
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger"></i>{{ $loop->iteration }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $researcher->fullname }}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $researcher->position }}</strong></td>
                                <td>
                                    <div class="avatar">
                                        <img src="{{$researcher->img ? asset('storage/' . $researcher->img) : asset('assets/img/avatars/1.png') }}" alt="Rasm" class="w-px-40 h-auto rounded-circle"/>
{{--                                        <img src="{{ asset('storage/' . $researcher->img) }}" alt--}}
{{--                                             class="w-px-40 h-auto rounded-circle"/>--}}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalScrollable{{$researcher->id}}"
                                        ><i
                                                class="bx bxs-book me-1"></i>Kitoblar
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-warning m-1" href="{{ route('researcher.edit', $researcher->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i></a>

                                        <form action="{{ route('researcher.destroy', $researcher->id) }}" method="POST"
                                              class="d-inline m-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Tadqiqotchini o\'chirishni xohlaysizmi?')">
                                                <i class="bx bx-trash me-1"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                @foreach ($researchers as $researcher)
                    <div class="modal fade" id="modalScrollable{{$researcher->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalScrollableTitle">{{ $researcher->fullname }}
                                        <br> Kitoblari</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    @if ($researcher->book)
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nomi</th>
                                                <th scope="col">Nashriyot</th>
                                                <th scope="col">Sahifalar</th>
                                                <th scope="col">
                                                    <div class="d-flex justify-content-center">
                                                        Amallar
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($researcher->book as $book)
                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <td>{{ $book->name }}</td>
                                                    <td>{{ $book->publisher }}</td>
                                                    <td>{{ $book->pages }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a class="btn btn-warning m-1" href="{{ route('researcher.books.edit', $book->id) }}">
                                                                <i class="bx bx-edit-alt me-1"></i>
                                                            </a>

                                                            <form action="{{ route('researcher.books.destroy', $book->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger m-1" onclick="return confirm('Kitobni o`chirishga ishonchingiz komilmi?')">
                                                                    <i class="bx bx-trash me-1"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5">
                                                        <h1>Kitob mavjud emas</h1>
                                                    </td>
                                                </tr>
                                            @endforelse                                            </tbody>
                                        </table>
                                    @else
                                        <p>{{ $researcher->fullname }} has no books listed.</p>
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-primary" href="{{ route('researcher.books.add', $researcher->id) }}"><i
                                            class="bx bxs-book-add me-1"></i>Kitob qo'shish</a>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Yopish
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card-header">
                    <div class="row content-end">
                        <div class="col-4">
                            <h5>Tadqiqotchilar bo'sh</h5>
                        </div>
                        <div class="col-md-4 text-end offset-md-4">
                            <a href="{{ route('researcher.create') }}" class="btn-primary p-2 rounded">
                                Tadqiqotchi qo'shish
                            </a>
                        </div>
                    </div>
                </div>
            @endunless
        </div>
      </div>
    <!--/ Striped Rows -->

@endsection
