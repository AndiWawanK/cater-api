<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.header')
<body>
    {{-- <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        @include('frontend.layouts.navbar')

        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center"
            style="background-image: url({{ asset('frontend/assets/images/header-hero.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Tingkatkan</b>
                                <span>Usaha</span> Catering anda dengan bergabung di <b>Cater.</b></h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Banyak fitur yang menunggu anda untuk meningkatkan dan memudahkan penjualan anda di aplikasi cater.
                            </p>
                            <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                <input type="text" placeholder="Masukkan email kamu">
                                <button class="main-btn">Request demo</button>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s"
                data-wow-delay="1.1s">
                <div class="image">
                    <img src="{{ asset('frontend/assets/images/hero-image.png') }}" alt="Hero Image" style="width: 90%">
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        {{-- <h6 class="welcome">WELCOME</h6> --}}
                        <h3 class="title"><span>Dengan tim yang berpengalaman </span> Kami siap untuk menjaga tujuan bisnis anda</h3>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="about-image d-flex justify-content-center mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('frontend/assets/images/about.png') }}" alt="about" style="width: 80%">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-content pt-45">
                        <p class="text wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="0.4s">Duis et metus et massa
                            tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. ipsum ante
                            pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit
                            interdum.</p>

                        <div class="about-counter pt-60">
                            <div class="row d-flex justify-content-around bd-highlight">
                                <div class="p-2 bd-highlight">
                                    <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">350</span></span>
                                            <p class="text">Customers</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.6s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">120</span></span>
                                            <p class="text">Merchants</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.9s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">870</span></span>
                                            <p class="text">Total Sale</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- about counter -->
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== OUR SERVICE PART START ======-->

    <section id="services" class="our-services-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-9">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Fitur Cater</h6>
                        <h4 class="title">Fitur yang kami berikan <span>untuk Mengguncang Bisnis Anda.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-services-tab pt-30">
                        <ul class="nav justify-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s"
                            id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="business-tab" data-toggle="tab" href="#business" role="tab"
                                    aria-controls="business" aria-selected="true">
                                    <i class="lni-briefcase"></i> <span>Business <br> Consultancy</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="digital-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="digital"
                                    aria-selected="false">
                                    <i class="lni-bullhorn"></i> <span>Digital <br> Marketing</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market"
                                    aria-selected="false">
                                    <i class="lni-stats-up"></i> <span>Market <br> Analysis</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="business" role="tabpanel"
                                aria-labelledby="business-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{ asset('frontend/assets/images/our-service-1.png') }}" style="width: 80%"
                                                alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Business Consultancy <span>for Your Business
                                                    Growth.</span></h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                nec est arcu. Maecenas semper tortor. <br> <br> In elementum in risus
                                                sed commodo. Phasellus nisi ligula, luctus at tempor vitae, placerat at
                                                ante. Cras sed consequat justo. Curabitur laoreet eu est vel convallis.
                                            </p>

                                            <div class="our-services-progress d-flex align-items-center mt-55">
                                                <div class="circle" id="circles-1"></div>
                                                <div class="progress-content">
                                                    <h4 class="progress-title">Consultancy<br> Agency Skill.</h4>
                                                </div>
                                            </div>
                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{ asset('frontend/assets/images/our-service-1.png') }}" style="width: 80%"
                                                alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Digital Marketing <span>for Your Business
                                                    Growth.</span></h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                nec est arcu. Maecenas semper tortor. <br> <br> In elementum in risus
                                                sed commodo. Phasellus nisi ligula, luctus at tempor vitae, placerat at
                                                ante. Cras sed consequat justo. Curabitur laoreet eu est vel convallis.
                                            </p>

                                            <div class="our-services-progress d-flex align-items-center mt-55">
                                                <div class="circle" id="circles-2"></div>
                                                <div class="progress-content">
                                                    <h4 class="progress-title">Digital Marketing <br> Skill.</h4>
                                                </div>
                                            </div>
                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{ asset('frontend/assets/images/our-service-1.png') }}" style="width: 80%"
                                                alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Market Analysis <span>for Your Business
                                                    Growth.</span></h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                nec est arcu. Maecenas semper tortor. <br> <br> In elementum in risus
                                                sed commodo. Phasellus nisi ligula, luctus at tempor vitae, placerat at
                                                ante. Cras sed consequat justo. Curabitur laoreet eu est vel convallis.
                                            </p>

                                            <div class="our-services-progress d-flex align-items-center mt-55">
                                                <div class="circle" id="circles-3"></div>
                                                <div class="progress-content">
                                                    <h4 class="progress-title">Market Analysis <br> Agency Skill.</h4>
                                                </div>
                                            </div>
                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- our services tab -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== OUR SERVICE PART ENDS ======-->

    <!--====== SERVICE PART START ======-->

    <section id="service" class="service-area pt-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Mengapa kami</h6>
                        <h4 class="title">Alasan memilih cater <span> sebagai mitra bisnis Anda</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="service-wrapper mt-60 pt-50 pb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex">
                            <div class="service-icon">
                                <img src="{{ asset('frontend/assets/images/service-1.png') }}" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Highly Experienced</h4>
                                <p class="text">Lorem Ipsum is simply dummy tex of the printing and typesetting
                                    industry. Lorem Ipsum .</p>
                            </div>
                            <div class="shape shape-1">
                                <img src="{{ asset('frontend/assets/images/shape/shape-1.svg') }}" alt="shape">
                            </div>
                            <div class="shape shape-2">
                                <img src="{{ asset('frontend/assets/images/shape/shape-2.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service service-border d-flex">
                            <div class="service-icon">
                                <img src="{{ asset('frontend/assets/images/service-2.png') }}" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Bunch of Services</h4>
                                <p class="text">Lorem Ipsum is simply dummy tex of the printing and typesetting
                                    industry. Lorem Ipsum .</p>
                            </div>
                            <div class="shape shape-3">
                                <img src="{{ asset('frontend/assets/images/shape/shape-3.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex">
                            <div class="service-icon">
                                <img src="{{ asset('frontend/assets/images/service-3.png') }}" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Quality Support</h4>
                                <p class="text">Lorem Ipsum is simply dummy tex of the printing and typesetting
                                    industry. Lorem Ipsum .</p>
                            </div>
                            <div class="shape shape-4">
                                <img src="{{ asset('frontend/assets/images/shape/shape-4.svg') }}" alt="shape">
                            </div>
                            <div class="shape shape-5">
                                <img src="{{ asset('frontend/assets/images/shape/shape-5.svg') }}" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                </div> <!-- row -->
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="service-btn text-center pt-25 pb-15">
                            <a class="main-btn main-btn-2" href="#">All Services</a>
                        </div> <!-- service btn -->
                    </div>
                </div> <!-- row --> --}}
            </div> <!-- service wrapper -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICE PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    {{-- <section data-scroll-index="0" id="pricing" class="pricing-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-9">
                    <div class="section-title text-center pb-20 wow fadeInUpBig" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <h6 class="sub-title">Pricing Plans</h6>
                        <h4 class="title">Providing Best Pricing <span>For Your Business.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-color-1 mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.3s">
                        <div class="pricing-price">
                            <span class="price"><b>50</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">20% Off</span>
                            <h4 class="title">Basic</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-active pricing-color-2 mt-30 wow fadeIn"
                        data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="pricing-price">
                            <span class="price"><b>69</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">Special</span>
                            <h4 class="title">Standard</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-color-3 mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.9s">
                        <div class="pricing-price">
                            <span class="price"><b>99</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">New</span>
                            <h4 class="title">Premium</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== PRICING PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title">
                            <h6 class="sub-title">Apa kata mereka</h6>
                            <h4 class="title">Apa Kata Mereka, Tentang Cater</h4>
                        </div> <!-- section title -->
                        <ul class="testimonial-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="text">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie
                            blandit interdum. <br> <br> ipsum ante pellentesque nisl, eget mollis turpis quam nec eros.
                            ultricies, orci molestie blandit interdum.</p>
                    </div> <!-- testimonial left content -->
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.6s">
                        <div class="quota">
                            <i class="lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu
                                        volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="{{ asset('frontend/assets/images/author-1.jpg') }}"
                                                alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">John Doe</h5>
                                            <span class="sub-title">CEO, Alphabet</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu
                                        volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="{{ asset('frontend/assets/images/author-2.jpg') }}"
                                                alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">John Doe</h5>
                                            <span class="sub-title">CEO, Alphabet</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu
                                        volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="{{ asset('frontend/assets/images/author-3.jpg') }}"
                                                alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">John Doe</h5>
                                            <span class="sub-title">CEO, Alphabet</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial content wrapper -->
                    </div> <!-- testimonial right content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== BRAND PART START ======-->

    {{-- <div id="brand" class="brand-area pt-120 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.3s">
                        <h6 class="sub-title">Telah digunakan oleh beberapa mitra</h6>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-wrapper pt-70 clearfix">
                        <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <img src="{{ asset('frontend/assets/images/brand-1.png') }}" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="{{ asset('frontend/assets/images/brand-2.png') }}" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="{{ asset('frontend/assets/images/brand-3.png') }}" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('frontend/assets/images/brand-4.png') }}" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s"
                            data-wow-delay="0.6s">
                            <img src="{{ asset('frontend/assets/images/brand-5.png') }}" alt="brand">
                        </div> <!-- single brand -->
                    </div> <!-- brand wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> --}}

    <!--====== BRAND PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.3s">
                        <h6 class="sub-title">Ingin Tanya-Tanya</h6>
                        <h4 class="title">Hubungi </h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row d-flex justify-content-around bd-highlight">
                    <div class="p-2 bd-highlight">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="contact-info-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Jl.Gang Jembatan merah no 96B <br> Sleman, Yogyakarta, 55281.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="contact-info-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@cater.com</p>
                                <p class="text">support@cater.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <i class="lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+62 896 7446 2657</p>
                                <p class="text">+62 999 5555 444</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"><i class="lni-envelope"></i> Kontak <span>Kami.</span></h4>

                        <form id="contact-form" action="{{ asset('frontend/assets/contact.php') }}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Name</label>
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Email</label>
                                        <input type="email" name="email" placeholder="Email">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <label>Your Message</label>
                                        <textarea name="message" placeholder="Enter your message..."></textarea>
                                    </div> <!-- contact-form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <button type="submit" class="main-btn">Send Now</button>
                                    </div> <!-- contact-form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row --> --}}
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')
</body>

</html>
