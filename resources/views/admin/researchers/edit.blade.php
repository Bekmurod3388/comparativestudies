@extends('admin.master')
@section('content')
    <!-- Basic with Icons -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Ishtirokchi ma`lumotlarini o`zgartirish</h5>
                <small class="text-muted float-end">Malumotlarni o`zgartirishingiz mumkin.</small>
            </div>
            <div class="card-body demo-vertical-spacing demo-only-element">
                <form method="POST" action="{{ route('researcher.update', $researcher->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">F.I.SH</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-user"></i
                    ></span>
                                <input
                                    name="fullname"
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="F.I.SH"
                                    aria-label="F.I.SH"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{$researcher->fullname}}"
                                />
                            </div>
                            @error('fullname')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Lavozimi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-badge"></i
                    ></span>
                                <input
                                    name="position"
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Ilmiy darajasi"
                                    aria-label="Ilmiy darajasi"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{$researcher->position}}"
                                />
                            </div>
                            @error('position')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tadqiqot sohalari</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-expand"></i
                    ></span>
                                <input
                                    name="research"
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Tadqiqot sohalari"
                                    aria-label="Tadqiqot sohalari"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{$researcher->research}}"
                                />
                            </div>
                            @error('research')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Maqolalar uchun havola</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-link-alt"></i
                    ></span>
                                <input
                                    name="scholar"
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Maqolalar uchun havola"
                                    aria-label="Maqolalar uchun havola"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{$researcher->scholar}}"
                                />
                            </div>
                            @error('scholar')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Elektron pochtasi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-mail-send"></i
                    ></span>
                                <input
                                    name="email"
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="johndoe@mail.com"
                                    aria-label="johndoe@mail.com"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{$researcher->email}}"
                                />
                            </div>
                            @error('email')
                            <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-photo">Ishtirokchi rasmi</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupFile01">Yuklash</label>
                                <input type="file" name=img class="form-control" id="inputGroupFile01" />
                            </div>
                            @error('img')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end mb-5">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Yangilash</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
