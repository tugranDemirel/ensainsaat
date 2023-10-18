@include('front.layouts.header')
<body class="body-wrapper">
<!-- preloader -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
            @for($i = 0; $i < strlen($_setting->title); $i++)
                <span data-text-preloader="{{ substr($_setting->title, $i, 1) }}" class="letters-loading">{{ substr($_setting->title, $i, 1) }}</span>
            @endfor
        </div>
        <p class="text-center">Yükleniyor</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<div class="top-bar-header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-md-6 text-center text-md-left">
                <div class="top-welcome-text">
                    <p>{{ !is_null($_setting->header_text) ? $_setting->header_text : ''  }}</p>
                </div>
            </div>
            <div class="col-lg-5 mt-3 mt-md-0 col-md-6 d-flex text-center justify-content-end align-items-center">
                @include('front.layouts.social-media')
            </div>
        </div>
    </div>
</div>

<header class="header-wrapper header-1">
    <div class="container">
        <div class="row middle-bar justify-content-between align-items-center">
            @if(!is_null($_setting->logo))
            <div class="col-xl-3 col-lg-12 col-6 text-lg-center text-xl-left ">
                <div class="logo mb-lg-4 mb-xl-0 text-xl-left">
                    <a href="{{ route('home') }}"><img src="{{ asset($_setting->logo) }}" alt="{{ $_setting->title }}"></a>
                </div>
            </div>
            @endif
            <div class="col-xl-9 col-lg-12 d-none d-lg-block">
                <div class="header-info-element ml-xl-5 ml-md-4 d-flex justify-content-between align-items-center">
                    @if(!is_null($_setting->address))
                    <div class="single-info-element">
                        <div class="icon">
                            <i class="fal fa-map-marked-alt"></i>
                        </div>
                        <div class="text">
                            <h5>Bizi Ziyaret Edin:</h5>
                            <span>{{ $_setting->address }}</span>
                        </div>
                    </div>
                    @endif
                    <div class="single-info-element">
                        <div class="icon">
                            <i class="fal fa-clock"></i>
                        </div>
                        <div class="text">
                            <h5>Çalışma Saatlerimiz:</h5>
                            <span>P.tesi/Cuma 08.00-18.00</span>
                        </div>
                    </div>

                    @if(!is_null($_setting->email))
                    <div class="single-info-element">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h5>Mail Gönderin</h5>
                            <span><a href="mailto:{{ $_setting->email }}">{{ $_setting->email }}</a></span>
                        </div>
                    </div>
                    @endif
                    <div class="cta-btn">
                        <a href="#" class="theme-btn">fiyat al</a>
                    </div>
                </div>
            </div>
            <div class="col-6 justify-content-end align-items-center d-flex d-lg-none">
                <div class="header-btn d-none-mobile">
                    <a href="contact.html" class="theme-btn">teklif al</a>
                </div>

                <div class="mobile-nav-bar ml-15">
                    <div class="mobile-nav-wrap">
                        <div id="hamburger">
                            <i class="fal fa-bars"></i>
                        </div>
                        <!-- mobile menu - responsive menu  -->
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="fal fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">

                                    <li><a href="{{ route('home') }}">Anasayfa</a></li>
                                    <li>
                                        <a class="has-arrow" href="{{ route('realestate.index') }}">Emlak</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('realestate.purporse', ['purpose' => 'kiralik']) }}">Kiralık</a></li>
                                            <li><a href="{{ route('realestate.purporse', ['purpose' => 'satilik']) }}">Satılık</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">Hakkımızda</a></li>
                                    <li><a href="{{ route('service.index') }}">Hizmetlerimiz</a></li>
                                    <li><a href="{{ route('newsletter.index') }}">Basında Biz</a></li>
                                    <li><a href="contact.html">İletişim</a></li>
                                </ul>
                            </nav>

                            <div class="action-bar text-white">
                                @if(!is_null($_setting->address))
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-map-marked-alt"></i>
                                    </div>

                                    <div class="text">
                                        <h5>Bizi ziyaret edin</h5>
                                        <span>{{ $_setting->address }}</span>
                                    </div>
                                </div>
                                @endif
                                @if(!is_null($_setting->address))
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Opening Hours:</h5>
                                        <span>P.tesi/Cuma 08.00-18.00</span>
                                    </div>
                                </div>
                                @endif
                                @if(!is_null($_setting->email))
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Mail Gönderin</h5>
                                        <span><a href="mailto:{{ $_setting->email }}" target="_blank">{{ $_setting->email }}</a></span>
                                    </div>
                                </div>
                                @endif
                                @if(!is_null($_setting->phone))
                                <div class="call-us">
                                    <div class="icon text-white">
                                        <i class="fal fa-phone-volume"></i>
                                    </div>
                                    <div class="text">
                                        <h5>İletişim Numarası</h5>
                                        <span><a href="tel:{{ $_setting->phone }}">{{ $_setting->phone }}</a></span>
                                    </div>
                                </div>
                                @endif
                                <a href="contact.html" class="theme-btn mt-4">Teklif Al <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-wrapper d-none d-lg-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="main-menu">
                <ul>
                    <li><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li>
                        <a class="has-arrow" href="{{ route('realestate.index') }}">Emlak</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('realestate.purporse', ['purpose' => 'kiralik']) }}">Kiralık</a></li>
                            <li><a href="{{ route('realestate.purporse', ['purpose' => 'satilik']) }}">Satılık</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">Hakkımızda</a></li>
                    <li><a href="{{ route('service.index') }}">Hizmetlerimiz</a></li>
                    <li><a href="{{ route('newsletter.index') }}">Basında Biz</a></li>
                    <li><a href="contact.html">İletişim</a></li>
                </ul>
            </div>

            @if(!is_null($_setting->phone))
            <div class="call-us-cta">
                <div class="call-us text-white">
                    <div class="icon">
                        <i class="fal fa-phone-volume"></i>
                    </div>
                    <div class="text">
                        <h5>İletişim Numarası</h5>
                        <span><a href="tel:{{ $_setting->phone }}">{{ $_setting->phone }}</a></span>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</header>
@yield('content')
@include('front.layouts.footer')
</body>

</html>
