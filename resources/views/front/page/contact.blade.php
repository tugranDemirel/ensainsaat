@extends('front.layouts.app')
@section('title', 'İletişim')
@section('css')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="page-heading text-white">
                        <h1>İletişim</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row justify-content-center">
                @if(!is_null($_setting->email))
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>E-Posta Adresi</h4>
                                <span>Mail gönderin</span>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p>{{ $_setting->email }}</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(!is_null($_setting->phone))
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-contact-card card2">
                            <div class="top-part">
                                <div class="icon">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="title">
                                    <h4>iletişim Numarası</h4>
                                    <span>Bilgi almak için bizi arayın</span>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <div class="info">
                                    <p>{{ $_setting->phone }}</p>
                                </div>
                                <div class="icon">
                                    <i class="fal fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if(!is_null($_setting->address))
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-contact-card card3">
                            <div class="top-part">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="title">
                                    <h4>Adres</h4>
                                    <span>Bize uğrayın</span>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <div class="info">
                                    <p>{{ $_setting->address }}</p>
                                </div>
                                <div class="icon">
                                    <i class="fal fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="contact-map-wrap">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3064.474176345984!2d35.166765911800255!3d39.81878517142332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2str!4v1713095696983!5m2!1sen!2str"  style="border:0; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section-padding pb-0">
                <div class="col-12 text-center mb-20">
                    <span><i class="fal fa-pen"></i></span>
                    <h1>Hemen İletişime Geçin</h1>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="contact-form">
                        <form action="{{ route('page.contact.store') }}" class="row" method="post">
                            @csrf
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="fname">Ad Soyadınız</label>
                                    <input type="text" id="fname" name="name" value="{{ old('name') }}" required class="@error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="email">E-Posta Adresiniz</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"  required class="@error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="phone">Telefon Numaranız</label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required class="@error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="subject">Konu</label>
                                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required class="@error('subject') is-invalid @enderror">
                                    @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    <label for="message">Mesajınız</label>
                                    <textarea id="message" name="message" required class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                                    @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12 text-center">
                                <input class="submit-btn" type="submit" value="İletişime Geç">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    @if(session()->has('success'))
        <script>
            Swal.fire({
                title: 'Başarılı!',
                text: '{{ session()->get('success') }}',
                icon: 'success',
                confirmButtonText: 'Tamam'
            })
        </script>
    @endif
    @if(session()->has('error'))
        <script>
            Swal.fire({
                title: 'Hata!',
                text: '{{ session()->get('error') }}',
                icon: 'error',
                confirmButtonText: 'Tamam'
            })
        </script>
    @endif
@endsection
