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
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Daftar
                                    Sebagai</b>
                                <span>Merchant</span>
                            </h1>
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
                        <h6 style="color: red; margin-top: 20px">{{Session::get('message')}}</h6>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="service-wrapper mt-50 pt-20 pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-12 col-md-8">
                        <form action="/register" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row pl-20 pr-20">
                                <div class="col-md-6">
                                    <h6 class="sub-title pb-15"><span style="color: red">*</span> Informasi akun</h6>
                                    <div class="registration-form mb-20">
                                        <label>Nama Lengkap (Nama pemilik usaha)</label>
                                        <input type="text" name="full_name">
                                    </div>
                                    <div class="registration-form mb-20">
                                        <label>No Telepon/WA</label>
                                        <input type="text" name="phone">
                                    </div>
                                    <div class="registration-form mb-20">
                                        <label>Foto</label>
                                        <input type="file" name="avatar">
                                        <p>Ukuran max: 1MB</p>
                                    </div>
                                    <div class="registration-form mb-20">
                                        <label>Alamat Lengkap</label>
                                        <textarea name="address1" id="" cols="10" rows="5"></textarea>
                                    </div>
                                    <div class="registration-form mb-20">
                                        <label>Email</label>
                                        <input type="text" name="email">
                                    </div>
                                    <div class="registration-form mb-20">
                                        <label>Password</label>
                                        <input type="password" name="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="sub-title pb-15"><span style="color: red">*</span> Informasi usaha</h6>
                                    <div class="registration-form mb-20">
                                        <label>Nama Catering (Merk/Brand)</label>
                                        <input type="text" name="merchant_name">
                                        <p>Isi dengan nama usaha catering anda, Contoh: Warung Mas Koko</p>
                                    </div>
                                    <div class="registration-form mb-20">
                                        <label>Lokasi Outlet</label>
                                        <select name="address">
                                            <option>Yogyakarta</option>
                                        </select>
                                        <p>Isikan dengan lokasi outlet anda</p>
                                    </div>
                                    <div class="registration-form mb-20">
                                        <label>Deskripsi Usaha</label>
                                        <textarea name="description" id="" cols="10" rows="5"></textarea>
                                    </div>
                                    <div class="registration-form mb-20">
                                        <label>Banner usaha</label>
                                        <input type="file" name="banner">
                                        <p>Ukuran max: 1MB</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="second-btn">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </section>
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')
</body>

</html>
