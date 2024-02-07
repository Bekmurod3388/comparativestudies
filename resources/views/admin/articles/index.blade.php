@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row content-end">
                <div class="col-4">
                    <h5>Tillar</h5>
                </div>
                <div class="col-md-4 text-end offset-md-4">
                <a href="{{ route('articles.create') }}" class="btn btn-primary">Qo`shish</a>
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
                    <th>Tili</th>
                    <th>Rasm</th>
                    <th>File</th>
                    <th style="width: 15%">Amallar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($articles->isEmpty())
                    <tr>
                        <td colspan="5">Ma'lumotlar mavjud emas.</td>
                    </tr>
                @else
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $article->name }}</td>
                            <td>{{ $article->locale->name }}</td>
                            <td>
                                <img
                                    src="{{ asset('storage/' . $article->photo_url) }}"
                                    class="card-img-top" alt="{{ $article->name }}"
                                    style="width: 100px; height: 100px;"
                                >
                            </td>
                            <td>
                                <a href="{{ asset('storage/' . $article->file_url) }}" target="_blank">Ko'rish uchun bosing</a>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-warning" href="{{ route('articles.edit', $article->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i></a>

                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Maqolani o\'chirishni xohlaysizmi?')">
                                            <i class="bx bx-trash me-1"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
