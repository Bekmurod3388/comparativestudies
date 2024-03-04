<div id="articles">
    @foreach($colleagues as $colleague)

        <div id="artics">
            <div class="artics_about">
                <div class="artics_about-name">
                    <div class="artics_about-name-back">
                        <a href="{{ $colleague->scholar }}" target="_blank">
                            <span>{{ $colleague->fullname }} <br> <p class="coll_text"> ({{ $colleague->position }})</p></span>
                        </a>
                    </div>
                    <a href="mailto:{{ $colleague->email }}">     <p class="artics_p">{{ $colleague->email }}</p></a>
                </div>
                <div class="artics_about-img">
                    <img src="{{$colleague->img ? asset('storage/' . $colleague->img) : 'https://www.sciencespo.fr/centre-etudes-europeennes/sites/sciencespo.fr.centre-etudes-europeennes/files/Balme_Richard_00183.png?1689772246' }}" alt="img">
                </div>
            </div>
            <div class="artics_text">
                <span>Tadqiqot sohalari:</span>
                <p>{{ $colleague->research }}</p>
            </div>
        </div>
    @endforeach
</div>
