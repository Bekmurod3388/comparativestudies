@extends('user.layouts.master')
@section('content')
    <div class="textbooks">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">KOMPORATIVISTIKA JURNALI</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">ASOSIY SAHIFA</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">KOMPARAVISTIKA JURNALI</li>
            </ol>
        </div>
    </div>
    <div class="journal_category" style="margin-bottom: 50px">
        <div class="journal-container">
            <h1>ARXIV</h1>
            <div class="journal-details">
                <div class="journal-cover">
                    <img src="{{ asset('storage/' . $parent->photo_url) }}" alt="Journal Cover">
                </div>
                <div class="journal-info">
                    <p><strong>{{ $parent->name }}</strong></p>
                    <p>{{ $parent->description }}</p>
                    <p><span class="icon_j">&#128197;</span>CHOP ETILGAN SANA: {{ $parent->created_at->format('Y-m-d') }}</p>

                </div>
            </div>
        </div>
        <div class="sidebar_journal">
            @forelse($conventions->where('type', "0") as $convention)
                <a href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $convention->file_url)) ? asset('storage/' . $convention->file_url) : $convention->file_url }}" target="_blank">{{ $convention->name }}</a>
            @empty
                <p>MA'LUMOT TOPILMADI</p>
            @endforelse
            <a href="{{ Auth::check() ? route('clientarticles.create') : route('login') }}">
                KOMPARATIVISTIKA JURNALIGA MAQOLA YUBORISH
            </a>
            <a href="{{ route('archive')  }}">
                ARXIV
            </a>
        </div>
    </div>

    <div class="textbook_two">
        <div class="container">
            <div class="textbook_two-start">
                <div class="textbooks_boxs-start">
                    <div class="textbooks_boxs">
                        @foreach($parent->children as $child)
                            <div class="project_objectives-start">
                                <div class="project_objectives-box">
                                    <div class="project_objectives-box-start">
                                        <div class="textbook_left">
                                            <div class="textbook_img">
                                                <img src="{{ asset('storage/' . $child->photo_url) }}"
                                                     alt="{{ $child->name }}">
                                            </div>
                                            <div class="prject_objectives-text">
                                                <h3>{{ $child->name }}</h3>
                                                <p>{{ $child->description }}</p>
                                                <p>{{ $parent->name }}</p>
                                            </div>
                                        </div>
                                        <div class="textbook_right">
                                            <div class="textbook_file">
                                                <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $child->file_url)) ? asset('storage/' . $child->file_url) : $child->file_url }}">
                                                    <button>
                                                        YUKLASH
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="textbook_btns">
                    @foreach($locales as $locale)
                        @if(count($locale->article) > 0)
                            <button value="{{ $locale->id }}">{{ $locale->name }}</button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
