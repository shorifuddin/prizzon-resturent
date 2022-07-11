<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pizzon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link type="image/x-icon" href="{{asset('frontend')}}/images/fav-icon.png" rel="icon">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/responsive.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142494086-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-142494086-2');
    </script>
</head>

<body>

    <!-- Start preloader -->
    {{-- <div id="preloader">
        <label>Loading</label>
    </div> --}}
    <!-- End preloader -->

    <header id="header">
        <div class="container">
            <div class="row m-0">
                <div class="col-xl-3 col-lg-2 col-md-4 col-3 p-0">
                    <div class="navbar-header">
                        <a class="navbar-brand page-scroll" href="{{ route('/') }}">
			                	<img alt="pizzon" src="{{asset('frontend')}}/images/header-logo.png">
			                </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-10 col-md-8 col-9 p-0 text-right">
                    <div id="menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="level">
                                <a href="{{ route('/') }}" class="page-scroll">Home</a>
                            </li>
                            <li class="level dropdown set">
                                <a href="{{ route('menu') }}" class="page-scroll">Menu</a>
                                <span class="opener plus"></span>
                                <div class="megamenu mobile-sub-menu content megamenu-big">
                                    <div class="megamenu-inner-top">
                                        <ul class="sub-menu-level1">
                                            <li class="level2 menu-list-d">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="row">
                                                        @php
                                                        $menudata = App\Models\Menus::where('menus_status',1)->orderBy('menus_id', 'DESC')->limit(6)->get();
                                                        @endphp
                                                        @foreach ($menudata as $menus)
                                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                                <div class="menu-grid">
                                                                    <a href="#" class="menu-grid-center">
                                                                        <div class="pizza-menu">
                                                                            <img src="{{ asset('upload/website/menus/'.$menus->menus_image) }}" alt="pizza">
                                                                        </div>
                                                                        <div class="pizza-det">
                                                                            <p class="Pizza-name-1">{{ $menus->menus_name }}</p>
                                                                            <span class="pizza-price-1">{{ $menus->menus_price }}</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="level">
                                <a href="{{ route('reservation') }}" class="page-scroll">Reservation</a>
                            </li>
                            <li class="level">
                                <a href="{{ route('about') }}" class="page-scroll">About Us</a>
                            </li>
                            <li class="level">
                                <a href="{{ route('contact') }}" class="page-scroll">Contact</a>
                            </li>

                        </ul>
                    </div>
                    <div class=" header-right-link">
                        <ul>
                            <li class="call-icon">
                                <a href="#">
			                		<span class="icon"></span>
			                		<div class="link-text">+91 123 456 789</div>
			                	</a>
                            <li class="side-toggle">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span></span></button>
                            </li>

                        <li class="order-online">
                            <a href="{{ route('menu') }}" class="btn btn-green">New Food</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

 <!-- WEBSITE CONTENT -->
    @yield('websitecontent')
 <!-- WEBSITE CONTENT -->

    <div class="top-scrolling">
        <a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </div>

    <footer>
        <div class="container">
            <div class="footer">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 footer-box">
                        <div class="footer-logo">
                            <img src="{{asset('frontend')}}/images/footer-logo.png" alt="fooret-logo">
                            <p class="footer-des">20 Carrochan Rd, Balloch, Alexandria G83 8EG, UK 69QJ+2F Alexandria, United Kingdom</p>
                            <ul>
                                <li>phone - <a href="+911234567890">+91 123 456 789 0 , +91 123 456 789 0</a></li>
                                <li>email - <a href="/cdn-cgi/l/email-protection#11626461617e63655161786b6b7e7f3f727e7c"><span class="__cf_email__" data-cfemail="364543464659444276465f4c4c59581855595b">[email&#160;protected]</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 footer-box">
                        <div class="opening-hours">
                            <h2>Opening Hours</h2>
                            <ul>
                                <li>Mon - Tues : <span>6.00 am - 10.00 pm</span></li>
                                <li>Wednes - Thurs : <span>6.00 am - 10.00 pm</span></li>
                                <li>Launch : <span>Everyday</span></li>
                                <li>Sunday : <span class="footer-close">Closed</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 footer-box">
                        <div class="useful-links">
                            <h2>useful links</h2>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Warranty and Services</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 copyright-box">
                        <p class="copy-text">© Pizzon all Rights Reserved. Designed by <a href="https://github.com/shorifuddin" target="_blank">Shorif Uddin</a></p>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 copyright-box">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend')}}/js/script.js"></script>

</body>

</html>
