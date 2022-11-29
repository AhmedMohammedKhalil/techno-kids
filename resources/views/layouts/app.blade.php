<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <title>{{ config('app.name', 'Techno Kids') }}</title>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}" />
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}" />
    <!-- Imagelightbox CSS -->
    <link rel="stylesheet" href="{{ asset('css/imagelightbox.min.css') }}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />

    <style>
        .logo img,
        .navbar-brand img {
            max-width: 100px !important
        }
    </style>

    @livewireStyles
    @stack('css')
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader">
            <div class="wrapper">
                <div class="circle circle-1"></div>
                <div class="circle circle-1a"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">


        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                        <ul class="navbar-nav">
                            <li class="nav-item ms-5">
                                @include('includes.auth')
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link"> الرئيسية </a>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link"> الفيديوهات </a>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link"> الأختبارات </a>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link"> من نحن </a>
                            </li>

                        </ul>

                        <a class="navbar-brand d-none d-xl-block" href="{{ route('home') }}">
                            <img src="{{ asset('img/logo.png') }}" class="black-logo" alt="image" />
                        </a>
                    </div>
                </nav>
            </div>
        </div>






        <div class="main-responsive-nav">
            <div class="container">


                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/logo.png') }}" class="black-logo " alt="image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    @yield('content')

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    &copy;
                    <a href="{{ route('home') }}"> Techno kids </a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="bx bx-up-arrow-alt"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Slim JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Imagelightbox JS -->
    <script src="{{ asset('js/imagelightbox.min.js') }}"></script>
    <!-- Odometer JS -->
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <!-- Jquery Appear JS -->
    <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    @livewireScripts
    @stack('js')
</body>

</html>
