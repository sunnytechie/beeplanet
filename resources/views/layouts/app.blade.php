<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bee Smart Planet.</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/bee/beelogo.png') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- CLoudflare icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Theme Styles --}}
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    {{-- Custom css --}}
    <style>
        @media screen and (max-width: 426px) {
            .stop-d-flex {
                    display: inline-block !important;
                    text-align: center;
                    width: 100%;
                }
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/customstyle.css') }}" rel="stylesheet">
</head>
<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <div class="body-overlay"></div>
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>        
        </div>
        <!-- end preloader -->
        
        @include('sniffets.nav')

        <section>
            @yield('content')
        </section>

        {{-- WhatsApp --}}
        <div class="elfsight-app-e109bde9-2362-45a7-bd91-8cd86cff1f6d"></div>

        @include('sniffets.footer')

        @include('sniffets.popup')
    </div>

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>

    <!-- Custom script for this template -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    {{-- WhatsApp --}}
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
</body>
</html>
