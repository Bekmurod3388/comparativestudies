@extends('user.layouts.master')
@section('content')
    <div class="top-paragraphs">
        <section class="no-gutters region region-top-paragraphs">
            <div class="views-element-container block block-views block-views-blockparagraphs-block-2" id="block-views-block-paragraphs-block-2">
                <div class="content">
                    <div class="view view-paragraphs view-id-paragraphs view-display-id-block_2 js-view-dom-id-f8f48d28b8fb2eecc5fd3f9fb07d4a3c92b8838820c05ec4667cfe970b4a6a01">
                        <div class="views-row">
                            <div class="views-field views-field-field-paragraphs-top">
                                <div class="field-content">
                                    <div id="main-wrapper" class="layout-main-wrapper back clearfix">
                                        <div id="earth" class="container-fluid py-6 my-6 mt-0 earth">
                                            <div class="container">
                                                <div class="align-items-center">
                                                    <div class="home_book-one " data-toggle="modal" data-target="#LeftModalCenter">
                                                        <img class="popup-trigger"
                                                             data-popup="left-popup"
                                                             src="{{asset('/assets_front/img/bookleft.png')}}"
                                                             alt="img">
                                                        <p class="name_book2 notranslate">G`arb <br> komparativistika <br> markazlari </p>
                                                    </div>
                                                    <div id="box"></div>
                                                    <div class="home_book-two " data-toggle="modal" data-target="#RightModalCenter">
                                                        <img class="popup-trigger"
                                                             data-popup="right-popup"
                                                             src="{{asset('/assets_front/img/bookright.png')}}"
                                                             alt="img">
                                                        <p class="name_book">Sharq <br> komporavistika <br> markazlari </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @include('user.layouts.centers_popup')
                                    </div>
                                    <div class="paragraph paragraph--type--front-page-quick-links paragraph--view-mode--default paragraph--id--79">
                                        <div class="paragraph__column">
                                            <p class="paragraph_us">BIZ HAQIMIZDA</p>
                                            <div class="quicklinks-wrapper">
                                                <div class="reveal field field--name-field-quick-link-1 field--type-link field--label-hidden field__item">
                                                    <a href="{{ route('user_about_goals') }}">Loyihaning
                                                        maqsad va vazifalari</a>
                                                </div>
                                                <div class="reveal field field--name-field-quick-link-2 field--type-link field--label-hidden field__item">
                                                    <a href="{{ route('user_about_articles') }}">Loyiha
                                                        bo'yicha maqolalar</a>
                                                </div>
                                                <div class="reveal field field--name-field-quick-link-3 field--type-link field--label-hidden field__item">
                                                    <a href="{{ route('user_about_oav') }}" class="notranslate">Oav biz haqimizda</a>
                                                </div>
                                                <div class="reveal field field--name-field-quick-link-4 field--type-link field--label-hidden field__item">
                                                    <a
                                                            href="{{ route('user_magazines') }}">Bizning
                                                        Jurnallar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="bottom-paragraphs">
        <section class="no-gutters region region-bottom-paragraphs">
            <div class="views-element-container block block-views block-views-blockparagraphs-block-1" id="block-tts-sub-views-block-paragraphs-block-1">
                <div class="content">
                    <div class="view view-paragraphs view-id-paragraphs view-display-id-block_1 js-view-dom-id-e9291022e3b60c3ac51e58a769b8c794f8bfd221fa02bf09b15b984bf4a7b8d4">
                        <div class="views-row">
                            <div class="views-field views-field-field-paragraphs-bottom">
                                <div class="paragraph paragraph--type--bp-columns paragraph--view-mode--default paragraph--id--67 paragraph--width--wide duke-navy-blue">
                                    <div class="paragraph__column">
                                        <div class="paragraph--type--bp-columns__1col">
                                            <div class="paragraph paragraph--type--bp-column-wrapper paragraph--view-mode--default paragraph--id--66">
                                                <div class="paragraph__column">
                                                    <div class="container no-gutters row bs-1col paragraph paragraph--type-bp-simple paragraph--view-mode-default">
                                                        <div class=" reveal col-sm-12 bs-region bs-region--main">
                                                            <div class="clearfix text-formatted field field--name-bp-text field--type-text-long field--label-hidden field__item">
                                                                <h2>Belgilangan maqsadlar
                                                                    quyidagi vazifalarni
                                                                    bajarishni taqozo etadi:<br><br>
                                                                </h2>
                                                                <p>1. “Komparativistika” (Comparative) elektron platformasi uchun ilmiy va badiiy manbalarni yig‘ish. Jumladan, . R. J. Clemens, Pierre Brunel, Claude Pichois, André – Michel Rousseau, N.A.Veselovskiy, N.I.Konrad, V.M.Jirmunskiy, Yu.Lotman,A.Kokorin, I.G.Neupokoeva, V.Ya.Propp, A.Dima, D.Dyurishin,.M.Baxtin, M.G. Bogatkina. V.R.Amineva, G. Xallieva, U.Jurakulov, A.Qosimov kabi olimlarning rus, ingliz, fransuz, nemis, o‘zbek tillaridagi qiyosiy adabiyotshunoslikka doir ilmiy asarlarini DJVU formatda platformaga yuklash.
                                                                    <br>
                                                                    2. G.Xallieva, U.Jurakulov birgalikda “Qiyosiy adabiyotshunoslik” darsligini yaratish va platformaga joylash.  <br>
                                                                    3. Aynan qiyosiy adabiyotshunoslikka doir O‘zbekistonda va horijda himoya qilingan dissertasiyalarni jamlash va DJVU formatda platformaga yuklash.  <br>
                                                                    <span class="notranslate">4.band</span><br>
                                                                    <span class="notranslate">5.band</span></p>
                                                                <p>
                                                                    <a class="btn-primary"
                                                                       href="{{ route('user_about_goals') }}">Batafsil
                                                                        </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="index_page-books">--}}
{{--                                    <div class="container">--}}
{{--                                        <div class="page_books-start">--}}
{{--                                            <h2>Bizning Kitoblar</h2>--}}
{{--                                            <div class="page_books">--}}
{{--                                                @foreach($books as $book)--}}
{{--                                                    <div class="page_book booksreveal revealx">--}}
{{--                                                        <a href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $book->file_url)) ? asset('storage/' . $book->file_url) : $book->file_url }}">--}}
{{--                                                            <div class="page_book-img">--}}
{{--                                                                <img src="{{asset('storage/'.$book->photo_url)}}" alt="img_book">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="page_book-about">--}}
{{--                                                                <span>{{ $book->name }}</span>--}}
{{--                                                                <p>{{ \Carbon\Carbon::parse($book->published_date)->format('Y') }}</p>--}}
{{--                                                                <p>{{ $book->authors }}</p>--}}
{{--                                                                <p>{{ $book->publisher }}</p>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
