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

            <form action="{{ route('researcherarticles.store') }}" id="storeform" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Yangi maqola nomi</label>
                    <input type="text" class="form-control" id="title" name="article_topic" value="{{ old("article_topic") }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Yozuvchilar</label>
                    <input type="text" class="form-control" id="title" name="authors" value="{{old("authors")}}" required>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="exampleDataList">Maqola turi</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="exampleDataList" class="input-group-text"><i class="bx bxs-upside-down"></i></span>
                            <input
                                name="article_type"
                                class="form-control"
                                list="datalistOptions"
                                id="exampleDataList"
                                placeholder="Maqola turi..."
                                value="{{ old('article_type') }}"
                            />
                            <datalist id="datalistOptions">
                                @foreach($article_types as $degree)
                                    <option value="{{ $degree }}">
                                @endforeach
                            </datalist>
                        </div>
                        @error('article_types')
                        <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Himoya sanasi</label>
                    <input type="text" class="form-control" id="title" name="protection_year" value="{{ old("protection_year") }}" required>
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
                                            value="{{ old("file_url"). old("file_pdf") }}"
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
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-photo">Maqola sarlavhasi uchun rasm</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupFile01">Yuklash</label>
                            <input type="file" name="photo_url" value="{{old("photo_url")}}" class="form-control" id="inputGroupFile01" />
                        </div>
                        @error('photo_url')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection