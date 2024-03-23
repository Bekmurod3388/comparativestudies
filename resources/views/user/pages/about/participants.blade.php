@extends('user.layouts.master')
@section('content')
    <div class="container">
        <div class="textbooks">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Loyiha Ishtirokchilari</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="#">Asosiy sahifa </a></li>
                    <li class="breadcrumb-item"><a href="#">Loyiha haqidar</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Loyiha Ishtirokchilari</li>
                </ol>
            </div>
        </div>
        @include('user.layouts.colleagues')

    </div>
@endsection
