{{--@extends('user.layouts.master')--}}
{{--@section('content')--}}
{{--    <div class="articles">--}}
{{--        <div class="container text-center animated bounceInDown">--}}
{{--            <h1 class="display-1 mb-4">Loyiha bo'yicha KItoblar</h1>--}}
{{--            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">--}}
{{--                <li class="breadcrumb-item"><a href="#">Asosiy sahifa </a></li>--}}
{{--                <li class="breadcrumb-item"><a href="#">Loyiha haqida</a></li>--}}
{{--                <li class="breadcrumb-item text-dark" aria-current="page">Loyiha bo'yicha kitoblar</li>--}}
{{--            </ol>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="index_page-books">--}}
{{--        <div class="container">--}}
{{--            <div class="page_books-start">--}}
{{--                <div class="page_books">--}}
{{--                    @foreach($books as $book)--}}
{{--                        <div class="page_book">--}}
{{--                            <a href="https://www.npmjs.com/">--}}
{{--                                <div class="page_book-img">--}}
{{--                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.ZYOit7EPQpTA0Ypg9tPSwwHaHa%26pid%3DApi&f=1&ipt=325d134e74fa2e574203664b19adb1b4fa94b2b44383135ee942196d8f6a010c&ipo=images" alt="img_book">--}}
{{--                                </div>--}}
{{--                                <div class="page_book-about">--}}
{{--                                    <span>{{ $book->name }}</span>--}}
{{--                                    <p>{{ $book->researcher->fullname }}</p>--}}
{{--                                    <p>{{ $book->country }}</p>--}}
{{--                                    <p>{{ $book->publisher }}</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('user.layouts.master')
@section('content')
    <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 book_center">
                <div class="col-10">
                    <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                        <div class="text-center">
                            <small
                                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Loyiha bo`yicha kitoblar</small>
                            <h1 class="display-5 mb-5">Kitob qidirish uchun ma`lumotlarni to`ldiring</h1>
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
                    @forelse($books as $book)
                        <div class="textbooks_boxs">
                            <div class="project_objectives-start">
                                <div class="project_objectives-box">
                                    <div class="project_objectives-box-start">
                                        <div class="textbook_left">
                                            <div class="textbook_img">
                                                <img src="{{asset('storage/'.$book->photo_url)}}" alt="img">
                                            </div>
                                            <div class="prject_objectives-text">
                                                <h3>{{ $book->name }} <span>{{ \Carbon\Carbon::parse($book->published_date)->format('Y') }}</span></h3>
                                                <p> {{ $book->authors }} </p>
                                                <p>( {{ $book->authors }}) {{ $book->publisher }} </p>
                                            </div>
                                        </div>
                                        <div class="textbook_right">
                                            <div class="textbook_file">
                                                <button>
                                                    <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $book->file_url)) ? asset('storage/' . $book->file_url) : $book->file_url }}">Kitob sahifasi</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="pb-5">Kitob topilmadi</h1>
                    @endforelse
                </div>
                <div class="textbook_btns">
                    @foreach($locales as $locale)
                        @if(count($locale->about_books)>0)
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
