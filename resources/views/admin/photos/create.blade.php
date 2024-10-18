@extends("admin.master")
@section("content")
    <div class="card">
        <div class="card-header">Rasm qo'shish</div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Sarlavha</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group mb-3">
                    <label for="image">Rasm tanlang</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*"
                           required>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
