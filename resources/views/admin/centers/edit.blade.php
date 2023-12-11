@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">Videoni yangilash</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('centers.update', $center->id) }}">
                @csrf
                @method('PATCH')

                <div class="form-group mb-3">
                    <label for="type">Turi</label>
                    <select class="form-control form-select" id="type" name="type" required>
                        <option value="1" @if($center->type == 1) selected @endif>Sharq</option>
                        <option value="2" @if($center->type == 2) selected @endif>G'arb</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="country">Mamlakat</label>
                    <select class="form-control form-select" id="country" name="country" required>
                        @foreach($countries["en"] as $key => $item)
                            <option value="{{ $key }}"
                            @if($key == $center->country) selected @endif
                            >{{ $item }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Sarlavha</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ $center->name }}">
                </div>

                <div class="form-group mb-3">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" name="url" required value="{{ $center->url }}">
                </div>

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
