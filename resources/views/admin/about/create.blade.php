@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">OAV yaratish</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="title">Sarlavha</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group mb-3">
                    <label for="url" id="url_text">URL</label>
                    <input type="url" class="form-control" id="url" name="url" required>
                </div>

                <div class="form-group mb-3">
                    <label for="type">Turi</label>
                    <select class="form-control" id="type" name="type" required onchange="selectType(this)">
                        <option value="youtube">YouTube</option>
                        <option value="sayt">Web-sayt</option>
                        <option value="gazeta">Gazeta</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
@section("js")
    <script>
        function selectType(type){
            var url = $("#url");
            if (type.value == "gazeta"){
                url.attr({
                    type: "file",
                    accept: ".pdf"
                });
                $("#url_text").text("File");
            }
            if (type.value == "sayt" || type.value == "youtube"){
                url.attr({
                    type: "url",
                });
                $("#url_text").text("URL");
            }
        }
    </script>
@endsection
