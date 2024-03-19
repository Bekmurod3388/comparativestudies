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
                            <div class="prject_objectives-text">
                                <h3>{{ $article->journal_name }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $article->file_url)) ? asset('storage/' . $article->file_url) : $article->file_url }}" >Resurs</a>

                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($abstracts as $abstract)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $abstract->dissertation_topic }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $abstract->file_url)) ? asset('storage/' . $abstract->file_url) : $abstract->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($training_manual as $item)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $item->name }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $item->file_url)) ? asset('storage/' . $item->file_url) : $item->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($researchers_books as $item)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $item->name }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $item->file_url)) ? asset('storage/' . $item->file_url) : $item->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($researchers_articles as $item)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $item->article_topic }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $item->file_url)) ? asset('storage/' . $item->file_url) : $item->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($monograph as $item)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $item->article_topic }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $item->file_url)) ? asset('storage/' . $item->file_url) : $item->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($journal as $item)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $item->name }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $item->file_url)) ? asset('storage/' . $item->file_url) : $item->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($facultybooks as $item)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $item->book_name }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $item->file_url)) ? asset('storage/' . $item->file_url) : $item->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($dissertations as $item)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $item->topic }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $item->file_url)) ? asset('storage/' . $item->file_url) : $item->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse($convention as $item)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="prject_objectives-text">
                                <h3>{{ $item->name }}</h3>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $item->file_url)) ? asset('storage/' . $item->file_url) : $item->file_url }}" >Resurs</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
