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

            <form method="POST" action="{{ route('centers.store') }}">
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

                <div class="form-group mb-3">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" name="url" required>
                </div>

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
