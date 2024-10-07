@extends('user.layouts.master')
@section('content')
    <div class="textbooks">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4"><span class="notranslate">"KOMPARATIVISTIKA" </span> <span class="notranslate">JURNALI</span></h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">ASOSIY SAHIFA</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page"><span class="notranslate">"KOMPARATIVISTIKA"</span> JURNALI</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <form method="get" action="{{ route('user_scientific_research_conventions') }}" class="form-method">
            <div class="search-bar">
                <input type="text" name="query" id="searchInput" placeholder="Qidirish..." value="{{ request('query') }}">
                <button style="background-color: #080240" type="submit" id="searchButton">Qidirish</button>
                <a href="{{ route('user_scientific_research_conventions') }}" id="resetBtn">Tozalash</a>
            </div>
            <div class="advanced-search">
                <label for="category">Jurnal soni:</label>
                <select name="category" id="category">
                    <option value="">Barchasi</option>
                    @foreach($type1Conventions as $parent)
                        <option value="{{ $parent->id }}" {{ request('category') == $parent->id ? 'selected' : '' }}>{{ $parent->name }}</option>
                    @endforeach
                </select>
                <label for="startDate">Boshlanish sanasi:</label>
                <input type="date" name="startDate" id="startDate" value="{{ request('startDate') }}">
                <label for="endDate">Tugash sanasi:</label>
                <input type="date" name="endDate" id="endDate" value="{{ request('endDate') }}">
            </div>
        </form>
        <div class="journal_category" style="margin-bottom: 50px">
            <div class="journal-container">
                <h1 class="notranslate">USHBU SONDA</h1>
                @if($firstType1Convention)
                    <div class="journal-details">
                        <div class="journal-cover">
                            <img src="{{ asset('storage/' . $firstType1Convention->photo_url) }}" alt="Journal Cover">
                        </div>
                        <div class="journal-info">
                            <p><strong>{{ $firstType1Convention->name }}</strong></p>
                            <p>{{ $firstType1Convention->description }}</p>
                            <p><span class="icon_j">&#128197;</span>E’LON QILINGAN SANA: {{ $firstType1Convention->created_at->format('Y-m-d') }}</p>
                            <a target="_blank" >
                                <button class="journal-btn-conv">
                                    YUKLASH
                                </button>
                            </a>
                        </div>
                    </div>
                @else
                    <p>NO CURRENT ISSUE FOUND</p>
                @endif
            </div>
            <div class="sidebar_journal">
                <a href="storage/convention_files/files/Jurnal haqida. O jurnale. About the journal.pdf" target="_blank" class="notranslate">
                    JURNAL HAQIDA
                </a>
                <a href="storage/convention_files/files/Jurnal nizomi (2).pdf" target="_blank" class="notranslate">
                    JURNAL NIZOMI
                </a>
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

    </div>


    <div class="textbook_two">
        <div class="container">
            <div class="textbook_two-start">
                <div class="textbooks_boxs-start">
                    <div class="textbooks_boxs">
                        @if(request()->hasAny(['category', 'query', 'endDate', 'startDate']))
                            @forelse($searchresults as $child)
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
                                                    @if(isset($child->parent->name))<p> {{$child->parent->name}} </p>@endif
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
                            @empty
                                <h1>Ma'lumot topilmadi</h1>
                            @endforelse
                        @else
                            @foreach($type1Conventions as $parent)
                                <div class="project_objectives-start">
                                    <div class="project_objectives-box">
                                        <div class="project_objectives-box-start">
                                            <div class="textbook_left">
                                                <div class="textbook_img">
                                                    <img src="{{ asset('storage/' . $parent->photo_url) }}"
                                                         alt="{{ $parent->name }}">
                                                </div>
                                                <div class="prject_objectives-text">
                                                    <h3>{{ $parent->name }}</h3>
                                                    <p>{{ $parent->description }}</p>
                                                </div>
                                            </div>
                                            <div class="textbook_right">
                                                <div class="textbook_file">
                                                    <a target="_blank" href="{{ \Illuminate\Support\Facades\File::exists(public_path('storage/' . $parent->file_url)) ? asset('storage/' . $parent->file_url) : $parent->file_url }}">
                                                        <button>
                                                            YUKLASH
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($parent->chilDren as $child)
                                    <div class="project_objectives-start">
                                        <div class="project_objectives-box">
                                            <div class="project_objectives-box-start">
                                                <div class="textbook_left">
                                                    <div class="textbook_img">
                                                        <img src="{{ asset('storage/' . $child->photo_url) }}"
                                                             alt="{{ $child->name }}">
                                                    </div>
                                                    <div class="prject_objectives-text">
                                                        <h3 class="notranslate">{{ $child->name }}</h3>
                                                        <p class="notranslate">{{ $child->description }}</p>
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
                            @endforeach
                        @endif
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
