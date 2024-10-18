@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">Markaz yaratish</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('centers.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="type">Turi</label>
                    <select class="form-control form-select" id="type" name="type" required>
                        <option value="1">Sharq</option>
                        <option value="2">G'arb</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="country">Mamlakat</label>
                    <select class="form-control form-select" id="country" name="country" required>
                        @foreach($countries["en"] as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Sarlavha</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 mt-4 col-form-label" for="basic-icon-default-photo">Faylning elektron shakli</label>
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
                                        <span class="input-group-text" id="basic-icon-default-fc">Faylning havolasi</span>
                                        <input
                                            name="file_url"
                                            type="url"
                                            class="form-control"
                                            placeholder="URL"
                                            aria-describedby="basic-icon-default-fc"
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


                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
