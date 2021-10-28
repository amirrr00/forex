<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="index.html">
                        <h1>Best<span>Analysis</span></h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Opening Hour</h3>
                                <p>Mon - Fri, 8:00 - 9:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Call Us</h3>
                                <p>+012 345 6789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            {{--برای باز و بسته کردن نو بار از قسمت پایین استفاده میشه--}}
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Charts Analysis</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">10 sahme pishnahadi</a>
                            <a href="single.html" class="dropdown-item">10 ramz arze pishnahadi</a>
                            <a href="team.html" class="dropdown-item">10 charte bazare mali</a>
                            <a href="booking.html" class="dropdown-item">saham man</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Signals</a>
                        <div class="dropdown-menu">
                            <a href="{{route('forex_show')}}" class="dropdown-item">Forex</a>
                            <a href="{{route('crypto_show')}}" class="dropdown-item">Crypto</a>
                            <a href="team.html" class="dropdown-item">bazare mali</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contract</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">hoghooghi</a>
                            <a href="single.html" class="dropdown-item">haqiqi</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Education</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">webinar</a>
                            <a href="single.html" class="dropdown-item">package</a>
                            <a href="single.html" class="dropdown-item">darkhast</a>
                        </div>
                    </div>

                    <a href="index.html" class="nav-item nav-link active">Register</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="#">Search</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->