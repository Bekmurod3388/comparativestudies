<div class="row">
    @foreach($videos as $our_video)
        <div class="slick__slide  slide--1">
{{--            <iframe--}}
{{--                width="100%"--}}
{{--                height="300"--}}
{{--                src="{{ $our_video->video_url }}"--}}
{{--                >--}}
{{--            </iframe>--}}
            <video width="100%" height="300" autoplay muted controls>
                <source src="{{ asset('storage/XORIJ__TASSUROTLARI___2QISM__19_11_2023_LOGO.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    @endforeach
</div>
<div class="row">
    <div class="col-5">
        <div class="view-footer">
            <div class="more-link">
                <a href="{{ route('user_gallery_videos') }}">Barcha
                    Videolar
                </a>
            </div>
        </div>
    </div>
    <div class="col-7 more-link">
        <nav aria-label="Page navigation example">
            {{ $videos->links() }}
        </nav>
    </div>
</div>
