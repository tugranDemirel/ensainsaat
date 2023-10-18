@extends('front.layouts.app')
@section('title', $service->title)
@section('meta_description', $service->meta_description)
@section('meta_keywords', $service->meta_keywords)
@section('css')

@endsection
@section('content')

    <section class="page-banner-wrap bg-cover" style="background-image: url({{ asset('assets/front/img/page-banner.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="breadcrumb-wrap">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('service.index') }}">hizmetlerimiz</a></li>
                                <li class="breadcrumb-item active">Hizmet Detayları</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="page-heading text-white">
                        <h1>Hizmet Detayları</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 mt-5 mt-md-0 col-12 order-2 order-md-1">
                    <div class="service-details-sidebar">

                        <div class="single-service-sidebar site_info_widget">
                            <div class="sidebar-title">
                                <h3>Bizimle İletişime Geçin</h3>
                            </div>
                            <div class="contact-us">

                                @if(!is_null($_setting->phone))
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>İletişim Numarası</span>
                                        <p><a href="tel:{{ $_setting->phone }}">{{ $_setting->phone }}</a></p>
                                    </div>
                                </div>
                                @endif
                                @if(!is_null($_setting->email))
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>Email</span>
                                        <p><a href="mailto:{{ $_setting->email }}">{{ $_setting->email }}</a></p>
                                    </div>
                                </div>
                                @endif
                                @if(!is_null($_setting->address))
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>Adres</span>
                                        <p>{{ $_setting->address }}</p>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12 order-1 order-md-2">
                    <div class="service-details-content-wrapper pl-0 pl-md-4">
                        <div class="service-gallery owl-carousel owl-theme">
                            <div class="single-service-photo bg-cover" style="background-image: url({{ asset($service->image) }})"></div>
                        </div>
                        <p>{{ $service->short_description }}</p>
                        {!! $service->description !!}

                    </div>

                    <div class="faq-content pl-0 pl-md-4">
                        <h2>Nelere Dahiliz</h2>
                        <div class="faq-accordion">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header" id="faq3">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-3">
                                                20+ Yıllık Tecrübe.
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-3" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            20 yıldan fazla olan tecrübemiz ile sizlere en iyi hizmeti sunuyoruz. Sizleri memnun etmek bizim için en önemli şey.
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq1">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-1">
                                                % 100 Memnuniyet Garantisi.
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-1" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Yaptığımız her işin arkasında duruyoruz. Sizlerin memnuniyeti bizim için çok önemli. Sizler memnun olmadan bizler memnun olamayız.
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq2">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="true" href="#faq-2">
                                               Doğru Test Süreçleri
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-2" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Profesyonel uzman kadromuz ile sizlere uygun en doğru test süreçlerini uyguluyoruz. Sizin için en doğru olanı bulmak bizim işimiz.
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
@endsection
