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
                                                    <div class="home_book-one reveal" data-toggle="modal" data-target="#LeftModalCenter">
                                                        <img class="popup-trigger"
                                                             data-popup="left-popup"
                                                             src="{{asset('/assets_front/img/bookleft.png')}}"
                                                             alt="img">
                                                        <p class="name_book2">G`arb <br> komporavistika <br> markazlari </p>
                                                    </div>
                                                    <div id="box" class="reveal"></div>
                                                    <div class="home_book-two reveal" data-toggle="modal" data-target="#RightModalCenter">
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
                                                    <a href="{{ route('user_about_oav') }}">Oav biz haqimizda</a>
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
            <div class="views-element-container block block-views block-views-blockparagraphs-block-1"
                 id="block-tts-sub-views-block-paragraphs-block-1">
                <div class="content">
                    <div>
                        <div class="view view-paragraphs view-id-paragraphs view-display-id-block_1 js-view-dom-id-e9291022e3b60c3ac51e58a769b8c794f8bfd221fa02bf09b15b984bf4a7b8d4">
                            <div class="">
                                <div class="views-row">
                                    <div class="views-field views-field-field-paragraphs-bottom">
                                        <div class="field-content">
                                            <div class="" style="background-color: #00539b; color: white;">
                                                <div class="row container">
                                                    <div class="revealmx col-sm">
                                                        <div class="container no-gutters row bs-1col paragraph paragraph--type-bp-simple paragraph--view-mode-default">
                                                                            <div class="col-sm-12 bs-region bs-region--main">
                                                                                <div class="clearfix text-formatted field field--name-bp-text field--type-text-long field--label-hidden field__item">
                                                                                    <h2>Loyihaning
                                                                                        maqsadi
                                                                                        quyidagilardan
                                                                                        iborat:</h2>
{{--                                                                                    <p>O‘zbek va jahon adabiyot¬shunosligida qiyosiy adabiyotshunosik bo‘yicha amalga oshirilgan tadqiqotlar, fanni o‘zlashtirishga oid barcha materiallarni o‘zida jamlagan “Komparativistika” (Comparative) elektron platformasini yaratish. </p>--}}
                                                                                    <p>
                                                                                        Mahalliy va
                                                                                        xorijiy
                                                                                        mutaxassislarni
                                                                                        jalb
                                                                                        etgan holda,
                                                                                        chet
                                                                                        ellarda
                                                                                        saqlanayotgan,
                                                                                        mamlakatimiz
                                                                                        tarixi
                                                                                        va madaniyatiga
                                                                                        oid
                                                                                        turkiy
                                                                                        qoʼlyozmalarni
                                                                                        aniqlash,
                                                                                        ularning
                                                                                        toʼliq
                                                                                        maʼlumotlar
                                                                                        bazasi — raqamli
                                                                                        qomusini
                                                                                        yaratish,
                                                                                        uni muntazam
                                                                                        yangilab borish,
                                                                                        chet el
                                                                                        fondlaridagi
                                                                                        turkiy
                                                                                        qoʼlyozmalarning
                                                                                        faksimile
                                                                                        nusxalarini,
                                                                                        foto va
                                                                                        videotasvirlarini
                                                                                        yurtimizga olib
                                                                                        kelish, tegishli
                                                                                        ilmiy markazlar,
                                                                                        xususan, Аbu
                                                                                        Rayhon
                                                                                        Beruniy nomidagi
                                                                                        Sharqshunoslik
                                                                                        instituti bilan
                                                                                        birgalikda ilmiy
                                                                                        tadqiqotlar olib
                                                                                        borib,
                                                                                        erishilgan
                                                                                        natijalarni
                                                                                        ilmiy
                                                                                        muomalaga
                                                                                        kiritish
                                                                                        borasidagi
                                                                                        ishlarni
                                                                                        muvofiqlashtirish; 
                                                                                    </p>
                                                                                    <p><a class="btn btn-danger" style="border-color: #ffd960 !important; background-color: #ffd960 !important; color: #262626 !important;"
                                                                                          href="{{ route('user_about_goals') }}">Batafsil
                                                                                        </a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                    </div>
                                                    <div class="revealx col-sm">
                                                        <div>
                                                            <div class="paragraph paragraph--type--bp-column-wrapper paragraph--view-mode--default paragraph--id--76 duke-navy-blue padding-20px add-margin-both">
                                                                <div class="paragraph__column">
                                                                    <div>
                                                                        <div class="paragraph paragraph--type--bp-view paragraph--view-mode--default paragraph--id--75">
                                                                            <div class="paragraph__column">
                                                                                <div class="field field--name-field-view field--type-viewsreference field--label-hidden field__item">
                                                                                    <div class="views-element-container">
                                                                                        <div class="viewsreference--view-title">
                                                                                            Bizning
                                                                                            Videolar
                                                                                        </div>
                                                                                        <div class="container">
                                                                                            @include('user.layouts.our_videos')
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
                                                </div>
                                            </div>
                                            <div class="congrames_pupil">
                                                <h2>Loyiha ishtirokchilari</h2>
                                                @include('user.layouts.colleagues')
                                            </div>
                                            <div
                                                    class="paragraph paragraph--type--bp-columns paragraph--view-mode--default paragraph--id--67 paragraph--width--wide duke-navy-blue">
                                                <div class="paragraph__column">
                                                    <div class="paragraph--type--bp-columns__1col">
                                                        <div>


                                                            <div
                                                                    class="paragraph paragraph--type--bp-column-wrapper paragraph--view-mode--default paragraph--id--66">
                                                                <div class="paragraph__column">

                                                                    <div>
                                                                        <div
                                                                                class="container no-gutters row bs-1col paragraph paragraph--type-bp-simple paragraph--view-mode-default">

                                                                            <div
                                                                                    class=" reveal col-sm-12 bs-region bs-region--main">

                                                                                <div
                                                                                        class="clearfix text-formatted field field--name-bp-text field--type-text-long field--label-hidden field__item">
                                                                                    <h2>Belgilangan maqsadlar
                                                                                        quyidagi vazifalarni
                                                                                        bajarishni taqozo etadi:<br><br>
                                                                                    </h2>

                                                                                    <p>a) adabiyotshunoslik,
                                                                                        tilshunoslik sohalarida
                                                                                        manbashunoslik va
                                                                                        matnshunoslikning oʼrni
                                                                                        va tadqiq obʼektlaridagi
                                                                                        tutash nuqtalarni
                                                                                        aniqlash; matn tarixi va
                                                                                        matn tanqidi
                                                                                        tushunchasi;
                                                                                        ilmiy-tanqidiy matn
                                                                                        tuzishning
                                                                                        tasnifiy-qiyosiy
                                                                                        mezonlari kabilar haqida
                                                                                        nazariy bilim
                                                                                        berish;<br><br>
                                                                                        b) mamlakatimiz
                                                                                        qoʼlyozma kitoblar
                                                                                        fondlaridagi adabiy
                                                                                        manbalar toʼla
                                                                                        katalogining shartli
                                                                                        roʼyxatini
                                                                                        shakllantirish;<br><br>

                                                                                        d) shakllantirilgan
                                                                                        katalog asosida Yevropa
                                                                                        qadimiy kitoblar
                                                                                        fondlaridagi adabiy
                                                                                        manbalarni qiyosiy
                                                                                        oʼrganish;<br><br>

                                                                                        e) Yevropa fondlaridagi
                                                                                        adabiy manbalarni
                                                                                        tizimli asosda
                                                                                        xronologik, tematik
                                                                                        tasnif qilish, qoʼlyozma
                                                                                        nusxalarining tashqi va
                                                                                        ichki xususiyatlaridan
                                                                                        kelib chiqib, ularning
                                                                                        toʼliq tavsifini
                                                                                        tayyorlash;<br><br>

                                                                                        f) loyiha doirasida
                                                                                        amalga oshirilgan
                                                                                        tadqiqotning tezislar
                                                                                        toʼplamini oʼzbek, rus,
                                                                                        ingliz tillarida,
                                                                                        shuningdek, ularga ilova
                                                                                        boʼlgan koʼrgazmali
                                                                                        audio va
                                                                                        videomateriallarni
                                                                                        taqdim etish;<br><br>

                                                                                        g) “Yevroturcologica.uz”
                                                                                        elektron platformasining
                                                                                        turkiy qoʼlyozma adabiy
                                                                                        manbalar toʼla katalogi
                                                                                        va qomusiy lugʼatini oʼz
                                                                                        ichiga olgan mulьtimedia
                                                                                        dasturiy mahsulotlarini
                                                                                        yaratish.</p>

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
                                                </div>
                                            </div>


                                            <div class="index_page-books">
                                                <div class="container">
                                                    <div class="page_books-start">
                                                        <h2>Bizning Kitoblar</h2>
                                                        <div class="page_books">
                                                            @foreach($books as $book)
                                                                <div class="page_book booksreveal revealx">
                                                                    <a href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $book->file_url)) ? asset('storage/' . $book->file_url) : $book->file_url }}">
                                                                    <div class="page_book-img">
                                                                        <img src="{{asset('storage/'.$book->photo_url)}}" alt="img_book">
                                                                    </div>
                                                                    <div class="page_book-about">
                                                                        <span>{{ $book->name }}</span>
                                                                        <p>{{ \Carbon\Carbon::parse($book->published_date)->format('Y') }}</p>
                                                                        <p>{{ $book->authors }}</p>
                                                                        <p>{{ $book->publisher }}</p>
                                                                    </div>
                                                                    </a>
                                                                </div>
                                                            @endforeach
{{--                                                            <div class="books_slide">--}}
{{--                                                                <div class="slider_left slide">--}}
{{--                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10" height="10" viewBox="0 0 256 256" xml:space="preserve">--}}

{{--<defs>--}}
{{--</defs>--}}
{{--                                                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >--}}
{{--                                                                            <path d="M 65.75 90 c 0.896 0 1.792 -0.342 2.475 -1.025 c 1.367 -1.366 1.367 -3.583 0 -4.949 L 29.2 45 L 68.225 5.975 c 1.367 -1.367 1.367 -3.583 0 -4.95 c -1.367 -1.366 -3.583 -1.366 -4.95 0 l -41.5 41.5 c -1.367 1.366 -1.367 3.583 0 4.949 l 41.5 41.5 C 63.958 89.658 64.854 90 65.75 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />--}}
{{--                                                                        </g>--}}
{{--</svg>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="slider_count ">--}}
{{--                                                                    1--}}
{{--                                                                </div>--}}
{{--                                                                <div class="slider_right slide">--}}
{{--                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10" height="10" viewBox="0 0 256 256" xml:space="preserve">--}}

{{--<defs>--}}
{{--</defs>--}}
{{--                                                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >--}}
{{--                                                                            <path d="M 24.25 90 c -0.896 0 -1.792 -0.342 -2.475 -1.025 c -1.367 -1.366 -1.367 -3.583 0 -4.949 L 60.8 45 L 21.775 5.975 c -1.367 -1.367 -1.367 -3.583 0 -4.95 c 1.367 -1.366 3.583 -1.366 4.95 0 l 41.5 41.5 c 1.367 1.366 1.367 3.583 0 4.949 l -41.5 41.5 C 26.042 89.658 25.146 90 24.25 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />--}}
{{--                                                                        </g>--}}
{{--</svg>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
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

                </div>
            </div>

        </section>

    </div>
@endsection
