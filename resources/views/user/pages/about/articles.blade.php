@extends('user.layouts.master')
@section('content')
    <!-- Hero Start -->
{{--    <div class="articles">--}}
{{--        <div class="container text-center animated bounceInDown">--}}
{{--            <h1 class="display-1 mb-4">Loyiha bo'yicha maqolalar</h1>--}}
{{--            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">--}}
{{--                <li class="breadcrumb-item"><a href="#">Asosiy sahifa </a></li>--}}
{{--                <li class="breadcrumb-item"><a href="#">Loyiha haqida</a></li>--}}
{{--                <li class="breadcrumb-item text-dark" aria-current="page">Loyiha bo'yicha maqolalar</li>--}}
{{--            </ol>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 book_center">
                <div class="col-10">
                    <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                        <div class="text-center">
                            <small
                                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Loyiha bo`yicha maqolalar</small>
                            <h1 class="display-5 mb-5">Maqola qidirish uchun ma`lumotlarni to`ldiring</h1>
                        </div>
                        <form method="get">
                            <div class="row g-4 form">
                                <div class="col-lg-6 col-md-6">
                                    <select name="search_publisher" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Chop qiluvchi</option>
                                        @foreach($publishers as $publisher)
                                            <option value="{{ $publisher }}" @if($search_publisher == $publisher) selected @endif>{{ $publisher }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <select name="search_language" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Tilni tanlash</option>
                                        @foreach($locales as $locale)
                                            @if(count($locale->researcherarticle)>0)
                                                <option value="{{ $locale->id }}" @if($search_language == $locale->id) selected @endif>{{ $locale->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
{{--                                <div class="col-lg-4 col-md-4">--}}
{{--                                    <select name="search_author" class="form-select border-primary p-2"--}}
{{--                                            aria-label="Default select example">--}}
{{--                                        <option value="None" selected>Yozuvchi</option>--}}
{{--                                        @foreach($authors as $author)--}}
{{--                                            <option value="{{ $author }}" @if($search_author == $author) selected @endif>{{ $author }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <div class="col-lg-4 col-md-4 input_search">
                                    <input type="text" name="q" class="dissertation_input" @if($q) value="{{$q}}" @endif placeholder="Kalit so'zni kiriting" />
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Qidirish
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-o">
        <div class="container">
            <div class="project_objectives-start " id="project_scroll">
                @forelse($articles as $index => $article)
                    <div class="project_objectives-box">
                        <div class="project_objectives-box-start">
                            <div class="project_objectives-img">
                                <img src="{{ asset('storage/' . $article->photo_url) }}"
                                alt="{{ $article->article_topic }}">
                            </div>
                            <div class="prject_objectives-text">
                                <h3>{{ $index + 1 }}. {{ $article->article_topic }}</h3>
                                <p> {{ $article->article_type }}</p>
                                <p> {{ $article->locale->name }}</p>
                                <p> {{ $article->authors }}</p>
                            </div>
                            <div class="project_objectives-pdf">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $article->file_url)) ? asset('storage/' . $article->file_url) : $article->file_url }}" >Maqola</a>

                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Maqolalar mavjud emas</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection
