@extends('user.layouts.master')
@section('content')
    <div class="videos">
        <div class="container margin text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Videolavhalar</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">Asosiy sahifa </a></li>
                <li class="breadcrumb-item"><a href="#">Galereya</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Videolavhalar</li>
            </ol>
        </div>

        <div class="container">
            <div class="videos_start">
                @forelse( $videos as $video )
                    <div class="video_box">
                        <div class="video">
                            <iframe class="video_rol"  height="300" src="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $video->video_url)) ? asset('storage/' . $video->video_url) : $video->video_url }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video_text">
                            <p><span>{{ $video->title }}</span></p>
                        </div>
                    </div>
                @empty
                    <h1>Video mavjud emas</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection
