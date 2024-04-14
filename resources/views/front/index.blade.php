@extends('front.layouts.app')
@section('title', 'Anasayfa')
@section('content')

    <section class="hero-slide-wrapper hero-1">
        <div class="hero-slider-active owl-theme owl-carousel">
            <div class="single-slide bg-cover" style="background-image: url({{ asset('assets/front/img/home1/hero1.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-9">
                            <div class="hero-contents">
                                <h3 class="animated-text small-heading">Ensa İnşaata Hoşgeldiniz</h3>
                                <h1 class="animated-text bg-heading">Kalite Güvence Hizmet</h1>
                                <a href="{{ route('service.index') }}" class="theme-btn animated-text animated-btn">Hizmetlerimiz <i class="fal fa-long-arrow-right"></i></a>
                                <a href="{{ route('page.about') }}" class="theme-btn animated-text animated-btn black">Hakkımızda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide bg-cover" style="background-image: url({{ asset('assets/front/img/home1/hero2.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-9">
                            <div class="hero-contents">
                                <h3 class="animated-text small-heading">Ensa İnşaata Hoşgeldiniz</h3>
                                <h1 class="animated-text bg-heading">Hayalinizdeki Yapıları İnşa Ediyoruz</h1>
                                <a href="{{ route('service.index') }}" class="theme-btn animated-text animated-btn">Hizmetlerimiz <i class="fal fa-long-arrow-right"></i></a>
                                <a href="{{ route('page.about') }}" class="theme-btn animated-text animated-btn black">Hakkımızda</a>
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
                    <img src="{{ asset('assets/front/img/age.png') }}" alt="">
                    <h5>Yaratıcı ekip ile <b>YILLARIN TECRÜBESİ</b></h5>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="block-contents ml-xl-5 mt-5 mt-xl-0">
                        <span>Her zaman her daim yanınızdayız.</span>
                        <h1>{{ $_setting->title }} her zaman yanınızda.</h1>
                        <h4>
                            Profesyonel ve uzman kadromuz ile sizlere her zaman en iyi hizmeti sunmak için çalışıyoruz.
                        </h4>
                        <p>
                            Hala bizi tanımıyor musunuz? Hemen iletişime geçin, sizlere en iyi hizmeti sunalım.
                        </p>
                        <a href="{{ route('page.contact') }}" class="theme-btn">İletişime Geç <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($services->count() > 0)
    <section class="services-wrapper services-1 section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-center">
                        <span>Hizmetlerimiz</span>
                        <p>Hizmetlerimiz</p>
                        <h1>Ne yapıyoruz?</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item service-1">
                        <div class="service-bg bg-cover" style="background-image: url({{ asset($service->image) }})"></div>
                        <div class="icon">
                           {!! $service?->icon !!}
                        </div>
                        <h3>{{ $service->title }}</h3>
                        <a href="{{ route('service.show', ['slug' => $service->slug] ) }}"><span>Daha Fazla Oku</span><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <section class="cta-wrapper">
        <div class="container">
            <div class="cta-content bg-cover" style="background-image: url({{ asset('assets/front/img/subscribe_bg.jpg') }})">
                <div class="row align-items-center">
                    <div class="col-xl-7 pl-xl-3 col-12 text-center text-xl-left">
                        <h1 class="cta-heading">İşiniz için kolay teklif alın</h1>
                    </div>
                    <div class="col-xl-4 pl-xl-0 mt-4 mt-xl-0 col-12 text-center text-xl-left">
                        @if(!is_null($_setting->phone))
                        <div class="contact-info">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-number">
                                <a href="tel:{{ $_setting->phone }}">{{ $_setting->phone }}</a>
                                <span>Hemen Arayın</span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(!is_null($homes))
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
                            @if(isset($purpose) && ($purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT || $purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_SALE))
                                @if(isset($purpose) && $purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT)
                                    <button data-filter=".rent" class="active">Kiralık</button>
                                @endif
                                @if(isset($purpose) && $purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_SALE)
                                    <button data-filter=".sale" class="active">Satılık</button>
                                @endif
                            @else
                                <button data-filter="*" class="active">Hepsi</button>
                                <button data-filter=".rent">Kiralık</button>
                                <button data-filter=".sale">Satılık</button>
                            @endif
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
                            <a href="{{ route('page.contact') }}" class="theme-btn black mt-4">Hemen İletişime Geçin</a>
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
    @endif
@endsection
