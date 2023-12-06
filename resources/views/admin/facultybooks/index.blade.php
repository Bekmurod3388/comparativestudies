@extends('admin.master')
@section('content')
    <!-- Striped Rows -->
    <div class="card">
        @unless(count($facultyBooks) == 0)
            <div class="card-header">
                <div class="row content-end">
                    <div class="col-4">
                        <h5>Kitoblar ro'yxati</h5>
                    </div>
                    <div class="col-md-4 text-end offset-md-4">
                        <a href="/dashboard/facultybooks/create" class="btn-primary p-2 rounded">
                            Kitob qo'shish
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>T/R</th>
                            <th>Kitob nomi</th>
                            <th>Yozuvchi(lar)</th>
                            <th>Sana</th>
                            <th>Rasm</th>
                            <!-- <th>O'zgartirish</th> -->
                        </tr>
                    </thead>
                    @foreach ($facultyBooks as $facultybook)
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger"></i>{{ $loop->iteration }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $facultybook->book_name }}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $facultybook->authors }}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ \Carbon\Carbon::parse($facultybook->publication_date)->format('d.m.y') }}</strong></td>
                                <td>
                                    <div class="avatar">
                                        <img src="{{$facultybook->img_url ? asset('storage/' . $facultybook->img_url) : asset('assets/img/avatars/1.png') }}" alt="Rasm" class="w-px-40 h-auto rounded-circle"/>
                                        <!-- <img src="{{ asset('assets/img/avatars/1.png') }}" alt -->
                                             <!-- class="w-px-40 h-auto rounded-circle"/> -->
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="facultybooks/{{$facultybook->id}}/edit" class="btn-primary p-1 m-1"
                                        ><i class="bx bx-edit-alt"></i></a
                                        >
                                        <form method="POST" action="facultybooks/{{$facultybook->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-primary p-1 m-1">
                                                <i class="bx bx-trash"></i>
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
                            <h5>Kitoblar mavjud emas</h5>
                        </div>
                        <div class="col-md-4 text-end offset-md-4">
                            <a href="/dashboard/facultybooks/create">
                                Kitob qo'shish
                            </a>
                        </div>
                    </div>
                </div>
            @endunless
        </div>
      </div>
    </div>
<!--/ Striped Rows -->
@endsection
