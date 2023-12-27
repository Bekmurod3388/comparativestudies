@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header">OAV ni yangilash</div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('abouts.update', $about->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group mb-3">
                    <label for="title">Sarlavha</label>
                    <input type="text" class="form-control" id="title" name="title" required value="{{ $about->title }}">
                </div>

                <div class="form-group mb-3">
                    <label for="url" id="url_text">URL</label>
                    <input type="url" class="form-control" id="url" name="url" required value="{{ $about->url }}">
                </div>
                <div class="form-group mb-3">
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
                </div>
                <div class="form-group mb-3" id="imageInput" style="display: none;">
                    <label for="image">Rasm tanlang</label>
                    <input type="file" class="form-control" id="img" name="img" accept="image/*">
                </div>

                <div class="form-group mb-3">
                    <label for="type">Turi</label>
                    <select class="form-control" id="type" name="type" required onchange="selectType(this.value)">
                        <option value="youtube">YouTube</option>
                        <option value="sayt">Web-sayt</option>
                        <option value="gazeta">Gazeta</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById("type").value = '{{ $about->type }}';
    </script>
@endsection
@section("js")
    <script>
        function selectType(type){
            var url = $("#url");
            var imageInput = $("#imageInput");
            console.log(type)
            if (type == "gazeta"){
                url.attr({
                    type: "file",
                    accept: ".pdf"
                });
                $("#url_text").text("File");
                imageInput.show();
            } else if (type == "sayt" || type == "youtube"){
                url.attr({
                    type: "url",
                });
                $("#url_text").text("URL");
                if (type == "sayt"){
                    imageInput.show();
                }else {
                    imageInput.hide();
                }
            } else {
                imageInput.hide();
            }
        }
        selectType('{{ $about->type }}');
    </script>
@endsection
