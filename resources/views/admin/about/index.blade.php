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
                    @foreach($abouts as $video)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $video->title }}</td>
                            <td>
                                @if($video->type == "gazeta")
                                    <a href="{{ asset('storage/oav_pdf/' . $video->url) }}" target="_blank">Ko'rish uchun bosing</a>
                                @else
                                <a href="{{ $video->url }}" target="_blank">Ko'rish uchun bosing</a>
                                @endif
                            </td>
                            <td>
                                @if($video->type == "gazeta")
                                    <span class="badge bg-label-primary me-1">Gazeta</span>
                                @elseif($video->type == "youtube")
                                    <span class="badge bg-label-danger me-1">YouTube</span>
                                @elseif($video->type == "sayt")
                                    <span class="badge bg-label-warning me-1">Web-sayt</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-warning" href="{{ route('abouts.edit', $video->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i></a>

                                    <form action="{{ route('abouts.destroy', $video->id) }}" method="POST"
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
