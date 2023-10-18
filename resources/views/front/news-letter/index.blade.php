@extends('front.layouts.app')
@section('title', 'Basında Biz')
@section('meta_description', 'Basında Biz')
@section('meta_keywords', 'Basında Biz')
@section('content')

    <section class="page-banner-wrap bg-cover" style="background-image: url({{ asset('assets/front/img/page-banner.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="breadcrumb-wrap">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('newsletter.index') }}">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basında Biz</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="page-heading text-white">
                        <h1>Basında Biz</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-wrapper news-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts">
                        @foreach($newsletters as $newsletter)
                        <div class="single-blog-post">
                            <div class="post-featured-thumb bg-cover" style="background-image: url({{ $newsletter->image }})"></div>
                            <div class="post-content">
                                <h2><a href="{{ route('newsletter.show', ['slug' => $newsletter->slug]) }}">{{ $newsletter->title }}</a></h2>
                                <p>
                                    {{ $newsletter->short_content }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-30">

                                    <div class="post-link">
                                        <a href="{{ route('newsletter.show', ['slug' => $newsletter->slug]) }}"><i class="fal fa-arrow-right"></i> Daha Fazlasını Oku</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        @if($homes->count() > 0)
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Emlak Vitrini</h3>
                            </div>
                            <div class="popular-posts">
                                @foreach($homes as $home)
                                <div class="single-post-item">
                                    <div class="thumb bg-cover" style="background-image: url({{ asset($home->image) }})"></div>
                                    <div class="post-content">
                                        @php
                                            $pr = $home->purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT ? 'rent' : 'sale';
                                            $purposeUrl = $home->purpose == \App\Enum\RealEstate\RealEstatePurposeEnum::PURPOSE_RENT ? 'kiralik' : 'satilik';
                                        @endphp
                                        <h5><a href="{{ route('realestate.show', ['purpose' => $purposeUrl, 'slug' => $home->slug]) }}">{{ $home->title }}</a></h5>
                                        <div class="post-date">
                                         {{ number_format($home->realEstateAttribute->price, 0, ',', '.') }} ₺
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Çalışmalarımızdan haber almak için takip edin.</h3>
                            </div>
                            <div class="social-link">
                                @if(!is_null($_setting->facebook))
                                    <a href="{{ $_setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if(!is_null($_setting->twitter))
                                    <a href="{{ $_setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if(!is_null($_setting->instagram))
                                    <a href="{{ $_setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                @endif
                                @if(!is_null($_setting->linkedin))
                                    <a href="{{ $_setting->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                @endif
                                @if(!is_null($_setting->youtube))
                                    <a href="{{ $_setting->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
