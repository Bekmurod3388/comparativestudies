@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row content-end">
                <div class="col-4">
                    <h5>Dunyo qiyosiy adabiyotshunoslik markazlari</h5>
                </div>
                <div class="col-md-4 text-end offset-md-4">
                    <a href="{{ route('centers.create') }}" class="btn btn-primary">Markaz qo'shish</a>
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
                    <th>Mamlakat</th>
                    <th>Sarlavha</th>
                    <th>Havola</th>
                    <th style="width: 15%">Amallar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($centers->isEmpty())
                    <tr>
                        <td colspan="5">Ma'lumotlar mavjud emas.</td>
                    </tr>
                @else
                    @foreach($centers as $center)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ isset($countries['en'][$center->country]) ? $countries['en'][$center->country] : $center->country }}</td>
                            <td>{{ $center->name }}</td>
                            <td>
                                <a href="{{ "storage/".$center->url }}" target="_blank">Havola</a>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-warning" href="{{ route('centers.edit', $center->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i></a>

                                    <form action="{{ route('centers.destroy', $center->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Dunyo qiyosiy adabiyotshunoslik markazini o\'chirishni xohlaysizmi?')">
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
