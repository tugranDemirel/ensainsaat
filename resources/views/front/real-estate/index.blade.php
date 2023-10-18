@extends('front.layouts.app')
@section('title', 'Emlak')
@section('meta_description', 'Emlak')
@section('meta_keywords', 'Emlak')
@section('content')

    <section class="page-banner-wrap bg-cover" style="background-image: url({{ asset('assets/front/img/page-banner.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="breadcrumb-wrap">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Emlak</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="page-heading text-white">
                        <h1>İlanda Olanlar</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($homes->count() > 0)
    <section class="portfolio-wrapper-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <div class="section-title-2">
                        <span>Emlak</span>
                        <p>Emlak</p>
                        <h1>İlanda Olanlar</h1>
                    </div>
                </div>
            </div>
            <div class="row mb-20">
                <div class="col-12 col-lg-12 text-center">
                    <div class="portfolio-cat-filter">
                        <button data-filter="*" class="active">Hepsi</button>
                        <button data-filter=".rent">Kiralık</button>
                        <button data-filter=".sale">Satılık</button>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <div class="col-xl-3 col-md-6 grid-item sale">
                    <div class="single-cause-item">
                        <div class="cause-bg bg-cover" style="background-image: url('assets/img/portfolio/project1.jpg');">
                            <a href="project-details.html" class="icon"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="cause-content">
                            <div class="cause-meta d-flex">
                                <div class="author mr-15">
                                    Rosalina D.
                                </div>
                                |
                                <div class="project-amount ml-15">
                                    $56,000
                                </div>
                            </div>
                            <h4><a href="project-details.html">Rosali Office Design</a></h4>
                        </div>
                    </div> <!-- /.single-cause-item  -->
                </div><div class="col-xl-3 col-md-6 grid-item sale">
                    <div class="single-cause-item">
                        <div class="cause-bg bg-cover" style="background-image: url('assets/img/portfolio/project1.jpg');">
                            <a href="project-details.html" class="icon"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="cause-content">
                            <div class="cause-meta d-flex">
                                <div class="author mr-15">
                                    Rosalina D.
                                </div>
                                |
                                <div class="project-amount ml-15">
                                    $56,000
                                </div>
                            </div>
                            <h4><a href="project-details.html">Rosali Office Design</a></h4>
                        </div>
                    </div> <!-- /.single-cause-item  -->
                </div><div class="col-xl-3 col-md-6 grid-item sale">
                    <div class="single-cause-item">
                        <div class="cause-bg bg-cover" style="background-image: url('assets/img/portfolio/project1.jpg');">
                            <a href="project-details.html" class="icon"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="cause-content">
                            <div class="cause-meta d-flex">
                                <div class="author mr-15">
                                    Rosalina D.
                                </div>
                                |
                                <div class="project-amount ml-15">
                                    $56,000
                                </div>
                            </div>
                            <h4><a href="project-details.html">Rosali Office Design</a></h4>
                        </div>
                    </div> <!-- /.single-cause-item  -->
                </div><div class="col-xl-3 col-md-6 grid-item sale">
                    <div class="single-cause-item">
                        <div class="cause-bg bg-cover" style="background-image: url('assets/img/portfolio/project1.jpg');">
                            <a href="project-details.html" class="icon"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="cause-content">
                            <div class="cause-meta d-flex">
                                <div class="author mr-15">
                                    Rosalina D.
                                </div>
                                |
                                <div class="project-amount ml-15">
                                    $56,000
                                </div>
                            </div>
                            <h4><a href="project-details.html">Rosali Office Design</a></h4>
                        </div>
                    </div> <!-- /.single-cause-item  -->
                </div><div class="col-xl-3 col-md-6 grid-item  rent">
                    <div class="single-cause-item">
                        <div class="cause-bg bg-cover" style="background-image: url('assets/img/portfolio/project1.jpg');">
                            <a href="project-details.html" class="icon"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="cause-content">
                            <div class="cause-meta d-flex">
                                <div class="author mr-15">
                                    Rosalina D.
                                </div>
                                |
                                <div class="project-amount ml-15">
                                    $56,000
                                </div>
                            </div>
                            <h4><a href="project-details.html">Rosali Office Design</a></h4>
                        </div>
                    </div> <!-- /.single-cause-item  -->
                </div><div class="col-xl-3 col-md-6 grid-item  rent">
                    <div class="single-cause-item">
                        <div class="cause-bg bg-cover" style="background-image: url('assets/img/portfolio/project1.jpg');">
                            <a href="project-details.html" class="icon"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="cause-content">
                            <div class="cause-meta d-flex">
                                <div class="author mr-15">
                                    Rosalina D.
                                </div>
                                |
                                <div class="project-amount ml-15">
                                    $56,000
                                </div>
                            </div>
                            <h4><a href="project-details.html">Rosali Office Design</a></h4>
                        </div>
                    </div> <!-- /.single-cause-item  -->
                </div>
                @foreach($homes as $home)
                <div class="col-xl-3 col-md-6 grid-item {{ $home->purpose === 1 ? 'rent' : 'sale' }} ">
                    <div class="single-cause-item">
                        <div class="cause-bg bg-cover" style="background-image: url('assets/img/portfolio/project1.jpg');">
                            <a href="project-details.html" class="icon"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="cause-content">
                            <div class="cause-meta d-flex">
                                <div class="author mr-15">
                                    Rosalina D.
                                </div>
                                |
                                <div class="project-amount ml-15">
                                    $56,000
                                </div>
                            </div>
                            <h4><a href="project-details.html">Rosali Office Design</a></h4>
                        </div>
                    </div> <!-- /.single-cause-item  -->
                </div>
                @endforeach
            </div>



        </div>
    </section>
    <section class="cta-video-wrapper section-padding bg-cover" style="background-image: url({{ asset('assets/front/img/home4/cta-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12 mt-5 mt-lg-0 order-2 order-lg-1 text-center text-white text-lg-left">
                    <div class="cta-contents-wrap">
                        @if($_setting->phone)
                            <h5 class="mb-3"><a href="tel:{{ $_setting->phone }}">{{ $_setting->phone }}</a></h5>
                        @endif
                        <h1>Evinizi satışa çıkarmamızı ister misiniz?</h1>
                        <h4>Profesyonel uzman kadromuz ile evlerinizi, istediğiniz şartlarda en hızlı emlak pazarlama garantisiyle müşterilerimizle buluşturuyoruz. İster kiralayın, ister satın. Seçim sizin!</h4>
                        <a href="contact.html" class="theme-btn black mt-4">Hemen İletişime Geçin</a>
                    </div>
                </div>
                <div class="col-lg-4 col-12 order-1 order-lg-2">
                    <div class="video_popup justify-content-center d-flex align-items-center">
                        <div class="video-play-btn">
                            <a href="#" class="play-video"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
        <div class="row mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 text-center">
                        <div class="section-title-2">
                            <span>Emlak</span>
                            <p>Emlak</p>
                            <h1>İletişime Geçin</h1>
                        </div>
                    </div>
                </div>
                <section class="cta-video-wrapper section-padding bg-cover" style="background-image: url({{ asset('assets/front/img/home4/cta-bg.png') }})">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-12 mt-5 mt-lg-0 order-2 order-lg-1 text-center text-white text-lg-left">
                                <div class="cta-contents-wrap">
                                    @if($_setting->phone)
                                    <h5 class="mb-3"><a href="tel:{{ $_setting->phone }}">{{ $_setting->phone }}</a></h5>
                                    @endif
                                    <h1>Evinizi satışa çıkarmamızı ister misiniz?</h1>
                                    <h4>Profesyonel uzman kadromuz ile evlerinizi, istediğiniz şartlarda en hızlı emlak pazarlama garantisiyle müşterilerimizle buluşturuyoruz. İster kiralayın, ister satın. Seçim sizin!</h4>
                                    <a href="contact.html" class="theme-btn black mt-4">Hemen İletişime Geçin</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 order-1 order-lg-2">
                                <div class="video_popup justify-content-center d-flex align-items-center">
                                    <div class="video-play-btn">
                                        <a href="#" class="play-video"><i class="fas fa-home"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endif

@endsection
