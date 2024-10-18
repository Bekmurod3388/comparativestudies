@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row content-end">
                <div class="col-4">
                    <h5>Jurnallar</h5>
                </div>
                <div class="col-md-4 text-end offset-md-4">
                    <a href="{{ route('journals.create') }}" class="btn btn-primary">Jurnal qo'shish</a>
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
                    <th>Tavsif</th>
                    <th>Jurnal</th>
                    <th>Rasm</th>
                    <th>Davlat</th>
                    <th style="width: 15%">Amallar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($journals->isEmpty())
                    <tr>
                        <td colspan="4">Ma'lumotlar mavjud emas.</td>
                    </tr>
                @else
                    @foreach($journals as $journal)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $journal->name }}</td>
                            <td>{{ $journal->description }}</td>
                            <td><a class="btn btn-primary" href="{{ $journal->site_url }}">Sahifa</a></td>
                            <td>
                                <img
                                    src="{{ asset('storage/journals/' . $journal->img_url) }}"
                                    class="card-img-top" alt="{{ $journal->title }}"
                                    style="width: 100px; height: 100px;"
                                >
                            </td>
                            <td>
                                @if($journal->category == 1)
                                    Yevropa
                                @elseif($journal->category == 2)
                                    AQSH
                                @elseif($journal->category == 3)
                                    Turkiya
                                @elseif($journal->category == 4)
                                    Rossiya
                                @elseif($journal->category == 5)
                                    Markaziy osiyo
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-warning" href="{{ route('journals.edit', $journal->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i></a>
                                    <form action="{{ route('journals.destroy', $journal->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Jurnalni o\'chirishni xohlaysizmi?')">
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
