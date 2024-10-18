@extends('admin.master')
@section('content')
  <!-- Basic with Icons -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Dissertatsiya qo'shish</h5>
        <small class="text-muted float-end">Malumotlarni to'ldirishingiz mumkin.</small>
      </div>
      <div class="card-body demo-vertical-spacing demo-only-element">
        <form method="POST" action="{{ route('dissertations.store') }}" enctype="multipart/form-data">
          @csrf
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Dissertatsiya mavzusi</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="bx bx-book"></i
                ></span>
                <input
                  name="topic"
                  type="text"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="Dissertatsiya mavzusi"
                  aria-label="Dissertatsiya mavzusi"
                  aria-describedby="basic-icon-default-fullname2"
                  value="{{old('topic')}}"
                />
              </div>
              @error('topic')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
              @enderror
            </div>
          </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Yozuvchi(lar)</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                ><i class="bx bx-user"></i
                    ></span>
                        <input
                            name="author"
                            type="text"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="Yozuvchilar"
                            aria-label="Yozuvchilar"
                            aria-describedby="basic-icon-default-fullname2"
                            value="{{old('author')}}"
                        />
                    </div>
                    @error('author')
                    <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                    @enderror
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
                            name="thesis_date"
                            type="date"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="2021-06-18T12:30:00"
                            aria-label="2021-06-18T12:30:00"
                            aria-describedby="basic-icon-default-fullname2"
                        />
                    </div>
                    @error('thesis_date')
`                    <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
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
                                <option value="{{ $locale->id }}" @if($locale->id == old("locale_id")) selected @endif>{{ $locale->name }}</option>
                            @empty
                                <option>Tillar mavjud emas</option>
                            @endforelse
                        </select>
                    </div>
                    @error('country')
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
              <label class="col-sm-2 mt-4 col-form-label" for="basic-icon-default-photo">Kitobning elektron shakli</label>
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
                                <span class="input-group-text" id="basic-icon-default-fc">Kitobning havolasi</span>
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
            <div class="row justify-content-end mb-5">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Qo'shish</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
