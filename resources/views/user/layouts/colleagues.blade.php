<div id="articles">
    @foreach($researchers as $researcher)
        <div id="artics">
            <div class="artics_about">
                <div class="artics_about-name">
                    <div class="artics_about-name-back">
                        <a href="#">
                            <span>{{ $researcher->fullname }} <br> ({{ $researcher->position }})</span>
                        </a>
                    </div>
                    <a href="#">     <p class="artics_p">{{ $researcher->email }}</p></a>
                </div>
                <div class="artics_about-img">
                    <img src="{{$researcher->img_url ? asset('storage/' . $researcher->img_url) : 'https://www.sciencespo.fr/centre-etudes-europeennes/sites/sciencespo.fr.centre-etudes-europeennes/files/Balme_Richard_00183.png?1689772246' }}" alt="img">
                </div>
            </div>
            <div class="artics_text">
                <span>Tadqiqot sohalari:</span>
                <p>{{ $researcher->research_fields }}</p>
            </div>
        </div>
    @endforeach
</div>
