@extends('user.layouts.master')
@section('content')
    <div class="articles">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Loyiha bo'yicha KItoblar</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">Asosiy sahifa </a></li>
                <li class="breadcrumb-item"><a href="#">Loyiha haqida</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Loyiha bo'yicha kitoblar</li>
            </ol>
        </div>
    </div>
    <div class="index_page-books">
        <div class="container">
            <div class="page_books-start">
                <div class="page_books">
                    @foreach($books as $book)
                        <div class="page_book">
                            <a href="https://www.npmjs.com/">
                                <div class="page_book-img">
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.ZYOit7EPQpTA0Ypg9tPSwwHaHa%26pid%3DApi&f=1&ipt=325d134e74fa2e574203664b19adb1b4fa94b2b44383135ee942196d8f6a010c&ipo=images" alt="img_book">
                                </div>
                                <div class="page_book-about">
                                    <span>{{ $book->name }}</span>
                                    <p>{{ $book->researcher->fullname }}</p>
                                    <p>{{ $book->country }}</p>
                                    <p>{{ $book->publisher }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
