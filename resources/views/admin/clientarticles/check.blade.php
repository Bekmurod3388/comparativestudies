@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row content-end">
                <div class="col-4">
                    <h5>To'lov qilinishi kutilayotgan maqolalar</h5>
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
                    <th>Nomi</th>
                    <th>Tili</th>
                    <th>Holat</th>
                    <th>File</th>
                    <th style="width: 15%">Amallar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($articles->isEmpty())
                    <tr>
                        <td colspan="5">Ma'lumotlar mavjud emas.</td>
                    </tr>
                @else
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $article->name }}</td>
                            <td>{{ $article->locale->name }}</td>
                            <td>
                                @if($article->status == 0)
                                    <span class="badge bg-label-warning me-1">Jo'natildi</span>
                                @elseif($article->status == 1)
                                    <span class="badge bg-label-danger me-1">Rad etildi
                                @elseif($article->status == 2)
                                            <span class="badge bg-label-warning me-1">To`lov kutilmoqda
                                @elseif($article->status == 3)
                                                    <span class="badge bg-label-warning me-1">To`lov tekshirilmoqda
                                @elseif($article->status == 4)
                                                            <span class="badge bg-label-danger me-1">To`lov rad etildi
                                @elseif($article->status == 5)
                                                                    <span class="badge bg-label-primary me-1">Qabul qilindi
                                @endif</td>
                            <td>
                                <a href="{{ asset('storage/' . $article->file_url) }}" target="_blank">Ko'rish uchun bosing</a>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    {{--                                        <a class="btn btn-warning" href="{{ route('articles.edit', $article->id) }}"><i--}}
                                    {{--                                                class="bx bx-edit-alt me-1"></i></a>--}}

                                    <form action="{{ route('adminarticles.update', $article->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="status" value="5">
                                        <button type="submit" class="btn btn-primary" onclick="return confirm('Maqolani to`lovini qabul qilasizmi?')">
                                            <i class="bx bx-check me-1"></i>
                                        </button>
                                    </form>
                                    <form action="{{ route('adminarticles.update', $article->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="status" value="4">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Maqolani to`lovini rad qabul qilasizmi?')">
                                            <i class="bx bx-x me-1"></i>
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
