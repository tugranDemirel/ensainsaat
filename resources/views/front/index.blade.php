@extends('front.layouts.app')
@section('title', 'Anasayfa')
@section('content')

    <section class="hero-slide-wrapper hero-1">
        <div class="hero-slider-active owl-theme owl-carousel">
            <div class="single-slide bg-cover" style="background-image: url('assets/img/home1/hero1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-9">
                            <div class="hero-contents">
                                <h3 class="animated-text small-heading">Welcome To Dustrix</h3>
                                <h1 class="animated-text bg-heading">Global Automotive</h1>
                                <a href="services.html" class="theme-btn animated-text animated-btn">Our Services <i class="fal fa-long-arrow-right"></i></a>
                                <a href="about.html" class="theme-btn animated-text animated-btn black">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide bg-cover" style="background-image: url('assets/img/home1/hero2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-9">
                            <div class="hero-contents">
                                <h3 class="animated-text small-heading">Welcome To Dustrix</h3>
                                <h1 class="animated-text bg-heading">We Build Dream House</h1>
                                <a href="services.html" class="theme-btn animated-text animated-btn">Our Services <i class="fal fa-long-arrow-right"></i></a>
                                <a href="about.html" class="theme-btn animated-text animated-btn black">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="promo-featured-wrapper section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-12 text-center">
                    <img src="assets/img/age.png" alt="">
                    <h5>Years Of Experience With <b>Creative Team</b></h5>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="block-contents ml-xl-5 mt-5 mt-xl-0">
                        <span>Easily import the whole Industry</span>
                        <h1>Amwerk is always interested.</h1>
                        <h4>Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        <a href="contact.html" class="theme-btn">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-wrapper services-1 section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-center">
                        <span>Services</span>
                        <p>Our Services</p>
                        <h1>What we do</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item service-1">
                        <div class="service-bg bg-cover" style="background-image: url('assets/img/home1/eng.jpg')"></div>
                        <div class="icon">
                            <img src="assets/img/icon/s1.png" alt="">
                        </div>
                        <h3>Quick Coordinate E-business</h3>
                        <a href="services-details.html"><span>learn more</span><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item service-1">
                        <div class="service-bg bg-cover" style="background-image: url('assets/img/home1/power.jpg')"></div>
                        <div class="icon">
                            <img src="assets/img/icon/s2.png" alt="">
                        </div>
                        <h3>Power & Energy Sector</h3>
                        <a href="services-details.html"><span>learn more</span><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item service-1 active">
                        <div class="service-bg bg-cover" style="background-image: url('assets/img/home1/eng.jpg')"></div>
                        <div class="icon">
                            <img src="assets/img/icon/s3.png" alt="">
                        </div>
                        <h3>Mechanical Engineering</h3>
                        <a href="services-details.html"><span>learn more</span><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item service-1">
                        <div class="service-bg bg-cover" style="background-image: url('assets/img/home1/gas.jpg')"></div>
                        <div class="icon">
                            <img src="assets/img/icon/s4.png" alt="">
                        </div>
                        <h3>Fuel & Gas Management</h3>
                        <a href="services-details.html"><span>learn more</span><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-wrapper">
        <div class="container">
            <div class="cta-content bg-cover" style="background-image: url('assets/img/subscribe_bg.jpg')">
                <div class="row align-items-center">
                    <div class="col-xl-7 pl-xl-3 col-12 text-center text-xl-left">
                        <h1 class="cta-heading">Get an easy quotation for your industry</h1>
                    </div>
                    <div class="col-xl-4 pl-xl-0 mt-4 mt-xl-0 col-12 text-center text-xl-left">
                        <div class="contact-info">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-number">
                                <a href="#">(+1) 555 234-8765</a>
                                <span>Call Us Now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-12">
                    <div class="content-block">
                        <p>Get Answers</p>
                        <h1>Get every single answers from here.</h1>
                        <div class="bg-img">
                            <img src="assets/img/map_pattern.png" alt="">
                            <div class="man bg-cover man-1" style="background-image: url('assets/img/man1.png')"></div>
                            <div class="man bg-cover man-2" style="background-image: url('assets/img/man2.png')"></div>
                            <div class="man bg-cover man-3" style="background-image: url('assets/img/man3.png')"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12 mt-4 mt-xl-0">
                    <div class="faq-content">
                        <div class="faq-accordion">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header" id="faq1">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-1">
                                                How do we manage quality assurance?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-1" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin risus non faucibus blandit. Nulla facilisi.
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq2">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="true" href="#faq-2">With diverse capabilities and extensive manufacturing?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-2" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            We’re proud of our reputation as one of the finest “one-call, one-stop” of brand identity and electronic user interface products. We take your trust seriously, employing proven quality management principles to enhance customer satisfaction and continually improve.
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq3">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-3">
                                                You can rely on Amwerk as a critical part?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-3" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin risus non faucibus blandit. Nulla facilisi.
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq4">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-4">
                                                How do we manage quality assurance?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-4" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin risus non faucibus blandit. Nulla facilisi.
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-section section-padding pt-0">
        <div class="container">
            <div class="project-wrapper">
                <div class="portfolio-carousel-active owl-carousel">
                    <div class="single-project">
                        <div class="project-contents">
                            <div class="row">
                                <div class="project-details col-lg-4 offset-lg-1 pl-lg-0 order-2 order-lg-1 col-12">
                                    <div class="project-meta">
                                        <a href="#" class="project-cat">Industrial</a>
                                        <div class="client-info d-inline">
                                            <span><i class="fal fa-user"></i> Client:</span> Rosalina D.
                                        </div>
                                    </div>
                                    <h2>Leverage agile motive frameworks</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui</p>
                                    <a href="project-details.html" class="read-btn theme-btn">Case Details <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                                <div class="project-thumbnail col-lg-5 offset-lg-1 p-lg-0 order-1 order-lg-2 col-12">
                                    <a href="assets/img/project/project1.jpg" class="popup-gallery bg-cover" style="background-image: url('assets/img/project/project1.jpg')"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-project -->
                    <div class="single-project">
                        <div class="project-contents">
                            <div class="row">
                                <div class="project-details col-lg-4 offset-lg-1 pl-lg-0 order-2 order-lg-1 col-12">
                                    <div class="project-meta">
                                        <a href="#" class="project-cat">Industrial</a>
                                        <div class="client-info d-inline">
                                            <span><i class="fal fa-user"></i> Client:</span> Rosalina D.
                                        </div>
                                    </div>
                                    <h2>Leverage agile motive frameworks</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui</p>
                                    <a href="project-details.html" class="read-btn theme-btn">Case Details <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                                <div class="project-thumbnail col-lg-5 offset-lg-1 p-lg-0 order-1 order-lg-2 col-12">
                                    <a href="assets/img/project/project2.jpg" class="popup-gallery bg-cover" style="background-image: url('assets/img/project/project2.jpg')"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-carousel-nav"></div>
            </div>
        </div>
    </section>

    <section class="pricing-wrapper section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-center">
                        <span>Planning</span>
                        <p>Easy Planning</p>
                        <h1>Price & Plans</h1>
                    </div>
                </div>
            </div>

            <div class="row no-padding">
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="single-pricing-table bg-cover" style="background-image: url('assets/img/home1/gas.jpg')">
                        <div class="price">
                            $<span>590</span>.00
                        </div>
                        <div class="package-name">
                            <h3>Basic Plan</h3>
                            <span>Monthly</span>
                        </div>
                        <ul>
                            <li>Objectively integrate competencies</li>
                            <li>Process-centric communities</li>
                            <li>Emasculate holistic innovation</li>
                            <li>Incubate intuitive opportunities</li>
                        </ul>
                        <div class="package-btn">
                            <a href="contact.html" class="theme-btn black">Get Your Order Done <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="single-pricing-table bg-cover active" style="background-image: url('assets/img/home1/eng.jpg')">
                        <div class="price">
                            $<span>999</span>.00
                        </div>
                        <div class="package-name">
                            <h3>Advanced Plan</h3>
                            <span>Monthly</span>
                        </div>
                        <ul>
                            <li>Objectively integrate competencies</li>
                            <li>Process-centric communities</li>
                            <li>Emasculate holistic innovation</li>
                            <li>Incubate intuitive opportunities</li>
                            <li>24/7 Online Support</li>
                        </ul>
                        <div class="package-btn">
                            <a href="contact.html" class="theme-btn black">Get Your Order Done <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="single-pricing-table bg-cover" style="background-image: url('assets/img/home1/power.jpg')">
                        <div class="price">
                            $<span>590</span>.00
                        </div>
                        <div class="package-name">
                            <h3>Basic Plan</h3>
                            <span>Monthly</span>
                        </div>
                        <ul>
                            <li>Objectively integrate competencies</li>
                            <li>Process-centric communities</li>
                            <li>Emasculate holistic innovation</li>
                            <li>Incubate intuitive opportunities</li>
                        </ul>
                        <div class="package-btn">
                            <a href="contact.html" class="theme-btn black">Get Your Order Done <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="analytis-wrapper section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 pr-xl-5 col-12">
                    <div class="block-contents">
                        <span>Business Analytics</span>
                        <h1>Providing solutions of every kind.</h1>
                        <h4>Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="user-data mr-lg-5 d-flex align-items-center">
                        <div class="user-img bg-cover" style="background-image: url('assets/img/blog/author2.jpg')"></div>
                        <div class="user-info">
                            <h5>Miranda H.</h5>
                            <span>Founder</span>
                        </div>
                        <div class="phone-info">
                            <a href="#">963. 369. 265. 56</a>
                            <span>Make An Call</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12 mt-5 mt-xl-0">
                    <div class="chart-wrapper">
                        <img src="assets/img/chart.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe-box-wrapper text-white bg-overlay section-padding bg-cover" style="background-image: url('assets/img/subscribe_bg.jpg')">
        <div class="subscribe_left_bg d-none d-xl-block bg-cover" style="background-image: url('assets/img/subscribe_left_bg.jpg')"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-12 offset-xl-5">
                    <div class="cta-contents text-center text-xl-left">
                        <div class="icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h1>Get Weekly Newsletter</h1>
                        <p>Get your answer directly or get weekly updates.</p>

                        <div class="subscribe-form">
                            <form action="#">
                                <input type="email" placeholder="Enter email address" required>
                                <button class="submit-btn" type="submit">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-center">
                        <span>News</span>
                        <p>News Feed</p>
                        <h1>Blog Insights</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-blog-card">
                        <div class="featured-img bg-cover" style="background-image: url('assets/img/blog/b1.jpg')">
                        </div>
                        <div class="post-content">
                            <div class="post-date">
                                <span>20</span>
                                jun
                            </div>
                            <div class="post-meta">
                                <a href="news-details.html" class="post-cat">Industrial</a> /
                                <a href="news-details.html" class="post-author">Miranda H.</a>
                            </div>
                            <h3><a href="news-details.html">The dramatically visualize on
                                    customer directed</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-blog-card">
                        <div class="featured-img bg-cover" style="background-image: url('assets/img/blog/b2.jpg')">
                        </div>
                        <div class="post-content">
                            <div class="post-date">
                                <span>30</span>
                                feb
                            </div>
                            <div class="post-meta">
                                <a href="news-details.html" class="post-cat">Industrial</a> /
                                <a href="news-details.html" class="post-author">Miranda H.</a>
                            </div>
                            <h3><a href="news-details.html">Recent Commercial Real Estate Transactions</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-blog-card">
                        <div class="featured-img bg-cover" style="background-image: url('assets/img/blog/b3.jpg')">
                        </div>
                        <div class="post-content">
                            <div class="post-date">
                                <span>29</span>
                                may
                            </div>
                            <div class="post-meta">
                                <a href="news-details.html" class="post-cat">Industrial</a> /
                                <a href="news-details.html" class="post-author">Miranda H.</a>
                            </div>
                            <h3><a href="news-details.html">10 Brilliant Ways To Decorate Your Office or Home</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
