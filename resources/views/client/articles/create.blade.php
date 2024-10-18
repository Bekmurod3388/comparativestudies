@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">Maqola joylash</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('clientarticles.store') }}" id="storeform" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Maqola nomi</label>
                    <input type="text" class="form-control" id="title" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="type">Maqola tili</label>
                    <select class="form-control" id="type" name="locale_id" required onchange="selectType(this)">
                        @forelse($locales as $locale)
                            <option value="{{ $locale->id }}">{{ $locale->name }}</option>
                        @empty
                            <option>Boshqa</option>
                        @endforelse
                    </select>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-photo">Maqola fayli</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupFile01">Yuklash</label>
                            <input type="file" name="file_url" class="form-control" id="inputGroupFile01" />
                        </div>
                        @error('file_url')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Jo`natish</button>
            </form>
        </div>
    </div>
@endsection
