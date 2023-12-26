<header id="header" class="header" role="banner" aria-label="Site header">
                <div id="header-top" class="header-top container clearfix">
                    <div id="search-block" class="form-inline navbar-form float-right">
                        <div id="block-headersearchform"
                             class="block block-block-content block-block-contentf9650caa-84d6-4b94-b74f-71f40a6e5d62">
                            <div class="content">
                                <div
                                    class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                    <div id="search-block">
                                        <div data-drupal-selector="search-block-form" id="block-tts-sub-search"
                                             role="search">
                                            <form action="https://literature.duke.edu/search/node" method="get"
                                                  id="search-block-form" accept-charset="UTF-8" class="form-row">
                                                <fieldset class="form-group"><label for="edit-search-api-fulltext"
                                                                                    class="sr-only">Enter your
                                                        keywords</label><input
                                                        data-drupal-selector="edit-search-api-fulltext"
                                                        type="search" id="edit-search-api-fulltext" name="keys"
                                                        value="" size="30" maxlength="128" class="form-control">
                                                </fieldset>
                                                <div data-drupal-selector="edit-actions"
                                                     class="form-actions form-group" id="edit-actions">
                                                    <button data-drupal-selector="edit-submit" type="submit"
                                                            id="edit-submit" value="Search" class="btn">Search
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="block-responsivemenumobileicon"
                         class="responsive-menu-toggle-wrapper responsive-menu-toggle block block-responsive-menu block-responsive-menu-toggle">
                        <div class="content">
                            <a id="toggle-icon" class="toggle responsive-menu-toggle-icon" title="Menu"
                               href="#off-canvas">
                                <span class="icon"></span><span class="label">Menu</span>
                            </a>
                        </div>
                    </div>
                    <nav role="navigation" aria-labelledby="block-tts-sub-secondarymenu-menu"
                         id="block-tts-sub-secondarymenu" class="block block-menu navigation menu--secondary-menu">
                        <h2 class="sr-only" id="block-tts-sub-secondarymenu-menu">Secondary Menu</h2>
                        @if (Route::has('login'))
                            <ul class="clearfix menu menu--secondary-menu nav">
                                @auth
                                    <li>
                                    <a href="{{ url('/dashboard') }}"
                                       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    </li>
                                @else
                                    <li>
                                    <a href="{{ route('login') }}"
                                       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Kirish</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                        <a href="{{ route('register') }}"
                                           class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ro'yxatdan o'tish</a>
                                        </li>
                    @endif
                    @endauth
                            </ul>
                @endif

                </nav>
        </div>
        <div class="container" id="main-header">
            <div id="block-tts-sub-branding"
                 class="clearfix block block-system block-system-branding-block">
                <div class="site-logo">
                    <a href="{{ route('welcome') }}"
                       title="Duke University - Trinity College of Arts and Sciences"><img
                            src="{{asset('assets_front/img/logo.png')}}"
                            alt="O'zbekiston jahon tillari universiteti"/></a>
                </div>
                <div class="navbar-text-name">
                    <span>O'zbekiston jahon tillari universiteti</span>
                </div>
            </div>
        </div>
        <nav id="primary-navigation" class="navbar navbar-expand-lg" data-toggle="affix"
             aria-label="main menu">
            <div class="main-navbar justify-content-center container" id="main-navbar">
                <div id="block-tts-sub-mainnavigation" class="block block-superfish block-superfishmain">
                    <div class="content">
                        <ul id="superfish-main" class="menu sf-menu sf-main sf-horizontal sf-style-none">
                            <li id="main-menu-link-contentdb57f021-ee07-40a6-8446-be8044f1ad27"
                                class="sf-depth-1 menuparent"><a href="{{ route('user_about') }}"
                                                                 class="sf-depth-1 menuparent">LOYIHA HAQIDA</a>
                                <ul>
                                    <li id="main-menu-link-content9135765b-fd1d-4f20-849b-d958bf625641"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_about_goals') }}"
                                            class="sf-depth-2">Loyihaning maqsad va vazifalari</a></li>
                                    <li id="main-menu-link-content00e95e5a-272e-4d8a-bca1-4cc889c1c50b"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_about_participants') }}" title=""
                                            class="sf-depth-2 sf-external">Loyiha ishtirokchilari</a></li>
                                    <li id="main-menu-link-contente5290d50-5ee0-4079-abdb-2"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_about_books') }}"
                                            class="sf-depth-2">Loyiha bo'yicha kitoblar</a>
                                    </li>
                                    <li id="main-menu-link-contente5290d50-5ee0-4079-abdb-1"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_about_articles') }}"
                                            class="sf-depth-2">Loyiha bo'yicha maqolalar</a>
                                    </li>
                                    <li id="main-menu-link-contente5290d50-5ee0-4079-abdb-3"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_about_oav') }}"
                                            class="sf-depth-2">OAV biz haqimizda</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="main-menu-link-contentfaf6415d-7a6e-4245-bf98-82e7a76b6dce"
                                class="sf-depth-1 menuparent"><a href="{{ route('user_scientific_research') }}"
                                                                 class="sf-depth-1 menuparent">ILMIY TADQIQOTLAR</a>
                                <ul>
                                    <li id="main-menu-link-content62f18183-51b8-4622-ab43-d702dbcaa026"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_scientific_research_dissertations') }}"
                                            class="sf-depth-2">Dissertatsiyalar</a></li>
                                    <li id="main-menu-link-content8d4e2c93-1380-4b9b-85d8-4efac43921ee"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_scientific_research_textbooks') }}"
                                            class="sf-depth-2">Darsliklar</a></li>
                                    <li id="main-menu-link-content21ce1aea-f46f-4909-b5b2-21bfa1771824"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_scientific_research_preparation') }}"
                                            class="sf-depth-2">Online imtihonga tayyorgarlik</a></li>

                                </ul>
                            </li>
                            <li id="main-menu-link-content5c7661a8-cd1e-4f88-b60e-1c5889aaeb34"
                                class="sf-depth-1 menuparent"><a href="{{ route('user_magazines') }}"
                                                                 class="sf-depth-1 menuparent">ILMIY JURNALLAR</a>
                                <ul>
                                    <li id="main-menu-link-content1165affb-12cc-446d-ae4b-650384a82ce0"
                                        class="sf-depth-2 sf-no-children"><a href="{{ route('user_magazines_yevropa') }}"
                                                                             class="sf-depth-2">Yevropa</a>
                                    </li>
                                    <li id="main-menu-link-content47016e1b-8792-4e2b-925d-c98d68ade53d"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_magazines_amerika') }}"
                                            class="sf-depth-2">Amerika</a></li>
                                    <li id="main-menu-link-content3ba1727e-5ecb-4dde-8e00-7356dae5102d"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_magazines_turkiya') }}"
                                            class="sf-depth-2">Turkiya</a></li>
                                    <li id="main-menu-link-content3ba1727e-5ecb-4dde-8e00-7356dae5102d1"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_magazines_rossiya') }}"
                                            class="sf-depth-2">Rossiya</a>
                                    <li id="main-menu-link-content3ba1727e-5ecb-4dde-8e00-7356dae5102d2"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_magazines_central_asia') }}"
                                            class="sf-depth-2">Markaziy Osiyo</a></li>
                                </ul>
                            </li>
                            <li id="main-menu-link-content3cc253b4-478f-4058-8744-cce7c6a57f53"
                                class="sf-depth-1 menuparent"><a href="{{ route('user_literature') }}"
                                                                 class="sf-depth-1 menuparent">O'QUV ADABIYOTLARI</a>
                                <ul>
                                    <li id="main-menu-link-content175cb147-82b8-486d-9264-94530234e4ef"
                                        class="sf-depth-2 sf-no-children"><a href="{{ route('user_literature_textbooks') }}"
                                                                             class="sf-depth-2">Darsliklar</a></li>
                                    <li id="main-menu-link-content175cb147-82b8-486d-9264-94530234e4ef1"
                                        class="sf-depth-2 sf-no-children"><a href="{{ route('user_literature_manuals') }}"
                                                                             class="sf-depth-2">O'quv qo'llanmalar</a>
                                    </li>
                                    <li id="main-menu-link-content175cb147-82b8-486d-9264-94530234e4ef2"
                                        class="sf-depth-2 sf-no-children"><a href="{{ route('user_literature_methodical') }}"
                                                                             class="sf-depth-2">Metodik qo'llanmalar</a>
                                    </li>

                                </ul>
                            </li>
                            <li id="main-menu-link-contente43f358c-d19f-477e-9529-44f9281c2575"
                                class="sf-depth-1 menuparent"><a
                                    href="{{ route('user_gallery') }}"
                                    class="sf-depth-1 menuparent">GALEREYA</a>
                                <ul>
                                    <li id="main-menu-link-content523a1f34-4009-4992-80bd-72e3d70158fa"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_gallery_photos') }}"
                                            class="sf-depth-2">Fotosuratlar</a></li>
                                    <li id="main-menu-link-content5a830532-5174-4ef6-b7ce-7d89ceefeb9d"
                                        class="sf-depth-2 sf-no-children"><a
                                            href="{{ route('user_gallery_videos') }}"
                                            class="sf-depth-2">Videolavhalar</a></li>

                                </ul>
                            </li>
                            <li id="main-menu-link-content4b1f1e72-4b08-43cb-a1b8-dcef30770f99"
                                class="sf-depth-1 menuparent"><a href="{{ route('user_contact') }}"
                                                                 class="sf-depth-1 menuparent">ALOQA</a>

                            </li>
                        </ul>

                    </div>
                </div>


            </div>
        </nav>
        </header>
`
