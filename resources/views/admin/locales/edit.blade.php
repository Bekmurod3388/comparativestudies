@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">Til ni yangilash</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('locales.update', $locale->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group mb-3">
                    <label for="title">Nomi</label>
                    <input type="text" class="form-control" id="title" name="name" required value="{{ $locale->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
