@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row content-end">
                <div class="col-4">
                    <h5>Rasmlar</h5>
                </div>
                <div class="col-md-4 text-end offset-md-4">
                    <a href="{{ route('photos.create') }}" class="btn btn-primary">Rasm qo'shish</a>
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
                    <th>Sarlavha</th>
                    <th>Rasm</th>
                    <th style="width: 15%">Amallar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($photos->isEmpty())
                    <tr>
                        <td colspan="4">Ma'lumotlar mavjud emas.</td>
                    </tr>
                @else
                    @foreach($photos as $photo)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $photo->title }}</td>
                            <td>
                                <img
                                    src="{{ asset('storage/images/' . $photo->image) }}"
                                    class="card-img-top" alt="{{ $photo->title }}"
                                    style="width: 100px; height: 100px;"
                                >
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-warning" href="{{ route('photos.edit', $photo->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i></a>

                                    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('OAV ni o\'chirishni xohlaysizmi?')">
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
