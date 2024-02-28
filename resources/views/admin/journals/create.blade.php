@extends("admin.master")
@section("content")
    <div class="card">
        <div class="card-header">Jurnal qo'shish</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('journals.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jurnal nomi</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="bx bx-book-alt"></i
                                ></span>
                                        <input
                                            name="name"
                                            type="text"
                                            class="form-control"
                                            id="basic-icon-default-fullname"
                                            placeholder="Jurnal nomi"
                                            aria-label="Jurnal nomi"
                                            aria-describedby="basic-icon-default-fullname2"
                                            value="{{old('name')}}"
                                        />
                        </div>
                        @error('name')
                        <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Jurnal haqida</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"
                ><i class="bx bx-book-reader"></i
                    ></span>
                            <textarea
                                name="description"
                                id="basic-icon-default-message"
                                class="form-control"
                                placeholder="Jurnal haqida malumot"
                                aria-label="Jurnal haqida malumot"
                                aria-describedby="basic-icon-default-message2"
                            >{{old('description')}}</textarea>
                        </div>
                        @error('description')
                        <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jurnal havolasi</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="bx bx-link"></i
                                ></span>
                            <input
                                name="site_url"
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Jurnal havolasi"
                                aria-label="Jurnal havolasi"
                                aria-describedby="basic-icon-default-fullname2"
                                value="{{old('site_url')}}"
                            />
                        </div>
                        @error('site_url')
                        <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-photo">Jurnal rasmi</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupFile01">Yuklash</label>
                            <input type="file" name=img_url class="form-control" id="inputGroupFile01" value="{{ old('img_url') }}"/>
                        </div>
                        @error('img_url')
                        <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-photo">Hududni tanlang</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Hudud</label>
                            <select class="form-select" id="inputGroupSelect01" name="category">
                                <option selected>Tanlash....</option>
                                <option value="1">Yevropa</option>
                                <option value="2">AQSH</option>
                                <option value="3">Turkiya</option>
                                <option value="4">Rossiya</option>
                                <option value="5">Markaziy osiyo</option>
                            </select>
                        </div>
                        @error('country')
                        <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>

@endsection
