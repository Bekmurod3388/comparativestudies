@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row content-end">
                <div class="col-4">
                    <h5>OAV biz haqimizda</h5>
                </div>
                <div class="col-md-4 text-end offset-md-4">
                    <a href="{{ route('abouts.create') }}" class="btn btn-primary">Yaratish</a>
                </div>
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Sarlavha</th>
                    <th>Url</th>
                    <th>Foto</th>
                    <th>Turi</th>
                    <th style="width: 15%">Amallar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($abouts->isEmpty())
                    <tr>
                        <td colspan="5">Ma'lumotlar mavjud emas.</td>
                    </tr>
                @else
                    @foreach($abouts as $about)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $about->title }}</td>
                            <td>
                                @if($about->type == "gazeta")
                                    <a href="{{ asset('storage/oav_pdf/' . $about->url) }}" target="_blank">Ko'rish uchun bosing</a>
                                @else
                                <a href="{{ $about->url }}" target="_blank">Ko'rish uchun bosing</a>
                                @endif
                            </td>
                            <td>
                                @if($about->img == "no")
                                    <img
                                        src="{{ asset('assets/img/avatars/1.png') }}"
                                        class="card-img-top" alt="{{ $about->title }}"
                                        style="width: 100px; height: 100px;"
                                    >
                                @else
                                    <img
                                        src="{{ asset('storage/' . $about->img) }}"
                                        class="card-img-top" alt="{{ $about->title }}"
                                        style="width: 100px; height: 100px;"
                                    >
                                @endif
                            </td>
                            <td>
                                @if($about->type == "gazeta")
                                    <span class="badge bg-label-primary me-1">Gazeta</span>
                                @elseif($about->type == "youtube")
                                    <span class="badge bg-label-danger me-1">YouTube</span>
                                @elseif($about->type == "sayt")
                                    <span class="badge bg-label-warning me-1">Web-sayt</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-warning" href="{{ route('abouts.edit', $about->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i></a>

                                    <form action="{{ route('abouts.destroy', $about->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('OAV ni o\'chirishni xohlaysizmi?')">
                                            <i class="bx bx-trash me-1"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
