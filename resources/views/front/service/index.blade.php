@extends('front.layouts.app')
@section('title', 'Hizmetlerimiz')
@section('meta_description', 'Hizmetlerimiz')
@section('meta_keywords', 'Hizmetlerimiz')
@section('content')

    <section class="page-banner-wrap bg-cover" style="background-image: url({{ asset('assets/front/img/page-banner.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="breadcrumb-wrap">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hizmetlerimiz</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="page-heading text-white">
                        <h1>Ne Yapıyoruz?</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-service-wrapper section-padding mtm-30">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-6 col-xl-4 col-12">
                        <div class="single-service-card">
                            <div class="card-thumb bg-cover" style="background-image: url({{ asset($service->image) }})"></div>
                            <div class="content">
                                <div class="case-cat">
                                    <a href="{{ route('service.show', ['slug' => $service->slug]) }}">
                                        <i class="fal fa-drafting-compass"></i>
                                    </a>
                                </div>
                                <h3><a href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ $service->name }}</a></h3>
                                <p>{{ $service->short_description }}</p>
                                <a href="{{ route('service.show', ['slug' => $service->slug]) }}" class="read-btn">Okumaya Devam Et <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="process-wrapper section-padding section-bg">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-5 col-12">
                    <div class="photo-style-grid">
                        <div class="top-img bg-cover" style="background-image: url({{ asset('assets/front/img/p_top_img.jpg') }})"></div>
                        <div class="main-img bg-cover" style="background-image: url({{ asset('assets/front/img/p_main_img.jpg') }})"></div>
                        <div class="bottom-img bg-cover" style="background-image: url({{ asset('assets/front/img/p_bottom_img.jpg') }})"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-12 offset-xl-1">
                    <div class="section-title">
                        <span>Çalışma Süreci</span>
                        <p>Çalışma Süreci</p>
                        <h1>Şirketimizin Çalışma Süreci.</h1>
                    </div>

                    <div class="process-setps mt-5 mt-xl-0">
                        <div class="single-process-item">
                            <div class="setp-number">
                                <h1>01</h1>
                            </div>
                            <div class="content">
                                <h3>Proje Hakkında Tartışma Yapıyoruz</h3>
                                <p>Sizlerle beraber nasıl olmalı, nasıl olur gibi bir çok sorunun cevabını veriyoruz. Sorunlarınız karşısında en iyi çözümleri sunuyoruz.</p>
                            </div>
                        </div>
                        <div class="single-process-item">
                            <div class="setp-number">
                                <h1>02</h1>
                            </div>
                            <div class="content">
                                <h3>Ekibimizle Çalışıyoruz</h3>
                                <p>İsteğiniz proje doğrultusunda ekibimiz ile planlamalar yaparak harekete geçiyoruz.</p>
                            </div>
                        </div>
                        <div class="single-process-item">
                            <div class="setp-number">
                                <h1>03</h1>
                            </div>
                            <div class="content">
                                <h3>İşimizi Yapıp Teslim Ediyoruz</h3>
                                <p>İşimizi alanında profesyonel uzman kadromuz ile titizlikle yapıyoruz. Sizlere teslim yapıyoruz.</p>
                            </div>
                        </div>
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
                            <h1>İlandakiler</h1>
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
                    @foreach($homes as $home)
                        @php
                            $pr = $home->purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT ? 'rent' : 'sale';
                            $purposeUrl = $home->purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT ? 'kiralik' : 'satilik';
                        @endphp
                        <div class="col-xl-3 col-md-6 grid-item {{ $pr }}">
                            <div class="single-cause-item">
                                <div class="cause-bg bg-cover" style="background-image: url({{ asset($home->image) }});">
                                    <a href="{{ route('realestate.show', ['purpose' => $purposeUrl, 'slug' => $home->slug]) }}" class="icon"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                                <div class="cause-content">

                                    <h4><a href="{{ route('realestate.show', ['purpose' => $purposeUrl, 'slug' => $home->slug]) }}">{{ $home->title }}</a></h4>
                                    <div class="cause-meta d-flex">
                                        <div class="author mr-15">
                                            {{ number_format($home->realEstateAttribute->price, 0, ',', '.') }} ₺
                                        </div>
                                    </div>
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
