@extends('user.layouts.master')
@section('content')
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-0 book_center">
                    <div class="col-10">
                        <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                            <div class="text-center">
                                <small
                                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Dissertatsiyalar</small>
                                <h1 class="display-5 mb-5">Dissertatsiya qidirish uchun ma`lumotlarni to`ldiring</h1>
                            </div>
                            <form method="get">
                                <div class="row g-4 form">
                                    <div class="col-lg-4 col-md-4">
                                        <select name="search_country" class="form-select border-primary p-2"
                                                aria-label="Default select example">
                                            <option value="None" selected>Davlat</option>
                                            @foreach($countries as $country)
                                                <option value="{{ $country }}" @if($search_country == $country) selected @endif>{{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <select name="search_locale" class="form-select border-primary p-2"
                                                aria-label="Default select example">
                                            <option value="None" selected>Tilni tanlash</option>
                                            @foreach($locales as $locale)
                                                @if(count($locale->dissertation)>0)
                                                    <option value="{{ $locale->id }}" @if($search_locale == $locale->id) selected @endif>{{ $locale->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <select name="search_author" class="form-select border-primary p-2"
                                                aria-label="Default select example">
                                            <option value="None" selected>Yozuvchini tanlash</option>
                                            @foreach($author as $aut)
                                                <option value="{{ $aut }}" @if($search_author == $aut) selected @endif>{{ $aut }}</option>
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
            @if(count($dissertations)<1)
                <h1 >Dissertatsiya topilmadi</h1>
            @endif
            <div class="container">
                <div class="textbook_two-start">
                    <div class="textbooks_boxs-start">
                        @foreach($dissertations as $dissertation)
                            <div class="textbooks_boxs">
                                <div class="project_objectives-start">
                                    <div class="project_objectives-box">
                                        <div class="project_objectives-box-start">
                                            <div class="textbook_left">
    {{--                                            <div class="textbook_img">--}}
    {{--                                                <img src="" alt="img">--}}
    {{--                                            </div>--}}
                                                <div class="prject_objectives-text">
                                                    <h3>{{ $dissertation->topic }}</h3>
                                                    <p>{{ $dissertation->author }}</p>
                                                </div>
                                            </div>
                                            <div class="textbook_right">

                                                <div class="textbook_file">
                                                    <button>
                                                        <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $dissertation->file_url)) ? asset('storage/' . $dissertation->file_url) : $dissertation->file_url }}">Dissertatsiya sahifasi</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                            <div class="textbook_btns">
                                @foreach($locales as $locale)
                                    @if(count($locale->dissertation)>0)
                                        <button value="{{ $locale->id }}">{{ $locale->name }}</button>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        @endsection
        {{--<div class="project-o">--}}
{{--    <div class="container">--}}
{{--        <div class="project_objectives-start">--}}
{{--            @forelse($dissertations as $dissertation)--}}
{{--                <div class="project_objectives-box">--}}
{{--                    <div class="project_objectives-box-start">--}}
{{--                        <div class="prject_objectives-text">--}}
{{--                            <h3>{{ $dissertation->topic }}</h3>--}}
{{--                            <p> {{ $dissertation->author }} </p>--}}
{{--                        </div>--}}
{{--                        <div class="project_objectives-pdf">--}}
{{--                            <a target="_blank" href="{{ $dissertation->file_url }}">Maqola</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @empty--}}
{{--                <h1 class="pb-5">Dissertatsiya topilmadi</h1>--}}
{{--            @endforelse--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
