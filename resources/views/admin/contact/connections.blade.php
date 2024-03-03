@extends('admin.master')
@section('content')
    @if($connections->isEmpty())
        <tr>
            <td colspan="5">Ma'lumotlar mavjud emas.</td>
        </tr>
    @else
        @if($connections->where('status', 0)->isNotEmpty())
            <div class="card">
            <div class="card-header">
                <div class="row content-end">
                    <div class="col-4">
                        <h5>Bog'lanish uchun yuborilgan xabarlar (O`qilmagan)</h5>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>F.I.O</th>
                        <th>Telefon</th>
                        <th>Xabar matni</th>
                        <th style="width: 15%">Amallar</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($connections as $connection)
                            @if($connection->status != 1)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $connection->fullname }}</td>
                                    <td>{{ $connection->phone }}</td>
                                    <td>{{ $connection->message }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            {{--                                    <a class="btn btn-warning" href="{{ route('connections.edit', $connection->id) }}"><i--}}
                                            {{--                                            class="bx bx-edit-alt me-1"></i></a>--}}

                                            <form action="{{ route('connection.update', $connection->id) }}" method="POST"
                                                  class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bx bx-check me-1"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('connection.destroy', $connection->id) }}" method="POST"
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Ushbu bog`lanish xabarini o\'chirishni xohlaysizmi?')">
                                                    <i class="bx bx-trash me-1"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
        @if($connections->where('status', 1)->isNotEmpty())
            <div class="card mt-4">
            <div class="card-header">
                <div class="row content-end">
                    <div class="col-4">
                        <h5>Bog'lanish uchun yuborilgan xabarlar (O`qilgan)</h5>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>F.I.O</th>
                        <th>Telefon</th>
                        <th>Xabar matni</th>
                        <th style="width: 15%">Amallar</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @if($connections->isEmpty())
                        <tr>
                            <td colspan="5">Ma'lumotlar mavjud emas.</td>
                        </tr>
                    @else
                        @foreach($connections as $connection)
                            @if($connection->status == 1)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $connection->fullname }}</td>
                                    <td>{{ $connection->phone }}</td>
                                    <td>{{ $connection->message }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            {{--                                    <a class="btn btn-warning" href="{{ route('connections.edit', $connection->id) }}"><i--}}
                                            {{--                                            class="bx bx-edit-alt me-1"></i></a>--}}

                                            <form action="{{ route('connection.destroy', $connection->id) }}" method="POST"
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Ushbu bog`lanish xabarini o\'chirishni xohlaysizmi?')">
                                                    <i class="bx bx-trash me-1"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    @endif
@endsection
