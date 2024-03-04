@extends('user.layouts.master')
@section('content')
    <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 book_center">
                <div class="col-10">
                    <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                        <div class="text-center">
                            <small
                                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Maqolalar</small>
                            <h1 class="display-5 mb-5">Maqola qidirish uchun ma`lumotlarni to`ldiring</h1>
                        </div>
                        <form method="get">
                            <div class="row g-4 form">
                                <div class="col-lg-4 col-md-4">
                                    <select name="search_journal_name" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Jurnal nomi</option>
                                        @foreach($journal_names as $journal_name)
                                            <option value="{{ $journal_name }}" @if($search_journal_name == $journal_name) selected @endif>{{ $journal_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <select name="search_locale" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Tilni tanlash</option>
                                        @foreach($locales as $locale)
                                            @if(count($locale->article)>0)
                                                <option value="{{ $locale->id }}" @if($search_locale == $locale->id) selected @endif>{{ $locale->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4">{{$search_author}}
                                    <select name="search_author" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Yozuvchini tanlash</option>
                                        @foreach($authors as $author)
                                            <option value="{{ $author }}" @if($search_author == $author) selected @endif>{{ $author }}</option>
                                        @endforeach
                                    </select>
                                </div>
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
    <div class="textbook_two">
        <div class="container">
            <div class="textbook_two-start">
                <div class="textbooks_boxs-start">
                    @forelse($articles as $article)
                        <div class="textbooks_boxs">
                            <div class="project_objectives-start">
                                <div class="project_objectives-box">
                                    <div class="project_objectives-box-start">
                                        <div class="textbook_left">
                                            <div class="textbook_img">
                                                <img src="{{ asset('storage/' . $article->photo_url) }}"
                                                     alt="{{ $article->name }}">
                                            </div>
                                            <div class="prject_objectives-text">
                                                <h3>{{ $article->name }} {{ \Carbon\Carbon::parse($article->published_date)->format('Y') }}</h3>
                                                <p>{{$article->authors}}</p>
                                                <p>{{ $article->journal_name }}</p>
                                            </div>
                                        </div>
                                        <div class="textbook_right">

                                            <div class="textbook_file">
                                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $article->file_url)) ? asset('storage/' . $article->file_url) : $article->file_url }}">
                                                    <button>
                                                        Maqola sahifasi
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="pb-5">Maqola topilmadi</h1>
                    @endforelse
                </div>
                <div class="textbook_btns">
                    @foreach($locales as $locale)
                        @if(count($locale->article)>0)
                            <button value="{{ $locale->id }}">{{ $locale->name }}</button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
