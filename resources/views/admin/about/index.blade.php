@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="">OAV biz haqimizda</h5>
            <a href="{{ route('abouts.create') }}" class="btn btn-primary">Yaratish</a>
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
                    <th>Amallar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($abouts->isEmpty())
                    <tr><td colspan="5">Ma'lumotlar mavjud emas.</td></tr>
                @else
                    @foreach($abouts as $video)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $video->title }}</td>
                            <td>
                                <a href="{{ $video->url }}" target="_blank">Ko'rish uchun bosing</a>
                            </td>
                            <td>
                                @if($video->type == "gazeta")
                                    <span class="badge bg-label-primary me-1">Gazeta</span>
                                @elseif($video->type == "youtube")
                                    <span class="badge bg-label-danger me-1">YouTube</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('abouts.edit', $video->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>

                                        <form action="{{ route('abouts.destroy', $video->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item" onclick="return confirm('OAV ni o\'chirishni xohlaysizmi?')">
                                                <i class="bx bx-trash me-1"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
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
