<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard')  }}" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img
                  src="{{asset('assets_front/img/logo.png')}}"
                  alt="Duke wordmark." loading="lazy" width="45"/>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">
                Comporative <br>studies
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @if(request()->routeIs('dashboard')) active @endif">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Asosiy sahifa</div>
            </a>
        </li>
        @if(auth()->user()->hasRole('admin'))
            <!-- Centers -->
            <li class="menu-item @if(request()->routeIs('centers.index')) active @endif">
                <a href="{{ route('centers.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-bank"></i>
                    <div data-i18n="Analytics">Markazlar</div>
                </a>
            </li>
            <!-- Locales -->
            <li class="menu-item @if(request()->routeIs('locales.index')) active @endif">
                <a href="{{ route('locales.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-world"></i>
                    <div data-i18n="Analytics">Tillar</div>
                </a>
            </li>
            <!-- About -->
            <li class="menu-item
                @if(request()->routeIs('abouts.index')) active @endif
                @if(request()->routeIs('facultybooks.index')) active @endif
                @if(request()->routeIs('researcher.index')) active @endif">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxl-product-hunt"></i>
                    <div data-i18n="Layouts">Loyiha haqida</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item @if(request()->routeIs('researcher.index')) active @endif">
                        <a href="{{ route('researcher.index') }}" class="menu-link">
                            <div data-i18n="Without menu">Tadqiqotchilar</div>
                        </a>
                    </li>
                    <li class="menu-item @if(request()->routeIs('facultybooks.index')) active @endif">
                        <a href="{{ route('facultybooks.index') }}" class="menu-link">
                            <div data-i18n="Analytics">Kitoblar</div>
                        </a>
                    </li>
                    <li class="menu-item @if(request()->routeIs('abouts.index')) active @endif">
                        <a href="{{ route('abouts.index') }}" class="menu-link">
                            <div data-i18n="Analytics">OAV biz haqimizda</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Scientific -->
            <li class="menu-item
                @if(request()->routeIs('dissertations.index')) active @endif
                @if(request()->routeIs('articles.index')) active @endif">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-book-content"></i>
                    <div data-i18n="Layouts">Ilmiy tadqiqotlar</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item @if(request()->routeIs('dissertations.index')) active @endif">
                        <a href="{{ route('dissertations.index') }}" class="menu-link">
                            <div data-i18n="Without menu">Dissertatsiyalar</div>
                        </a>
                    </li>
                    <li class="menu-item @if(request()->routeIs('articles.index')) active @endif">
                        <a href="{{ route('articles.index') }}" class="menu-link">
                            <div data-i18n="Analytics">Maqolalar</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Magazines -->
            <li class="menu-item
                @if(request()->routeIs('journals.index')) active @endif">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-bookmarks"></i>
                    <div data-i18n="Layouts">Ilmiy jurnallar</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item @if(request()->routeIs('journals.index')) active @endif">
                        <a href="{{ route('journals.index') }}" class="menu-link">
                            <div data-i18n="Analytics">Jurnallar</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Literature -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-book"></i>
                    <div data-i18n="Layouts">O`quv adabiyotlar</div>
                </a>

                <ul class="menu-sub">
                </ul>
            </li>

            <!-- Services -->
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-server"></i>
                    <div data-i18n="Layouts">Xizmatlar</div>
                </a>

                <ul class="menu-sub">
                </ul>
            </li>

            <!-- Gallery -->
            <li class="menu-item
                @if(request()->routeIs('photos.index')) active @endif
                @if(request()->routeIs('videos.index')) active @endif">

                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-photo-album"></i>
                    <div data-i18n="Layouts">Galereya</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item @if(request()->routeIs('photos.index')) active @endif">
                        <a href="{{ route('photos.index') }}" class="menu-link">
                            <div data-i18n="Analytics">Rasmlar</div>
                        </a>
                    </li>
                    <li class="menu-item @if(request()->routeIs('videos.index')) active @endif">
                        <a href="{{ route('videos.index') }}" class="menu-link">
                            <div data-i18n="Analytics">Videolar</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Contact -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-contact"></i>
                    <div data-i18n="Layouts">Aloqa</div>
                </a>

                <ul class="menu-sub">
                </ul>
            </li>


{{--        <li class="menu-item @if(request()->routeIs('colleagues.index')) active @endif">--}}
{{--            <a href="{{ route('colleagues.index') }}" class="menu-link">--}}
{{--                <i class='menu-icon tf-icons bx bx-briefcase-alt'></i>--}}
{{--                <div data-i18n="Analytics">Hamkasblar</div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="menu-item @if(request()->routeIs('carousels.index')) active @endif">--}}
{{--            <a href="{{ route('carousels.index') }}" class="menu-link">--}}
{{--                <i class="menu-icon tf-icons bx bx-carousel"></i>--}}
{{--                <div data-i18n="Analytics">Karusellar</div>--}}
{{--            </a>--}}
{{--        </li>--}}


        @endif
        @if(auth()->user()->hasRole('client'))

            <li class="menu-item @if(request()->routeIs('facultybooks.index')) active @endif">
                <a href="{{ route('facultybooks.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-book"></i>
                    <div data-i18n="Analytics">Maqolalar</div>
                </a>
            </li>
        @endif
    </ul>
</aside>
