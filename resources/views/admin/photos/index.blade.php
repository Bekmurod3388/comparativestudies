@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Rasmlar</h2>
                <a href="{{ route('photos.create') }}" class="btn btn-primary">Rasm qo'shish</a>

                @if(session('success'))
                    <div class="alert alert-success mt-3" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if($photos->isEmpty())
                    <p class="mt-3">No photos available.</p>
                @else
                    <div class="row mt-3">
                        @foreach($photos as $photo)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="{{ asset('storage/images/' . $photo->image) }}" class="card-img-top" alt="{{ $photo->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $photo->title }}</h5>
                                        <a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-primary">Edit</a>

                                        <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Rasmni ochirishni xohlaysizmi?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
