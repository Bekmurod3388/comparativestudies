@extends('user.layouts.master')
@section('content')
    <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 book_center">
                <div class="col-10">
                    <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                        <div class="text-center">
                            <small
                                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Avtoreferatlar</small>
                            <h1 class="display-5 mb-5">Avtoreferat qidirish uchun ma`lumotlarni to`ldiring</h1>
                        </div>
                        <form method="get">
                            <div class="row g-4 form">
{{--                                <div class="col-lg-6 col-md-6">--}}
{{--                                    <select name="search_academicDegree" class="form-select border-primary p-2"--}}
{{--                                            aria-label="Default select example">--}}
{{--                                        <option value="None" selected>Ilmiy daraja</option>--}}
{{--                                        @foreach($academicDegrees as $academicDegree)--}}
{{--                                            <option value="{{ $academicDegree }}" @if($search_academicDegree == $academicDegree) selected @endif>{{ $academicDegree }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <div class="col-lg-6 col-md-6">
                                    <select name="search_locale" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Tilni tanlash</option>
                                        @foreach($locales as $locale)
                                            @if(count($locale->abstract)>0)
                                                <option value="{{ $locale->id }}" @if($search_locale == $locale->id) selected @endif>{{ $locale->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <select name="search_protectionYear" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Yilni tanlash</option>
                                        @foreach($protectionYears as $protectionYear)
                                            <option value="{{ $protectionYear }}" @if($search_protectionYear == $protectionYear) selected @endif>{{ $protectionYear }}</option>
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
                    @forelse($abstracts as $index => $abstract)
                        <div class="textbooks_boxs">
                            <div class="project_objectives-start">
                                <div class="project_objectives-box">
                                    <div class="project_objectives-box-start">
                                        <div class="textbook_left">
                                            {{--                                            <div class="textbook_img">--}}
                                            {{--                                                <img src="" alt="img">--}}
                                            {{--                                            </div>--}}
                                            <div class="prject_objectives-text">
                                                <h3>{{ $index + 1 }}. {{ $abstract->applicant_name }} <span>{{ $abstract->academic_degree }}</span></h3>
                                                <p> {{ $abstract->dissertation_topic }} </p>
                                                <p>( {{ $abstract->protection_year }} - yil ) {{ $abstract->specialty_code_and_name }} </p>
                                            </div>
                                        </div>
                                        <div class="textbook_right">
                                            <div class="textbook_file">
                                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $abstract->file_url)) ? asset('storage/' . $abstract->file_url) : $abstract->file_url }}">
                                                    <button>
                                                        Avtoreferat sahifasi
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="pb-5">Avtoreferat topilmadi</h1>
                    @endforelse
                </div>
{{--                <div class="textbook_btns">--}}
{{--                    @foreach($locales as $locale)--}}
{{--                        @if(count($locale->abstract)>0)--}}
{{--                            <button value="{{ $locale->id }}">{{ $locale->name }}</button>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection

