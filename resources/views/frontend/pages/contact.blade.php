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
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Kontak</b>
                                <span>Kami</span></h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </header>
    <section id="contact" class="contact-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-70  wow fadeInUpBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <form id="contact-form" action="/" method="post">
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
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')
</body>
</html>