@extends('admin.master')
@section('content')
  <!-- Basic with Icons -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Kitob qo'shish</h5>
        <small class="text-muted float-end">Malumotlarni to'ldirishingiz mumkin.</small>
      </div>
      <div class="card-body demo-vertical-spacing demo-only-element">
        <form method="POST" action="/dashboard/facultybooks/store" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kitob nomi</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="bx bx-book"></i
                ></span>
                <input
                  name="book_name"
                  type="text"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="O'tgan kunlar"
                  aria-label="O'tgan kunlar"
                  aria-describedby="basic-icon-default-fullname2"
                  value="{{old('book_name')}}"
                />
              </div>
              @error('book_name')
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
                            name="authors"
                            type="text"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="O'tkir Hoshimov"
                            aria-label="O'tkir Hoshimov"
                            aria-describedby="basic-icon-default-fullname2"
                            value="{{old('authors')}}"
                        />
                    </div>
                    @error('authors')
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
                            name="publication_date"
                            type="date"
                            value="{{old('authors')}}"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="2021-06-18T12:30:00"
                            aria-label="2021-06-18T12:30:00"
                            aria-describedby="basic-icon-default-fullname2"
                        />
                    </div>
                    @error('authors')
                    <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                    @enderror
                </div>
            </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Sarlavha</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="bx bx-book-alt"></i
                ></span>
                <input
                  name="title"
                  type="text"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="Kitob haqida"
                  aria-label="Kitob haqida"
                  aria-describedby="basic-icon-default-fullname2"
                  value="{{old('title')}}"
                />
              </div>
              @error('title')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Kitob haqida</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"
                  ><i class="bx bx-book-reader"></i
                ></span>
                <textarea
                  name="description"
                  id="basic-icon-default-message"
                  class="form-control"
                  placeholder="Kitob haqida matn"
                  aria-label="Kitob haqida matn"
                  aria-describedby="basic-icon-default-message2"
                >{{old('description')}}</textarea>
              </div>
              @error('description')
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
                                    type="text"
                                    class="form-control"
                                    placeholder="URL"
                                    id="basic-url1"
                                    aria-describedby="basic-icon-default-fc"
                                    value="{{old('file_url')}}"
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
            <label class="col-sm-2 col-form-label" for="basic-icon-default-photo">Kitob rasmi</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <label class="input-group-text" for="inputGroupFile01">Yuklash</label>
                    <input type="file" name=image_url class="form-control" id="inputGroupFile01" />
                </div>
                @error('image_url')
                  <div class="alert alert-danger" role="alert">{{ $message }}</div>
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
  </div>
@endsection
