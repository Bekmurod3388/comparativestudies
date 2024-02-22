@extends('admin.master')
@section('content')
    <!-- Striped Rows -->
    <div class="card">
        @unless(count($researchers) == 0)
            <div class="card-header">
                <div class="row content-end">
                    <div class="col-4">
                        <h5>Ishtirokchilar ro'yxati</h5>
                    </div>
                    <div class="col-md-4 text-end offset-md-4">
                        <a href="{{ route('researcherbooks.create') }}" class="btn-primary p-2 m-2  rounded">
                            Kitob qo'shish
                        </a>
                        <a href="{{ route('researcher.create') }}" class="btn-primary p-2 rounded">
                            Ishtirokchi qo'shish
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
                            <th>F.I.SH</th>
                            <th>Lavozim</th>
                            <th>Tadqiqot</th>
                            <th>Maqolalar</th>
                            <th>Email</th>
                            <th>Rasm</th>
                            <th>Amallar</th>
                        </tr>
                    </thead>
                    @foreach ($researchers as $researcher)
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger"></i>{{ $loop->iteration }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $researcher->fullname }}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $researcher->position }}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $researcher->research }}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $researcher->scholar_link }}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $researcher->email }}</strong></td>
                                <td>
                                    <div class="avatar">
                                        <img src="{{$researcher->img ? asset('storage/' . $researcher->img) : asset('assets/img/avatars/1.png') }}" alt="Rasm" class="w-px-40 h-auto rounded-circle"/>
{{--                                        <img src="{{ asset('storage/' . $researcher->img) }}" alt--}}
{{--                                             class="w-px-40 h-auto rounded-circle"/>--}}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-warning" href="{{ route('researcher.edit', $researcher->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i></a>

                                        <form action="{{ route('researcher.destroy', $researcher->id) }}" method="POST"
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Ishtirokchini o\'chirishni xohlaysizmi?')">
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
                            <h5>Ishtirokchilar bo'sh</h5>
                        </div>
                        <div class="col-md-4 text-end offset-md-4">
                            <a href="{{ route('researcher.create') }}" class="btn-primary p-2 rounded">
                                Ishtirokchi qo'shish
                            </a>
                        </div>
                    </div>
                </div>
            @endunless
        </div>
      </div>
<!--/ Striped Rows -->
@endsection
