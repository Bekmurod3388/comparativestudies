@extends('admin.master')
@section('content')
    <!-- Striped Rows -->
    <div class="card">
        @unless(count($carousels) == 0)
            <div class="card-header">
                <div class="row content-end">
                    <div class="col-4">
                        <h5>Karusellar ro'yxati</h5>
                    </div>
                    <div class="col-md-4 text-end offset-md-4">
                        <a href="/dashboard/carousels/create" class="btn-primary p-2 rounded">
                            Karusel qo'shish
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>T/R</th>
                        <th>Sarlavha</th>
                        <th>Rasm</th>
                        <!-- <th>O'zgartirish</th> -->
                        </tr>
                    </thead>
                    @foreach ($carousels as $carousel)
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger"></i>{{ $loop->iteration }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $carousel->title }}</strong></td>
                                <td>
                                    <div class="avatar">
                                        <img src="{{$carousel->img_url ? asset('storage/' . $carousel->img_url) : asset('assets/img/avatars/1.png') }}" alt="Rasm" class="w-px-40 h-auto rounded-circle"/>
                                        <!-- <img src="{{ asset('assets/img/avatars/1.png') }}" alt -->
                                             <!-- class="w-px-40 h-auto rounded-circle"/> -->
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="carousels/{{$carousel->id}}/edit" class="btn-primary p-1 m-1"
                                        ><i class="bx bx-edit-alt"></i></a
                                        >
                                        <form method="POST" action="carousels/{{$carousel->id}}">
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
                            <h5>Karusel bo'sh</h5>
                        </div>
                        <div class="col-md-4 text-end offset-md-4">
                            <a href="/dashboard/carousels/create">
                                Karusel qo'shish
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
