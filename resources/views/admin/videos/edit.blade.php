@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">Videoni yangilash</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('videos.update', $video->id) }}">
                @csrf
                @method('PATCH')

                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}"
                           required>
                </div>

                <div class="form-group mb-3">
                    <label for="video_url">YouTube Video URL</label>
                    <input type="url" class="form-control" id="video_url" name="video_url"
                           value="{{ $video->video_url }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
