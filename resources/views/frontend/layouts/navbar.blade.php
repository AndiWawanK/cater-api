<div class="navbar-area headroom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/assets/images/logo-text.png') }}" alt="Logo" style="width: 120px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav m-auto">
                            <li class="nav-item active">
                                <a href="#home">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a href="#service">Fitur</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/contact') }}">Kontak</a>
                            </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                    
                    <div class="navbar-btn d-none d-sm-inline-block">
                        <a class="main-btn" href="{{ url('/registration-merchant') }}">Daftar Gratis</a>
                    </div>
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- navbar area -->