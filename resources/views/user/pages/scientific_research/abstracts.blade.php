@extends('user.layouts.master')
@section('content')
    <div class="container mt-5">
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
                            <form action="/dissertations">
                                <div class="row g-4 form">
                                    <div class="col-lg-4 col-md-4">
                                        <select name="search_country" class="form-select border-primary p-2"
                                                aria-label="Default select example">
                                            <option value="" selected>Tilni tanlang</option>
                                            @foreach($locales as $locale)
                                                @if(count($locale->abstract)>0)
                                                    <option value="{{ $locale->id }}">{{ $locale->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <select name="search_language" class="form-select border-primary p-2"
                                                aria-label="Default select example">
                                            <option selected>Ilmiy daraja</option>
                                            @foreach($academicDegrees as $academicDegree)
                                                <option value="{{ $academicDegree }}">{{ $academicDegree }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <select name="search_author" class="form-select border-primary p-2"
                                                aria-label="Default select example">
                                            <option selected>Himoya yili</option>
                                            @foreach($protectionYears as $protectionYear)
                                                <option value="{{ $protectionYear }}">{{ $protectionYear }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input type="text">
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
                <div class="project_objectives-start">
                    @forelse($abstracts as $abstract)
                        <div class="project_objectives-box">
                            <div class="project_objectives-box-start">
                                <div class="prject_objectives-text">
                                    <h3>{{ $abstract->applicant_name }} <span>{{ $abstract->academic_degree }}</span></h3>
                                    <p> {{ $abstract->dissertation_topic }} </p>
                                    <p>( {{ $abstract->protection_year }} - yil ) {{ $abstract->specialty_code_and_name }} </p>
                                </div>
                                <div class="project_objectives-pdf">
                                    <a target="_blank" href="{{ $abstract->file_url }}" frameborder="0">Maqola</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="pb-5">Dissertatsiya topilmadi</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
