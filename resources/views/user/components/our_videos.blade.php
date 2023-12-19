<div class="row">
    @foreach($videos as $our_video)
        <div class="slick__slide slide slide--1">
            <iframe
                width="100%"
                height="300"
                src="{{ $our_video->video_url }}"
                >
            </iframe>
        </div>
    @endforeach
</div>
<div class="row">
    <div class="col-5">
        <div class="view-footer">
            <div class="more-link">
                <a href="courses.html">Barcha
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
