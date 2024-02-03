@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">Yangi til qo`shish</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('locales.store') }}" id="storeform" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Yangi til nomi</label>
                    <input type="text" class="form-control" id="title" name="name" required>
                </div>

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
