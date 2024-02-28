@php use Carbon\Carbon; @endphp
@extends('admin.master')
@section('content')
    <!-- Striped Rows -->
    <div class="card">
        @unless(count($dissertations) == 0)
            <div class="card-header">
                <div class="row content-end">
                    <div class="col-4">
                        <h5>Dissertatsiyalar ro'yxati</h5>
                    </div>
                    <div class="col-md-4 text-end offset-md-4">
                        <a href="{{ route('dissertations.create') }}" class="btn-primary p-2 rounded">
                            Dissertatsiya qo'shish
                        </a>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>T/R</th>
                        <th>Yozuvchi(lar)</th>
                        <th>Tili</th>
                        <th>Davlat</th>
                        <th>Sana</th>
                        <th>
                            <div class="d-flex justify-content-center">
                                Fayl
                            </div>
                        </th>
                        <th>
                            <div class="d-flex justify-content-center">
                                Amallar
                            </div>
                        </th>
                    </tr>
                    </thead>
                    @foreach ($dissertations as $dissertation)
                        <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger"></i>{{ $loop->iteration }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger"></i>
                                <strong>{{ $dissertation->author }}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger"></i>
                                <strong>{{ $dissertation->locale->name }}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger"></i>
                                <strong>{{ $dissertation->country }}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger"></i>
                                <strong>{{ Carbon::parse($dissertation->thesis_date)->format('d.m.y') }}</strong>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ $dissertation->file_url }}" class="btn btn-">Ochish</a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-warning me-2" href="{{ route('dissertations.edit', $dissertation->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i></a>
                                    <form action="{{ route('dissertations.destroy', $dissertation->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Dissertatsiyani o\'chirishni xohlaysizmi?')">
                                            <i class="bx bx-trash me-1"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                @else
                    <div class="card-header">
                        <div class="row content-end">
                            <div class="col-4">
                                <h5>Dissertatsiyalar mavjud emas</h5>
                            </div>
                            <div class="col-md-4 text-end offset-md-4">
                                <a href="{{ route('dissertations.create') }}" class="btn-primary p-2 rounded">
                                    Dissertatsiya qo'shish
                                </a>
                            </div>
                        </div>
                    </div>
                @endunless
            </div>
    </div>
    <!--/ Striped Rows -->
@endsection
