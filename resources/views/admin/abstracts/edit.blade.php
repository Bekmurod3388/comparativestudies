@extends('admin.master')
@section('content')
    <!-- Basic with Icons -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Avtoreferat qo'shish</h5>
                <small class="text-muted float-end">Malumotlarni to'ldirishingiz mumkin.</small>
            </div>
            <div class="card-body demo-vertical-spacing demo-only-element">
                <form method="POST" action="{{ route('abstracts.update', $abstract->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Izlanuvchining ismi-sharifi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-book"></i
                        ></span>
                                <input
                                    name="applicant_name"
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Izlanuvchining ismi-sharifi"
                                    aria-label="Izlanuvchining ismi-sharifi"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{$abstract->applicant_name}}"
                                />
                            </div>
                            @error('applicant_name')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Dissertatsiya mavzusi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-text"></i
                        ></span>
                                <input
                                    name="dissertation_topic"
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Dissertatsiya mavzusi"
                                    aria-label="Dissertatsiya mavzusi"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{$abstract->dissertation_topic}}"
                                />
                            </div>
                            @error('dissertation_topic')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="exampleDataList">Ilmiy daraja</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="exampleDataList" class="input-group-text"><i class="bx bxs-upside-down"></i></span>
                                <input
                                    name="academic_degree"
                                    class="form-control"
                                    list="datalistOptions"
                                    id="exampleDataList"
                                    placeholder="Ilmiy daraja..."
                                    value="{{ $abstract->academic_degree}}"
                                />
                                <datalist id="datalistOptions">
                                    @foreach($academic_degrees as $degree)
                                        <option value="{{ $degree }}">
                                    @endforeach
                                </datalist>
                            </div>
                            @error('academic_degree')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Himoya yili</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-hourglass"></i
                    ></span>
                                <input
                                    name="protection_year"
                                    type="number"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Himoya yili"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{ $abstract->protection_year}}"
                                />
                            </div>
                            @error('protection_year')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-photo">Tilni tanlang</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupSelect01">Tilni tanlang</label>
                                <select class="form-select" id="inputGroupSelect01" name="locale_id">
                                    <option selected>Tanlash....</option>
                                    @forelse($locales as $locale)
                                        <option value="{{ $locale->id }}" @if($locale->id == $abstract->locale_id) selected @endif>{{ $locale->name }}</option>
                                    @empty
                                        <option>Tillar mavjud emas</option>
                                    @endforelse
                                </select>
                            </div>
                            @error('locale_id')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Ixtisoslik shifri va nomi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-globe"></i
                    ></span>
                                <input
                                    name="specialty_code_and_name"
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Ixtisoslik shifri va nomi"
                                    aria-label="Ixtisoslik shifri va nomi"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{$abstract->specialty_code_and_name}}"
                                />
                            </div>
                            @error('specialty_code_and_name')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 mt-4 col-form-label" for="basic-icon-default-photo">Avtoreferatning elektron shakli</label>
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
                                        @error('file_pdf')
                                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="tab-pane fade" id="horizontal-url">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bx bx-link"></i></span>
                                            <span class="input-group-text" id="basic-icon-default-fc">Avtoreferating havolasi</span>
                                            <input
                                                name="file_url"
                                                type="url"
                                                class="form-control"
                                                placeholder="URL"
                                                aria-describedby="basic-icon-default-fc"
                                                value="{{$abstract->file_url}}"
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
                    <div class="row justify-content-end mb-5">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">O'zgartirish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
