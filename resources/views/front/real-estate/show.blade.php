@extends('front.layouts.app')
@section('title', $home->title)
@section('meta_description', $home->meta_description)
@section('meta_keywords', $home->meta_keywords)
@section('css')

@endsection
@section('content')
    <section class="page-banner-wrap bg-cover"
             style="background-image: url({{ asset('assets/front/img/page-banner.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="breadcrumb-wrap">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detay</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="page-heading text-white">
                        <h1>Detay</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-details-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="project-thumb bg-cover" style="background-image: url({{ asset($home->image) }})"></div>
                    <div class="project-meta-data">
                        <div class="project-info">
                            <span>Fiyat</span>
                            <h3> {{ number_format($home->realEstateAttribute->price, 0, ',', '.') }} ₺</h3>
                        </div>

                        <div class="project-info">
                            <span>Adres</span>
                            <h3>{{ $home->address }} Şehit Mustafa Tekgül Caddesi No:52 Sorgun/Yozgat</h3>
                        </div>
                        <div class="project-info">
                            <a href="tel:{{ $_setting->phone }}" class="theme-btn white">İletişim</a>
                        </div>

                    </div>

                    </div>

                    <div class="project-details-content">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-12 mt-5 mt-lg-0 pl-xl-5">
                                <div class="appointment-notice-board">
                                    <div class="appointment-list">
                                        <h2>Özellikler</h2>
                                        <div class="appointment-time d-flex justify-content-between" style="border-bottom: 1px solid #f5f5f5;">
                                            <span >Yapım Yılı</span>
                                            <span>{{ $home->realEstateAttribute->year_built }}</span>
                                        </div>
                                        <div class="appointment-time d-flex justify-content-between" style="border-bottom: 1px solid #f5f5f5;">
                                            <span >Metrekare</span>
                                            <span>{{ $home->realEstateAttribute->area }}</span>
                                        </div>
                                        <div class="appointment-time d-flex justify-content-between" style="border-bottom: 1px solid #f5f5f5;">
                                            <span >Oda Sayısı</span>
                                            <span>{{ $home->realEstateAttribute->bathrooms }}</span>
                                        </div>
                                        <div class="appointment-time d-flex justify-content-between" style="border-bottom: 1px solid #f5f5f5;">
                                            <span >Yatak Odası Sayısı</span>
                                            <span>{{ $home->realEstateAttribute->bedrooms }}</span>
                                        </div>
                                        @isset($home->realEstateAttribute->other_features)
                                            @foreach(json_decode($home->realEstateAttribute->other_features, true) as $key => $value)
                                                <div class="appointment-time d-flex justify-content-between" style="border-bottom: 1px solid #f5f5f5;">
                                                    <span >{{ $key }}</span>
                                                    <span>{{ $value }}</span>
                                                </div>
                                            @endforeach
                                        @endisset
                                        <div class="appointment-time d-flex justify-content-between" style="border-bottom: 1px solid #f5f5f5;">
                                            <span >Garaj Sayısı</span>
                                            <span>{{ $home->realEstateAttribute->garages }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-12 col-lg-5">
                                <div class="map-wrapper map-iframe">
                                    {!! $home->map !!}
                                </div>
                            </div>
                        </div>
                        {!! $home->description !!}
                        <div class="row">
                            @foreach($home->realEstateMedias as $media)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="project-shot">
                                        <a href="{{ asset($media->images) }}" class="popup-gallery"> <img src="{{ asset($media->images) }}" alt="{{ $home->slug.' '.$media->uuid }}" style="width: 370px; height: 370px;"></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
        </div>
    </section>

@endsection
