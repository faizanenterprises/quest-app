<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tags  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="quest - Immigration & Visa Solutions">
    <meta name="author" content="">

    {{-- Favicon and touch Icons --}}
    <link href="{{ asset('questapp/assets/img/faviconquest.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('questapp/assets/img/apple-touch-icon.html') }}" rel="apple-touch-icon">
    <link href="{{ asset('questapp/assets/img/apple-touch-icon-72x72.html') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('questapp/assets/img/apple-touch-icon-114x114.html') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('questapp/assets/img/apple-touch-icon-144x144.html') }}" rel="apple-touch-icon" sizes="144x144">

    {{-- Page Title --}}
    <title>Quest - Immigration & Visa Solutions</title>

    {{-- Social Media Meta Tags (Replace content with your actual information) --}}
    <meta name="keywords" content="Visa,Immigration,Canada,Student Visa,Family Sponsorship,Canada Business Immigration,Study at Canada Universities,Quest" />
    <meta property="og:title" content="QUEST Consultancy" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Best Canada Immigration Consultancy" />
    <meta property="og:image" content="{{ asset('questapp/assets/img/faviconquest.png') }}" />
    <meta property="og:url" content="http://20." />

    {{-- Twitter Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="QUEST Consultancy">
    <meta name="twitter:description" content="Best Canada Immigration Consultancy">
    <meta name="twitter:image" content="{{ asset('questapp/assets/img/faviconquest.png') }}">

    {{-- Styles Include --}}
    <link rel="stylesheet" href="{{ asset('questapp/assets/fonts/bootstrap-icons-1.1/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/plugins/wow/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/plugins/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/plugins/odometer/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/plugins/fancybox/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/plugins/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/plugins/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('questapp/assets/css/responsive.css') }}">
    <style>
        .alert-canada-red {
            background-color: #FF0000;
            color: white; /* Adjust text color as needed for readability */
        }
    </style>
</head>
<body>
    {{-- Preloader --}}
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner"></div>
            <div class="loading-text">
                <span data-preloader-text="Q" class="characters">Q</span>
                <span data-preloader-text="U" class="characters">U</span>
                <span data-preloader-text="E" class="characters">E</span>
                <span data-preloader-text="S" class="characters">S</span>
                <span data-preloader-text="T" class="characters">T</span>
                <span data-preloader-text="I" class="characters">I</span>
                <span data-preloader-text="N" class="characters">N</span>
                <span data-preloader-text="C" class="characters">C</span>
            </div>
        </div>
    </div>

    {{-- Main Header --}}
    <header class="header">
        {{-- Top Bar --}}
        <div class="header-top">
            <div class="container">
                <div class="d-none d-xl-flex justify-content-between align-items-center flex-wrap">
                    {{-- Left Box --}}
                    <div class="left-box d-flex align-items-center">
                        {{-- Social Box --}}
                        <div class="social-box">
                            <ul>
                                <li><a href="https://www.facebook.com/" class="bi bi-facebook"></a></li>
                                <li><a href="https://www.instagram.com/" class="bi bi-instagram"></a></li>
                                <li><a href="https://www.twitter.com/" class="bi bi-twitter-x"></a></li>
                                <li><a href="https://www.linkedin.com/" class="bi bi-linkedin"></a></li>
                                <li><a href="https://www.behance.com/" class="bi bi-behance"></a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- Right Box --}}
                    <div class="right-box d-flex align-items-center">
                        <ul class="info-list">
                            <li><a href="mailto:quest@gmail.com"><span class="icon bi bi-envelope-fill"></span>quest@gmail.com</a></li>
                            <li><a href="#"><span class="icon bi bi-geo-alt-fill"></span>231 Madison Street, Toronto, Canada</a></li>
                        </ul>
                        {{-- Button Box --}}
                        <div class="button-box">
                            <a href="tel:+176845399" class="btn active clearfix">
                                <span><img src="{{ asset('questapp/assets/img/icon_chat.png') }}" alt="chat icon"></span>
                                <span class="btn-wrap">
                                    <span class="text-first">+1 (306) 351-1900</span>
                                    <span class="text-second">+1 (306) 351-1900</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Lower Bar --}}
        <div class="header-inner">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    {{-- Left Part --}}
                    <div class="header_left_part d-flex align-items-center">
                        <div class="logo">
                            <a href="{{ route('index') }}" class="light_logo"><img src="{{ asset('questapp/assets/img/questlogo.jpg') }}" alt="logo"></a>
                        </div>
                    </div>
                    {{-- Right Part --}}
                    <div class="header_right_part d-flex align-items-center">
                        <div class="mainnav d-none d-xl-block">
                            <ul class="main-menu">
                                <li class="menu-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="menu-item"><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li class="menu-item"><a href="{{ route('visalist') }}">Visa List</a></li>
                                <li class="menu-item"><a href="{{ route('services') }}">Services</a></li>
                                <li class="menu-item"><a href="{{ route('bloglist') }}">Blogs</a></li>
                                <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="header_search">
                            <form class="search_form" action="{{ route('search') }}" method="get">
                                <input type="text" name="q" class="keyword form-control" placeholder="Search..." />
                                <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                        <button class="aside_open">
                            <img src="{{ asset('questapp/assets/img/icon_grid.png') }}" alt="img">
                        </button>
                        <button type="button" class="mr_menu_toggle d-xl-none">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Mobile Menu --}}
        <div class="mr_menu_overlay">
            <div class="mr_menu">
                <div class="mr_menu_header">
                    <div class="mr_logo">
                        <a href="{{ route('index') }}" class="light_logo"><img src="{{ asset('questapp/assets/img/questlogo.jpg') }}" alt="logo"></a>
                    </div>
                    <button type="button" class="close_btn mr_menu_toggle">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="mr_menu_body">
                    <div class="mainnav">
                        <ul class="main-menu">
                            <li class="menu-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="menu-item"><a href="{{ route('aboutus') }}">About Us</a></li>
                            <li class="menu-item"><a href="{{ route('visalist') }}">Visa List</a></li>
                            <li class="menu-item"><a href="{{ route('services') }}">Services</a></li>
                            <li class="menu-item"><a href="{{ route('bloglist') }}">Blogs</a></li>
                            <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mr_menu_footer">
                    <div class="button-box">
                        <a href="tel:+176845399" class="btn active clearfix">
                            <span><img src="{{ asset('questapp/assets/img/icon_chat.png') }}" alt="chat icon"></span>
                            <span class="btn-wrap">
                                <span class="text-first">+1 (306) 351-1900</span>
                                <span class="text-second">+1 (306) 351-1900</span>
                            </span>
                        </a>
                    </div>
                    <ul class="info-list">
                        <li><a href="mailto:quest@gmail.com"><span class="icon bi bi-envelope-fill"></span>quest@gmail.com</a></li>
                        <li><a href="#"><span class="icon bi bi-geo-alt-fill"></span>231 Madison Street, Toronto, Canada</a></li>
                    </ul>
                    <div class="social-box">
                        <ul>
                            <li><a href="https://www.facebook.com/" class="bi bi-facebook"></a></li>
                            <li><a href="https://www.instagram.com/" class="bi bi-instagram"></a></li>
                            <li><a href="https://www.twitter.com/" class="bi bi-twitter-x"></a></li>
                            <li><a href="https://www.linkedin.com/" class="bi bi-linkedin"></a></li>
                            <li><a href="https://www.behance.com/" class="bi bi-behance"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- @yield('content') --}}

    {{-- Scroll to top --}}
    <a href="#" class="scroll-top">
        <span class="icon bi bi-arrow-up"></span>
    </a>

    {{-- JS Libraries --}}
    <script src="{{ asset('questapp/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/wow/wow.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/mixitup/mixitup.min.js') }}"></script>
    <script src="{{ asset('questapp/assets/js/main.js') }}"></script>
    @yield('scripts')

