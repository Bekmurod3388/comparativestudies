@extends('admin.master')
@section('content')
  <!-- Basic with Icons -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Kitob qo'shish <br>Tadqiqotchi: {{ $researcher->fullname }}</h5>
          <small class="text-muted float-end">Malumotlarni to'ldirishingiz mumkin.</small>
      </div>
      <div class="card-body demo-vertical-spacing demo-only-element">
        <form method="POST" action="{{ route('researcher.books.store', $researcher->id) }}" enctype="multipart/form-data">
          @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kitob nomi</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-book"></i
                    ></span>
                        <input
                            name="name"
                            type="text"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="Kitob nomi"
                            aria-label="Kitob nomi"
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
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Davlat</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-globe"></i
                    ></span>
                        <input
                            name="country"
                            type="text"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="Davlat"
                            aria-label="Davlat"
                            aria-describedby="basic-icon-default-fullname2"
                            value="{{old('country')}}"
                        />
                    </div>
                    @error('country')
                    <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kitob yozilgan sana</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-hourglass"></i
                    ></span>
                        <input
                            name="pub_date"
                            type="date"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="2021-06-18T12:30:00"
                            aria-label="2021-06-18T12:30:00"
                            aria-describedby="basic-icon-default-fullname2"
                        />
                    </div>
                    @error('pub_date')
                    <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Sahifalar soni</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-book-add"></i
                    ></span>
                        <input
                            name="pages"
                            type="number"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="Sahifalar soni"
                            aria-label="Sahifalar soni"
                            aria-describedby="basic-icon-default-fullname2"
                            value="{{old('pages')}}"
                        />
                    </div>
                    @error('pages')
                    <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nashriyot</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-printer"></i
                    ></span>
                        <input
                            name="publisher"
                            type="text"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="Jop etuvchi tashkilot"
                            aria-label="Jop etuvchi tashkilot"
                            aria-describedby="basic-icon-default-fullname2"
                            value="{{old('publisher')}}"
                        />
                    </div>
                    @error('publisher')
                    <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-end mb-5">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Qo'shish</button>
                </div>
            </div>
        </form>
      </div>
    </div>
@endsection
