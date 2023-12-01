@extends('admin.master')
@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/Collegues /</span> Add collegues</h4>
  <!-- Basic with Icons -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Hamkasb qo'shish</h5>
        <small class="text-muted float-end">Malumotlarni to'ldirishingiz mumkin.</small>
      </div>
      <div class="card-body">
        <form method="POST" action="/dashboard/researchers/store" enctype="multipart/form-data">
          @csrf
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
                  placeholder="Bek Berganov"
                  aria-label="Bek Berganov"
                  aria-describedby="basic-icon-default-fullname2"
                  value="{{old('fullname')}}"
                />
              </div>
              @error('fullname')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
              @enderror
          </div>
        </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Lavozimi</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"
                  ><i class="bx bx-buildings"></i
                ></span>
                <input
                  name="position"
                  type="text"
                  id="basic-icon-default-company"
                  class="form-control"
                  placeholder="Direktor."
                  aria-label="Direktor."
                  aria-describedby="basic-icon-default-company2"
                  value="{{old('position')}}"
                />
              </div>
              @error('position')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input
                  name="email"
                  type="text"
                  id="basic-icon-default-email"
                  class="form-control"
                  placeholder="bek.berganov"
                  aria-label="bek.berganov"
                  aria-describedby="basic-icon-default-email2"
                  value="{{old('email')}}"
                />
                <span id="basic-icon-default-email2" class="input-group-text">@namuna.com</span>
              </div>
              <div class="form-text">Harflar, raqamlar va nuqtalardan foydalanishingiz mumkin.</div>
              @error('email')
                <div class="alert alert-danger" role="alert">Ushbu maydonga email yozilishi shart!</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-insta">Instagram</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <span class="input-group-text"><i class="bx bxl-instagram"></i></span>
                    <span class="input-group-text" id="basic-icon-default-insta">https://instagram.com/username/</span>
                    <input
                        name="instagram_url"
                        type="text"
                        class="form-control"
                        placeholder="URL"
                        id="basic-url1"
                        aria-describedby="basic-icon-default-insta"
                        value="{{old('instagram_url')}}"
                    />
                </div>
                @error('instagram_url')
                  <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-insta">Facebook</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <span class="input-group-text"><i class="bx bxl-facebook"></i></span>
                    <span class="input-group-text" id="basic-icon-default-fc">https://facebook.com/username/</span>
                    <input
                        name="facebook_url"
                        type="text"
                        class="form-control"
                        placeholder="URL"
                        id="basic-url1"
                        aria-describedby="basic-icon-default-fc"
                        value="{{old('facebook_url')}}"
                    />
                </div>
                @error('facebook_url')
                  <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Tadqiqot sohasi</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"
                  ><i class="bx bx-book-reader"></i
                ></span>
                <textarea
                  name="research_fields"
                  id="basic-icon-default-message"
                  class="form-control"
                  placeholder="Sheriy kitoblarni o'rganish"
                  aria-label="Sheriy kitoblarni o'rganish"
                  aria-describedby="basic-icon-default-message2"
                ></textarea>
              </div>           
              @error('research_fields')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
              @enderror
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Qo'shish</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection