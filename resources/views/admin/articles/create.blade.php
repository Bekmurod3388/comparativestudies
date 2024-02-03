@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">Yangi maqola qo`shish</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('articles.store') }}" id="storeform" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Yangi maqola nomi</label>
                    <input type="text" class="form-control" id="title" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Chop etilgan jurnal nomi</label>
                    <input type="text" class="form-control" id="title" name="journal_name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Yozuvchilar</label>
                    <input type="text" class="form-control" id="title" name="authors" required>
                </div>
                <div class="form-group mb-3">
                    <label for="type">Maqola tili</label>
                    <select class="form-control" id="type" name="locale_id" required onchange="selectType(this)">
                        @forelse($locales as $locale)
                            <option value="{{ $locale->id }}">{{ $locale->name }}</option>
                        @empty
                            <option>Boshqa</option>
                        @endforelse
                    </select>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 mt-4 col-form-label" for="basic-icon-default-photo">Maqolaning elektron shakli</label>
                    <div class="col-sm-10">
                        <div class="demo-inline-spacing mt-3">
                            <div class="list-group list-group-horizontal-md text-md-center">
                                <a
                                    class="list-group-item list-group-item-action active"
                                    id="home-list-item"
                                    data-bs-toggle="list"
                                    href="#horizontal-pdf"
                                >PDF file</a
                                >
                                <a
                                    class="list-group-item list-group-item-action"
                                    id="profile-list-item"
                                    data-bs-toggle="list"
                                    href="#horizontal-url"
                                >URL havola</a
                                >
                            </div>
                            <div class="tab-content px-0 mt-0">
                                <div class="tab-pane fade show active" id="horizontal-pdf">
                                    <div class="input-group">
                                        <label class="input-group-text" for="inputGroupFile01">Pdf faylni yuklash</label>
                                        <input type="file" name=file_pdf class="form-control" id="inputGroupFile01" />
                                    </div>
                                    @error('file_url')
                                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="tab-pane fade" id="horizontal-url">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bx bx-link"></i></span>
                                        <span class="input-group-text" id="basic-icon-default-fc">Maqolaning havolasi</span>
                                        <input
                                            name="file_url"
                                            type="url"
                                            class="form-control"
                                            placeholder="URL"
                                            aria-describedby="basic-icon-default-fc"
                                            value="{{old('file_url')}}"
                                            id="inputGroupFile01"
                                        />
                                    </div>
                                    @error('file_url')
                                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Dissertatsiya yozilgan sana</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-hourglass"></i
                    ></span>
                            <input
                                name="published_date"
                                type="date"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="2021-06-18T12:30:00"
                                aria-label="2021-06-18T12:30:00"
                                aria-describedby="basic-icon-default-fullname2"
                            />
                        </div>
                        @error('published_date')
                        `                    <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                        @enderror
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
