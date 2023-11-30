@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Videolar</h2>
                <a href="{{ route('videos.create') }}" class="btn btn-primary">Video qo'shish</a>

                @if(session('success'))
                    <div class="alert alert-success mt-3" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if($videos->isEmpty())
                    <p class="mt-3">No videos available.</p>
                @else
                    <div class="row mt-3">
                        @foreach($videos as $video)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $video->title }}</h5>
                                        <p class="card-text">{{ $video->description }}</p>

                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="{{ $video->video_url }}" allowfullscreen></iframe>
                                        </div>

                                        <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-primary">Edit</a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this video?')">Delete</button>
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
