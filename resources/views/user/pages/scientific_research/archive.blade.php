@extends('user.layouts.master')
@section('content')
    <div class="archive">
        <div class="container">
            <div class="archive_start">
                <h2>KOMPORATIVISTIKA JURNALI ARXIV NASHRLARI</h2>
                <div class="year-blocks">
                    @forelse($conventions as $year => $yearConventions)
                        <div class="year-block">
                            <div class="year">{{ $year }}</div>
                            <div class="issues">
                                @forelse($yearConventions as $index => $convention)
                                    <a href="{{ asset('storage/'.$convention->file_url) }}" target="_blank">{{ $index + 1 }}</a>
                                @empty
                                    <h1>No data</h1>
                                @endforelse
                            </div>
                        </div>
                    @empty
                        <h1>No data</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
