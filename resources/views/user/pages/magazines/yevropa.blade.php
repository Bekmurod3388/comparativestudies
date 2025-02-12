@extends('user.layouts.master')
@section('content')
    <div class="textbooks">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Yevropa</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">Asosiy sahifa </a></li>
                <li class="breadcrumb-item"><a href="#">Ilmiy jurnallar</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Yevropa</li>
            </ol>
        </div>
    </div>
    <div class="textbooks_boxs">
        <div class="container">
            <div class="project_objectives-start">
                <div class="project_objectives-box">
                    @forelse($journals as $journal)
                        <div class="project_objectives-box-start">
                        <div class="textbook_left">
                            <div class="textbook_img">
                                <img src="{{ asset('storage/journals/' . $journal->img_url) }}" alt="book">
                            </div>
                            <div class="prject_objectives-text">
                                <h3>{{ $journal->name }}</h3>
                                <p>{{ $journal->description }}</p>
                            </div>
                        </div>
                        <div class="textbook_right">

                            <div class="textbook_file">
                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $journal->site_url)) ? asset('storage/' . $journal->site_url) : $journal->site_url }}">
                                    <button>
                                        Jurnal sahifasi
                                    </button>
                                </a>

                            </div>

                        </div>
                    </div>
                    @empty
                        <h1>Jurnallar mavjud emas</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
