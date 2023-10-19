
<footer class="footer-1 footer-wrap">
    <div class="footer-widgets dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-footer-wid">
                        <div class="wid-title">
                            <h4>Hakkımızda</h4>
                        </div>
                        <p>{{ !is_null($_setting->footer_text) ? $_setting->footer_text : '' }}</p>

                            @include('front.layouts.social-media')

                    </div>
                </div> <!-- /.col-lg-3 - single-footer-wid -->
                @if($_realEstates->count() > 0)
                    <div class="col-md-6 col-xl-3 col-12">
                        <div class="single-footer-wid recent_post_widget">
                            <div class="wid-title">
                                <h4>Emlak Vitrini</h4>
                            </div>
                            @foreach($_realEstates as $_realEstate)
                                <div class="recent-post-list">
                                    <div class="single-recent-post">
                                        <div class="thumb bg-cover" style="background-image: url({{ asset($_realEstate->image) }});"></div>
                                        <div class="post-data">
                                            <span>  {{ number_format($_realEstate->realEstateAttribute->price, 0, ',', '.') }} ₺</span>
                                            <h5> <a href="{{ $_realEstate->slug }}"></a>{{ $_realEstate->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                @endif
                @if($_newsletters->count() > 0)

                    <div class="col-md-6 col-xl-3 col-12">
                        <div class="single-footer-wid recent_post_widget">
                            <div class="wid-title">
                                <h4>Basında Biz</h4>
                            </div>
                            <div class="recent-post-list">
                                @foreach($_newsletters as $_newsletter)
                                <div class="single-recent-post">
                                    <div class="thumb bg-cover" style="background-image: url({{ asset($_newsletter->image) }})"></div>
                                    <div class="post-data">
                                        {{--<span><i class="fal fa-calrightar-alt"></i>28th July 2022</span>--}}
                                        <h5> <a href="{{ $_newsletter->slug }}">{{ $_newsletter->title }}</a></h5>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                @endif
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-footer-wid ml-15 site_info_widget">
                        <div class="wid-title">
                            <h4>İletişime Geçin</h4>
                        </div>
                        <div class="contact-us">
                            @if(!is_null($_setting->phone))
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>Telefon</span>
                                        <p>{{ $_setting->phone }}</p>
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
                                        <p>{{$_setting->email}}</p>
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
                </div> <!-- /.col-lg-3 - single-footer-wid -->
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12 text-center text-lg-left">
                    <div class="copyright-info">
                        <p>Design By <a href="tel:+905443380633" target="_blank">Tuğran Demirel</a> - 2023</p>
                    </div>
                </div>
                @if(!is_null($_setting->logo))
                <div class="col-lg-4 col-12 text-center">
                    <div class="footer-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset($_setting->logo) }}" alt="{{ $_setting->title }}"></a>
                    </div>
                </div>
                @endif
                <div class="col-lg-4 d-none d-lg-block col-12">
                    <div class="scroll-up-btn text-md-right text-center">
                        <a href="#top"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front/js/imageload.min.js') }}"></script>
<script src="{{ asset('assets/front/js/scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front/js/metismenu.js') }}"></script>
<script src="{{ asset('assets/front/js/timeline.min.js') }}"></script>
<script src="{{ asset('assets/front/js/ajax-mail.js') }}"></script>
<script src="{{ asset('assets/front/js/active.js') }}"></script>
@section('js')
