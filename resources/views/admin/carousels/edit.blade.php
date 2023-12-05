@extends('admin.master')
@section('content')
  <!-- Basic with Icons -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Karusel malumotini o'zgartirish</h5>
        <small class="text-muted float-end">Malumotlarni o'zgartirishingiz mumkin.</small>
      </div>
      <div class="card-body demo-vertical-spacing demo-only-element">
        <form method="POST" action="/dashboard/carousels/{{ $carousel->id }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Sarlavha matni</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="bx bx-user"></i
                ></span>
                <input
                  name="title"
                  type="text"
                  class="form-control"
                  id="basic-icon-default-fullname"
                  placeholder="9-fevral Alisher Navoiyning tug'ilgan kuni"
                  aria-label="9-fevral Alisher Navoiyning tug'ilgan kuni"
                  aria-describedby="basic-icon-default-fullname2"
                  value="{{$carousel->title}}"
                />
              </div>
              @error('title')
                <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-photo">Karusel uchun rasm</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <label class="input-group-text" for="inputGroupFile01">Yuklash</label>
                    <input type="file" name=img_url class="form-control" id="inputGroupFile01" />
                </div>
                @error('img_url')
                  <div class="alert alert-danger" role="alert">Ushbu maydon bo'sh bo'lishi mumkin emas!</div>
                @enderror
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
