@extends('user.layouts.master')
@section('content')
<div class="blog">
    <div class="container">
        <!-- <div class="blurry-background"></div> -->
        <div class="blog_start">
            <div class="blog_web">
                <div class="blog_web-start">
                    <h3>BIZ HAQIMIZDA WEB SAYTLARDA
                    </h3>
                    <div class="blog_web-about">
                        @forelse($about_site as $sayt)
                            <a href="{{ $sayt->url }}">
                                <div class="blog_web-about-box">
                                    <div class="blog_web-about-img">
                                        <img src="{{ asset('storage/' . $sayt->img) }}"
                                             alt="blog">
                                    </div>
                                    <div class="blog_web-about-text">
                                        <p>{{ $sayt->title }}</p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <h1>Ma'lumot mavjud emas</h1>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="blog_magazine">
                <div class="blog_web-start">
                    <h3>BIZ HAQIMIZDA GAZETALARDA
                    </h3>
                    <div class="blog_web-about">
                        @forelse($about_gazeta as $jour)
                            <a href="{{  asset('storage/oav_pdf/' . $jour->url) }}" target="_blank">
                                <div class="blog_web-about-box">
                                    <div class="blog_web-about-img">
                                        <img src="{{ asset('storage/' . $jour->img) }}"
                                             alt="blog">
                                    </div>
                                    <div class="blog_web-about-text">
                                        <p>{{ $jour->title }}</p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <h1>Ma'lumot mavjud emas</h1>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="blog_youtube">
                <div class="blog_web-start">
                    <h3>BIZ HAQIMIZDA YOUTUBE
                    </h3>
                    <div class="blog_web-about">
                        @forelse($about_youtube as $you)
                            <a href="{{$you->url}}" target="_blank">
                                <div class="blog_web-about-box">
                                    <div class="blog_web-about-img">
                                        <iframe
                                            width="100%"
                                            height="300"
                                            src="{{ $you->url }}"
                                        >
                                        </iframe>                       </div>
                                    <div class="blog_web-about-text">
                                        <p>{{ $you->title }}</p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <h1>Ma'lumot mavjud emas</h1>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
