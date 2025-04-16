@extends('user.layouts.master')
@section('content')
    <div class="textbooks">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4"><span class="notranslate">Darsliklar</span></h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">ASOSIY SAHIFA</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Darsliklar</li>
            </ol>
        </div>
    </div>
    <div class="textbook_two">
        <div class="container">
            <div class="textbook_two-start">
                <div class="textbooks_boxs-start">
                    @forelse($textBooks as $index => $textbook)
                        <div class="textbooks_boxs">
                            <div class="project_objectives-start">
                                <div class="project_objectives-box">
                                    <div class="project_objectives-box-start">
                                        <div class="textbook_left">
                                            <div class="prject_objectives-text">
                                                <h3>{{ $index + 1 }}. {{ $textbook->book_name }}</h3>
                                                <p>{{ $textbook->authors }}</p>
                                            </div>
                                        </div>
                                        <div class="textbook_right">
                                            <div class="textbook_file">
                                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $textbook->file)) ? asset('storage/' . $textbook->file) : $textbook->file }}">
                                                    <button class="notranslate">
                                                        Yuklash
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="pb-5">O`quv qo`llanmalar topilmadi</h1>
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

