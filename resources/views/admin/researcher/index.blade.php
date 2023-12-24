@extends('admin.master')
@section('content')
    <!-- Striped Rows -->
    <div class="card">
        @unless(count($researchers) == 0)
            <div class="card-header">
                <div class="row content-end">
                    <div class="col-4">
                        <h5>Karusellar ro'yxati</h5>
                    </div>
                    <div class="col-md-4 text-end offset-md-4">
                        <a href="{{ route('colleagues.create') }}" class="btn-primary p-2 rounded">
                            Karusel qo'shish
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
                        <th>Sarlavha</th>
                        <th>Rasm</th>
                        <th>Amallar</th>
                        </tr>
                    </thead>
                    @foreach ($researchers as $researcher)
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger"></i>{{ $loop->iteration }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $researcher->title }}</strong></td>
                                <td>
                                    <div class="avatar">
                                        <img src="{{$researcher->img_url ? asset('storage/' . $researcher->img_url) : asset('assets/img/avatars/1.png') }}" alt="Rasm" class="w-px-40 h-auto rounded-circle"/>
                                        <!-- <img src="{{ asset('assets/img/avatars/1.png') }}" alt -->
                                             <!-- class="w-px-40 h-auto rounded-circle"/> -->
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-warning" href="{{ route('colleagues.edit', $researcher->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i></a>

                                        <form action="{{ route('colleagues.destroy', $researcher->id) }}" method="POST"
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Karuselni o\'chirishni xohlaysizmi?')">
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
                            <h5>Karusel bo'sh</h5>
                        </div>
                        <div class="col-md-4 text-end offset-md-4">
                            <a href="/dashboard/researchers/create">
                                Karusel qo'shish
                            </a>
                        </div>
                    </div>
                </div>
            @endunless
        </div>
      </div>
<!--/ Striped Rows -->
@endsection
