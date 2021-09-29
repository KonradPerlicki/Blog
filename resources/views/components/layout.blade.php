<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $title }}</title>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet">
        <!-- Plugins CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">
        <!-- Theme CSS -->
        <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>
    <!-- ======================= Header START -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-item" src="{{ asset('assets/images/logo.jpg') }}" alt="logo" style="width:100px">			
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                <span class="navbar-toggler-icon"></span>
            </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">
                        
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="#">Home</a>
                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <li> 
                                    <a class="dropdown-item" href="docs/index.html" target="_blank">
                                        <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                    </a> 
                                </li>
                            </ul>
                        </li>

                        <!-- Nav item 3 Post -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>
                            <ul class="dropdown-menu" aria-labelledby="postMenu">
                                <!-- dropdown submenu -->
                                <li class="dropdown-submenu dropend"> 
                                    <a class="dropdown-item dropdown-toggle" href="#">Post grid</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="post-grid.html">Post grid</a> </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="post-list.html">Post all</a> </li>
                                <li class="dropdown-divider"></li>
                                <li> <a class="dropdown-item" href="post-single.html">Post single magazine</a> </li>
                            </ul>
                        </li>

                        <!-- Nav item 4 Mega menu -->
                        <li class="nav-item dropdown dropdown-fullwidth">
                            <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
                            <div class="dropdown-menu" aria-labelledby="megaMenu">
                                <div class="container">
                                    <div class="row g-4 p-3 flex-fill">
                                        <!-- Card item START -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card bg-transparent">
                                                <!-- Card img -->
                                                <img class="card-img rounded" src="assets/images/blog/16by9/small/01.jpg" alt="Card image">
                                                <div class="card-body px-0 pt-3">
                                                    <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h6>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                        <li class="nav-item">
                                                            <a href="#" class="text-reset btn-link">Joan Wallace</a>
                                                        </li>
                                                        <li class="nav-item">Feb 18, 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                        <!-- Card item START -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card bg-transparent">
                                                <!-- Card img -->
                                                <img class="card-img rounded" src="assets/images/blog/16by9/small/02.jpg" alt="Card image">
                                                <div class="card-body px-0 pt-3">
                                                    <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h6>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                        <li class="nav-item">
                                                            <a href="#" class="text-reset btn-link">Lori Stevens</a>
                                                        </li>
                                                        <li class="nav-item">Jun 03, 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                        <!-- Card item START -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card bg-transparent">
                                                <!-- Card img -->
                                                <img class="card-img rounded" src="assets/images/blog/16by9/small/03.jpg" alt="Card image">
                                                <div class="card-body px-0 pt-3">
                                                    <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h6>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                        <li class="nav-item">
                                                            <a href="#" class="text-reset btn-link">Judy Nguyen</a>
                                                        </li>
                                                        <li class="nav-item">Sep 07, 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                        <!-- Card item START -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
                                                <h3>Premium Membership</h3>
                                                <p>Become a Member Today!</p>
                                                <a href="#" class="btn btn-warning">View pricing plans</a>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                    </div> <!-- Row END -->
                                    <!-- Trending tags -->
                                    <div class="row px-3">
                                        <div class="col-12">
                                            <ul class="list-inline mt-3">
                                                <li class="list-inline-item">Trending tags:</li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
                                                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- Row END -->
                                </div>
                            </div>
                        </li>
                        <!-- Nav item 5 link-->
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="user" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $user->username }}</a>
                                <ul class="dropdown-menu" aria-labelledby="user">
                                    <li> <a class="dropdown-item" href="{{ route('user.edit', $user->username) }}">Edit profile</a> </li>
                                    <li> <a class="dropdown-item" href="post-list.html">Post all</a> </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <form action="{{ route('user.destroy',$user->username) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger">Delete account</button> 
                                    </li>    
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Nav right START -->
                <div class="nav ms-sm-3 flex-nowrap align-items-center">
                    <!-- Dark mode switch -->
                    <div class="nav-item">
                        <div class="modeswitch" id="darkModeSwitch">
                            <div class="switch"></div>
                        </div>
                    </div>
                    <!-- Nav Button -->
                    @guest
                        <div class="nav-item d-none d-md-block">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-danger-soft mb-0 mx-2">Sign In!</a>
                        </div>
                        <div class="nav-item d-none d-md-block">
                            <a href="{{ route('register') }}" class="btn btn-sm btn-danger mb-0 mx-2">Sign Up!</a>
                        </div>
                    @else
                        <div class="nav-item d-none d-md-block">
                            <a href="#" class="btn btn-sm btn-danger-soft mb-0 mx-2">Subscribe!</a>
                        </div>
                        <div class="nav-item d-none d-md-block">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger mb-0 mx-2">Logout</button>
                            </form>
                        </div>
                    @endguest
                    <!-- Nav Search -->
                    <div class="nav-item dropdown nav-search dropdown-toggle-icon-none">
                        <a class="nav-link pe-0 dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-search fs-4"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
                        <form class="input-group">
                            <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success m-0" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
        @if (session()->has('message'))
            <div class='alert alert-success text-center'>
                {{ session()->get('message') }}
            </div>
        @endif

    <!-- ======================= Header END -->
    <!-- **************** MAIN CONTENT START **************** -->
    {{ $slot }}
    <!-- **************** MAIN CONTENT END **************** -->
    <!-- ======================= Footer START -->
    <footer class="pb-0">
        <div class="container">
            <hr>
            <!-- Widgets START -->
            <div class="row pt-5">
                <!-- Footer Widget -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <img src="{{ asset('assets/images/logo.jpg') }}" alt="logo">			
                    <p class="mt-3">The next-generation blog, news, and magazine theme for you to start sharing your stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
                </div>
                <!-- Footer Widget -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <h5 class="mb-4">Navigation</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link pt-0" href="#">Features</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Style Guide</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Get Theme</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link pt-0" href="#">News</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Career <span class="badge bg-danger ms-2">2 Job</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Startups</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Gadgets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <h5 class="mb-4">Browse by Tag</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Marketing</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
                    </ul>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-2 mb-4">
                    <h5 class="mb-4">Our Social handles</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-facebook-square fa-fw me-2 text-facebook"></i>Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter-square fa-fw me-2 text-twitter"></i>Twitter</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin fa-fw me-2 text-linkedin"></i>Linkedin</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube-square fa-fw me-2 text-youtube"></i>YouTube</a></li>
                    </ul>
                </div>
            </div>
            <!-- Widgets END -->
        </div>
    </footer>
    <!-- ======================= Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

    	<!-- ======================= JS libraries, plugins and custom scripts -->
		<!-- Bootstrap JS -->
		<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
		<!-- Vendors -->
		<script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
		<script src="{{ asset('assets/vendor/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/sticky-js/sticky.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
		<script src="{{ asset('assets/vendor/jarallax/jarallax-video.min.js') }}"></script>
		<!-- Template Functions -->
		<script src="{{ asset('assets/js/functions.js') }}"></script>
    </body>
</html>

