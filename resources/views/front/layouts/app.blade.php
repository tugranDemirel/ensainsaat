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
            <div class="col-xl-3 col-lg-12 col-6 text-lg-center text-xl-left ">
                <div class="logo mb-lg-4 mb-xl-0 text-xl-left">
                    <a href="index-2.html"><img src="assets/img/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-12 d-none d-lg-block">
                <div class="header-info-element ml-xl-5 ml-md-4 d-flex justify-content-between align-items-center">
                    <div class="single-info-element">
                        <div class="icon">
                            <i class="fal fa-map-marked-alt"></i>
                        </div>
                        <div class="text">
                            <h5>visit our location:</h5>
                            <span>West Jakarta City, UK</span>
                        </div>
                    </div>
                    <div class="single-info-element">
                        <div class="icon">
                            <i class="fal fa-clock"></i>
                        </div>
                        <div class="text">
                            <h5>Opening Hours:</h5>
                            <span>Mon-Fri 8am-5pm</span>
                        </div>
                    </div>
                    <div class="single-info-element">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h5>send us mail</h5>
                            <span>info@example.com</span>
                        </div>
                    </div>
                    <div class="cta-btn">
                        <a href="#" class="theme-btn">get a quote</a>
                    </div>
                </div>
            </div>
            <div class="col-6 justify-content-end align-items-center d-flex d-lg-none">
                <div class="header-btn d-none-mobile">
                    <a href="contact.html" class="theme-btn">get a quote</a>
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
                                    <li><a class="has-arrow" href="#">Homes</a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.html">Homepage 1</a></li>
                                            <li><a href="index-3.html">Homepage 2</a></li>
                                            <li><a href="index-4.html">Homepage 3</a></li>
                                            <li><a href="index-5.html">Homepage 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li>
                                        <a class="has-arrow" href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="faq.html">faq</a></li>
                                            <li><a href="services-details.html">services details</a></li>
                                            <li><a href="team.html">Team</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>

                            <div class="action-bar text-white">
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-map-marked-alt"></i>
                                    </div>
                                    <div class="text">
                                        <h5>visit our location:</h5>
                                        <span>West Jakarta City, UK</span>
                                    </div>
                                </div>
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Opening Hours:</h5>
                                        <span>Mon-Fri 8am-5pm</span>
                                    </div>
                                </div>
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Send us mail</h5>
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                                <div class="call-us">
                                    <div class="icon text-white">
                                        <i class="fal fa-phone-volume"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Troll free number</h5>
                                        <span>+09 949 858327</span>
                                    </div>
                                </div>
                                <a href="contact.html" class="theme-btn mt-4">get a touch <i class="fal fa-arrow-right"></i></a>
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
                    <li><a href="index-2.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-2.html">Homepage 1</a></li>
                            <li><a href="index-3.html">Homepage 2</a></li>
                            <li><a href="index-4.html">Homepage 3</a></li>
                            <li><a href="index-5.html">Homepage 4</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">team</a></li>
                            <li><a href="faq.html">faq</a></li>
                            <li><a href="projects.html">projects</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="call-us-cta">
                <div class="call-us text-white">
                    <div class="icon">
                        <i class="fal fa-phone-volume"></i>
                    </div>
                    <div class="text">
                        <h5>Troll free number</h5>
                        <span>+09 949 858327</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
@include('front.layouts.footer')
</body>

</html>
