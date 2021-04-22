<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.header')
<body>
    <header class="header-area">
        @include('frontend.layouts.navbar')
        <div id="home" class="header-hero d-lg-flex align-items-center"
            style="background-image: url({{ asset('frontend/assets/images/header-hero.jpg') }}); height: 400px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Daftar Sebagai</b>
                                <span>Merchant</span></h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </header>
    <section class="registration-area mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">FORMULIR PENDAFTARAN Cater Merchant</h6>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="service-wrapper mt-50 pt-20 pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-12 col-md-8">
                        <div class="">
                            <div class="col-md-6">
                                <div class="registration-form mb-20">
                                    <label>Nama Catering (Merk/Brand)</label>
                                    <input type="text" name="name">
                                    <p>Isi dengan nama usaha catering anda, Contoh: Warung Mas Koko</p>
                                </div>
                                <div class="registration-form mb-20">
                                    <label>Lokasi Outlet</label>
                                    <input type="text" name="name">
                                    <p>Isikan dengan lokasi outlet anda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </section>
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')
</body>
</html>