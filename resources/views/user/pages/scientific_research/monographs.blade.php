    @extends('user.layouts.master')
@section('content')
    <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 book_center">
                <div class="col-10">
                    <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                        <div class="text-center">
                            <small
                                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Monografiyalar</small>
                            <h1 class="display-5 mb-5">Monografiya qidirish uchun ma`lumotlarni to`ldiring</h1>
                        </div>
                        <form method="get">
                            <div class="row g-4 form">
                                <div class="col-lg-4 col-md-4">
                                    <select name="search_publisher" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Chop qiluvchi</option>
                                        @foreach($publishers as $publisher)
                                            <option value="{{ $publisher }}" @if($search_publisher == $publisher) selected @endif>{{ $publisher }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <select name="search_language" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Tilni tanlash</option>
                                        @foreach($locales as $locale)
                                            @if(count($locale->monograph)>0)
                                                <option value="{{ $locale->id }}" @if($search_language == $locale->id) selected @endif>{{ $locale->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <select name="search_author" class="form-select border-primary p-2"
                                            aria-label="Default select example">
                                        <option value="None" selected>Yozuvchi</option>
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
                    @forelse($monographs as $monograph)
                        <div class="textbooks_boxs">
                            <div class="project_objectives-start">
                                <div class="project_objectives-box">
                                    <div class="project_objectives-box-start">
                                        <div class="textbook_left">
                                            <div class="textbook_img">
                                                <img src="{{asset('storage/'.$monograph->photo_url)}}" alt="img">
                                            </div>
                                            <div class="prject_objectives-text">
                                                <h3>{{ $monograph->name }} <span>{{ $monograph->published_date }}</span></h3>
                                                <p> {{ $monograph->authors }} </p>
                                                <p>( {{ $monograph->authors }}) {{ $monograph->publisher }} </p>
                                            </div>
                                        </div>
                                        <div class="textbook_right">
                                            <div class="textbook_file">
                                                <button>
                                                    <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $monograph->file_url)) ? asset('storage/' . $monograph->file_url) : $monograph->file_url }}">Monograf sahifasi</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="pb-5">Monografiya topilmadi</h1>
                    @endforelse
                </div>
                <div class="textbook_btns">
                    @foreach($locales as $locale)
                        @if(count($locale->monograph)>0)
                            <button value="{{ $locale->id }}">{{ $locale->name }}</button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link rel="stylesheet" href="WordIFRAME.css">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<header>--}}
{{--    <a href="#">LOGO</a>--}}
{{--</header>--}}
{{--<section>--}}
{{--    <aside>--}}
{{--        <label for="aside">Cts</label>--}}
{{--        <button onclick="FrameOne()">1</button>--}}
{{--        <button onclick="FrameTwo()">2</button>--}}
{{--        <button onclick="FrameThree()">3</button>--}}
{{--    </aside>--}}
{{--    <div id="iframes">--}}
{{--        <div id="flr1"><a href="">hello</a></div>--}}
{{--        <div id="flr2"><a href="">hello</a></div>--}}
{{--        <div id="flr3"><a href="">hello</a></div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<script>--}}
{{--    function FrameOne(){--}}
{{--        document.getElementById("flr1").style.display = "block";--}}
{{--        document.getElementById("flr2").style.display = "none";--}}
{{--        document.getElementById("flr3").style.display = "none";--}}
{{--    }--}}

{{--    function FrameTwo(){--}}
{{--        document.getElementById("flr2").style.display = "block";--}}
{{--        document.getElementById("flr1").style.display = "none";--}}
{{--        document.getElementById("flr3").style.display = "none";--}}
{{--    }--}}

{{--    function FrameThree(){--}}
{{--        document.getElementById("flr3").style.display = "block";--}}
{{--        document.getElementById("flr2").style.display = "none";--}}
{{--        document.getElementById("flr1").style.display = "none";--}}
{{--    }--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
