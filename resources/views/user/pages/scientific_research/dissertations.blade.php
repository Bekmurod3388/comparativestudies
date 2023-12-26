@extends('user.layouts.master')
@section('content')
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
                                        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Dissertatsiyalar</small>
                                    <h1 class="display-5 mb-5">Dissertatsiya qidirish uchun ma`lumotlarni to`ldiring</h1>
                                </div>
                                <form action="/dissertations">
                                    <div class="row g-4 form">
                                        <div class="col-lg-4 col-md-4">
                                            <select name="search_country" class="form-select border-primary p-2"
                                                    aria-label="Default select example">
                                                <option value="0" selected>Davlat</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country }}">{{ $country }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <select name="search_language" class="form-select border-primary p-2"
                                                    aria-label="Default select example">
                                                <option selected>Tilni tanlash</option>
                                                @foreach($languages as $language)
                                                    <option value="{{ $language }}">{{ $language }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <select name="search_author" class="form-select border-primary p-2"
                                                    aria-label="Default select example">
                                                <option selected>Yozuvchini tanlash</option>
                                                @foreach($author as $aut)
                                                    <option value="{{ $aut }}">{{ $aut }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <input
                                                name="thesis_date_start"
                                                type="date"
                                                class="form-control border-primary p-2"
                                                id="basic-icon-default-fullname"
                                                placeholder="2021-06-18T12:30:00"
                                                aria-label="2021-06-18T12:30:00"
                                                aria-describedby="basic-icon-default-fullname2"
                                            />
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 text-center">
                                            <p>sana dan</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <input
                                                name="thesis_date_end"
                                                type="date"
                                                class="form-control border-primary p-2"
                                                id="basic-icon-default-fullname"
                                                placeholder="2021-06-18T12:30:00"
                                                aria-label="2021-06-18T12:30:00"
                                                aria-describedby="basic-icon-default-fullname2"
                                            />
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 text-center">
                                            <p>sanagacha</p>
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
                        <div class="project_objectives-box">
                            <div class="project_objectives-box-start">
                                <div class="prject_objectives-text">
                                    <h3>ИННОВАЦИОН ЛОЙИҲА ТУРКИЙ ҚЎЛЁЗМАЛАРНИ ЎРГАНАДИ</h3>
                                    <p> Registratsiya kodi: No 181 (703)</p>
                                </div>
                                <div class="project_objectives-pdf">
                                    <a target="_blank" src="" frameborder="0">Maqola</a>
                                </div>
                            </div>
                        </div>
                        <div class="project_objectives-box">
                            <div class="project_objectives-box-start">
                                <div class="prject_objectives-text">
                                    <h3>ИННОВАЦИОН ЛОЙИҲА ТУРКИЙ ҚЎЛЁЗМАЛАРНИ ЎРГАНАДИ</h3>
                                    <p> Registratsiya kodi: No 181 (703)</p>
                                </div>
                                <div class="project_objectives-pdf">
                                    <a target="_blank" src="" frameborder="0">Maqola</a>
                                </div>
                            </div>
                        </div>
                        <div class="project_objectives-box">
                            <div class="project_objectives-box-start">
                                <div class="prject_objectives-text">
                                    <h3>ИННОВАЦИОН ЛОЙИҲА ТУРКИЙ ҚЎЛЁЗМАЛАРНИ ЎРГАНАДИ</h3>
                                    <p> Registratsiya kodi: No 181 (703)</p>
                                </div>
                                <div class="project_objectives-pdf">
                                    <a target="_blank" src="" frameborder="0">Maqola</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endsection
