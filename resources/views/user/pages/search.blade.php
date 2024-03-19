@extends('user.layouts.master')
@section('content')
    <!-- Hero Start -->
    <div class="articles">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Qidiruv natijalari</h1>
{{--            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">--}}
{{--                <li class="breadcrumb-item"><a href="#">Asosiy sahifa </a></li>--}}
{{--                <li class="breadcrumb-item"><a href="#">Loyiha haqida</a></li>--}}
{{--                <li class="breadcrumb-item text-dark" aria-current="page">Loyiha bo'yicha maqolalar</li>--}}
{{--            </ol>--}}
        </div>
    </div>
    <div class="project-o">
        <div class="container">
            <div class="project_objectives-start">
                @forelse($articles as $article)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
{{--                            <div class="project_objectives-img">--}}
{{--                                <img src="{{ asset('storage/' . $article->photo_url) }}"--}}
{{--                                alt="{{ $article->article_topic }}">--}}
{{--                            </div>--}}
                            <div class="prject_objectives-text">
                                <h3>{{ $article->dissertation_topic }}</h3>
{{--                                <p> {{ $article->article_type }}</p>--}}
{{--                                <p> {{ $article->authors }}</p>--}}
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $article->file_url)) ? asset('storage/' . $article->file_url) : $article->file_url }}" >Resurs</a>

                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($Abstracts as $abstract)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
{{--                            <div class="project_objectives-img">--}}
{{--                                <img src="{{ asset('storage/' . $article->photo_url) }}"--}}
{{--                                alt="{{ $article->article_topic }}">--}}
{{--                            </div>--}}
                            <div class="prject_objectives-text">
                                <h3>{{ $abstract->dissertation_topic }}</h3>
{{--                                <p> {{ $article->article_type }}</p>--}}
{{--                                <p> {{ $article->authors }}</p>--}}
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $abstract->file_url)) ? asset('storage/' . $abstract->file_url) : $abstract->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
{{--                @forelse($ResearcherBooks as $rb)--}}
{{--                    <div class="project_objectives-box">--}}
{{--                        <div class="project_objectives-box-start">--}}
{{--                            <div class="project_objectives-img">--}}
{{--                                <img src="{{ asset('storage/' . $article->photo_url) }}"--}}
{{--                                alt="{{ $article->article_topic }}">--}}
{{--                            </div>--}}
{{--                            <div class="prject_objectives-text">--}}
{{--                                <h3>{{ $rb->name }}</h3>--}}
{{--                                <p> {{ $article->article_type }}</p>--}}
{{--                                <p> {{ $article->authors }}</p>--}}
{{--                            </div>--}}
{{--                            <div class="project_objectives-pdf">--}}
{{--                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $article->file_url)) ? asset('storage/' . $article->file_url) : $article->file_url }}" >Resurs</a>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforelse--}}
            </div>
        </div>
    </div>
@endsection
