@extends('front.layouts.app')
@section('title', 'Hakkımızda')
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
                                <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="page-heading text-white">
                        <h1>Hakkımızda</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-featured-wrapper section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5 col-12">
                    <div class="about-promo bg-cover"
                         style="background-image: url({{ asset('assets/front/img/about_us.jpg') }})">

                    </div>
                </div>

                <div class="col-xl-6 col-lg-7 col-12 mt-5 mt-lg-0">
                    <div class="block-contents ml-lg-5">
                        <span>Sektör hakkında kolayca bilgilendiriyoruz.</span>
                        <h1>{{ ucfirst($_setting?->title) ?? 'Ensa İnşaat' }} olarak her zaman ilgileniyoruz.</h1>
                        <h4>Bize ulaşarak yapılarınız hakkında detaylı bilgilendirme ve fiyatlandırma
                            alabilirsiniz.</h4>
                    </div>

                    <div class="icon-boxs ml-lg-5">
                        <div class="single-icon-box">
                            <div class="icon">
                                <i class="fal fa-hard-hat"></i>
                            </div>
                            <div class="content">
                                <h3>Her zaman İşimizin Arkasındayız</h3>
                                <p>Müşterilerimize sektör hakkındaki her konuda desteğimizi her zaman sürdürüyoruz.</p>
                            </div>
                        </div>
                        <div class="single-icon-box">
                            <div class="icon">
                                <i class="fal fa-road"></i>
                            </div>
                            <div class="content">
                                <h3>Yaratıcı Fikirlere Sahibiz</h3>
                                <p>{{ ucfirst($_setting?->title) ?? 'Ensa İnşaat' }} olarak her sorunu
                                    kavuşturuyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-approch-wrapper section-padding section-bg">
        <div class="container">
            <div class="row mb-30">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-center">
                        <span>Yaklaşımımız</span>
                        <p>Yaklaşımımız</p>
                        {{--                        <h1>Capitalise On Hanging</h1>--}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-approch-card">
                        <div class="card-thumb bg-cover"
                             style="background-image: url({{ asset('assets/front/img/approch1.jpg') }})"></div>
                        <div class="content">
                            <div class="case-cat">
                                <a href="javascript:void();">
                                    <i class="fal fa-drafting-compass"></i>
                                </a>
                            </div>
                            <h3><a href="{{ route('page.about') }}">Vizyonumuz</a></h3>
                            <p>Ensa İnşaat olarak, şehrinizi daha modern, yaşanabilir ve sürdürülebilir bir şehir haline
                                getirmeyi hedefliyoruz. Bölgenin mimari dokusunu koruyarak, teknolojiyi ve yenilikleri
                                kullanarak çağdaş yapılar inşa ediyoruz. Sektördeki liderliğimizi sürdürerek, şehrinizin
                                geleceğine yön veren projelere imza atmayı sürdüreceğiz. Yaratıcı yaklaşımımız ve
                                topluma duyarlılığımız ile şehrinizin gelişimine katkı sağlamak için çalışıyoruz.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-approch-card">
                        <div class="card-thumb bg-cover"
                             style="background-image: url({{ asset('assets/front/img/approch2.jpg') }})"></div>
                        <div class="content">
                            <div class="case-cat">
                                <a href="javascript:void();">
                                    <i class="fal fa-pencil-ruler"></i>
                                </a>
                            </div>
                            <h3><a href="{{ route('page.about') }}">Misyonumuz</a></h3>
                            <p>Şehrinizin kültürel ve coğrafi zenginliklerinden ilham alarak, Ensa İnşaat olarak
                                şehrinize değer katan, estetik ve sağlam yapılar inşa etmek için çalışıyoruz.
                                Müşterilerimize güvenilir ve kaliteli konutlar sunarken, şehrinizin sosyal ve ekonomik
                                gelişimine katkıda bulunmayı amaçlıyoruz. Topluma karşı sorumluluklarımızı yerine
                                getirirken, çevreye duyarlı bir anlayışla hareket ediyoruz.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-approch-card">
                        <div class="card-thumb bg-cover" style="background-image: url({{ asset('assets/front/img/approch3.jpg') }})"></div>
                        <div class="content">
                            <div class="case-cat">
                                <a href="javascript:void();">
                                    <i class="far fa-hard-hat"></i>
                                </a>
                            </div>
                            <h3><a href="{{ route('page.about') }}">Yaklaşımımız</a></h3>
                            <p>Ensa İnşaat olarak, her projeye özgü bir yaklaşım benimsiyoruz. Müşterilerimizin
                                beklentilerini anlamak ve onların ihtiyaçlarına en iyi şekilde cevap vermek için özenle
                                çalışıyoruz. Her aşamada şeffaf bir iletişim ve işbirliğiyle hareket ederek, müşteri
                                memnuniyetini en üst düzeyde tutmayı amaçlıyoruz.

                                Teknolojik gelişmeleri yakından takip ediyor ve uygulamaya koyarak, inşaat süreçlerimizi
                                daha verimli ve kaliteli hale getiriyoruz. Çevreye duyarlı bir yaklaşımı benimseyerek,
                                sürdürülebilir malzemeler ve enerji verimli çözümler kullanarak çevresel etkimizi
                                minimize etmeyi hedefliyoruz.

                                İnşa ettiğimiz her yapıda güvenlik ve kaliteyi ön planda tutuyoruz. Uzman kadromuz ve
                                tecrübemizle projelerimizi titizlikle yönetiyor, en yüksek standartlara uygun olarak
                                tamamlıyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skill-wrapper section-padding">
        <div class="container">
            <div class="skill-bg pt-100 pb-100 bg-center bg-cover bg-overlay text-white"
                 style="background-image: url({{ asset('assets/front/img/skill_img.jpg') }})">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-12 text-center d-none d-xl-block">
                        <img src="{{ asset('assets/front/img/skill_img.jpg') }}" class="mlm-100" alt="">
                    </div>
                    <div class="col-xl-6 offset-1 offset-xl-0 col-10 pr-lg-5">
                        <div class="block-contents">
                            <span>Our Skill set</span>
                            <h1>Profesyonel ve Yartıcı Ekibimiz</h1>
                            <h4>Ensa İnşaat, uzman ekibiyle kalite ve güvenilirlik sağlar. Müşteri memnuniyeti önceliğimizdir. İnovasyon ve tutkuyla çalışırız. Profesyonel yaklaşımımızla sektörde öne çıkarız.</h4>
                        </div>

                        <div class="single-skill-bar">
                            <h4>Yapı</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%">
                                    100%
                                </div>
                            </div>
                        </div>
                        <div class="single-skill-bar">
                            <h4>Faktoring</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%">
                                    90%
                                </div>
                            </div>
                        </div>
                        <div class="single-skill-bar">
                            <h4>Endüstri</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:85%">
                                    85%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($clients->count() > 0)
        <section class="our-sponsors-wrapper section-padding section-bg">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-12 col-lg-12">
                        <div class="section-title text-center">
                            <span>Marka</span>
                            <p>Markalarımız</p>
                            <h1>Çalışma Markalarımız</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-grid">
                            @foreach($clients as $client)
                                <div class="single-brand-logo">
                                    <a href="{{ $client?->url ?? '#' }}" @if(!is_null($client?->url)) target="_blank" @endif>
                                        <img src="{{ asset($client?->image) }}" alt="{{ $client?->name ?? '-' }}" title="{{ $client?->name ?? '-' }}" data-toggle="tooltip">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
{{--    <section class="timeline-wrapper section-padding">
        <div class="container">
            <div class="row mb-30">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-center">
                        <span>Roadmap</span>
                        <p>goal</p>
                        <h1>Company Roadmap</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-flud">
            <div class="timeline-carousel-wrapper owl-carousel">
                <div class="single-time-line">
                    <h2>2000</h2>
                    <div class="icon">
                        <i class="fal fa-award"></i>
                    </div>
                    <div class="content">
                        <h4>Starting Our Journey</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
                <div class="single-time-line">
                    <h2>2005</h2>
                    <div class="icon">
                        <i class="fal fa-trophy-alt"></i>
                    </div>
                    <div class="content">
                        <h4>We win best IT Startup Award</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
                <div class="single-time-line">
                    <h2>2007</h2>
                    <div class="icon">
                        <i class="fal fa-toolbox"></i>
                    </div>
                    <div class="content">
                        <h4>Starting Plugin Business Journey</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
                <div class="single-time-line">
                    <h2>2008</h2>
                    <div class="icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <div class="content">
                        <h4>Started WordPress Solution Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
                <div class="single-time-line">
                    <h2>2010</h2>
                    <div class="icon">
                        <i class="fal fa-trophy"></i>
                    </div>
                    <div class="content">
                        <h4>Best IT Compnay of 2010</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
                <div class="single-time-line">
                    <h2>2015</h2>
                    <div class="icon">
                        <i class="fal fa-building"></i>
                    </div>
                    <div class="content">
                        <h4>Starting Our Conystruction Journey</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
                <div class="single-time-line">
                    <h2>2020</h2>
                    <div class="icon">
                        <i class="fal fa-sack-dollar"></i>
                    </div>
                    <div class="content">
                        <h4>Our industry business started</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
            </div>

            <svg class="svg-line">
                <path fill-rule="evenodd" stroke="rgb(223, 223, 223)" stroke-width="2px" stroke-dasharray="32, 32"
                      stroke-linecap="round" stroke-linejoin="round" fill="none"
                      d="M2.000,2.000 C2.000,2.000 154.088,121.789 498.000,158.000 C841.912,194.211 878.088,39.793 1158.000,132.000 C1437.912,224.207 1574.088,59.779 1840.000,86.000 "/>
            </svg>
        </div>--}}
    </section>--}}
@endsection
