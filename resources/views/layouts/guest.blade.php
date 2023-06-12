<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BRAINDEAD') }} - {{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/Logogram.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elegantFont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .product__overview ul {
            margin-left: 20px;
            margin-bottom: 10px;

        }

        .product__overview ul li {
            display: list-item;
            list-style: circle;
        }

        .list li {
            list-style: disc;
        }

        /* .image-hidden {
            display: none
        } */

        @media screen and (max-width: 990px) {
            .image-hidden {
                display: none
            }
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <!-- Add your site or application content here -->

    @include('layouts.loading')

    @include('layouts.back-to-top')

    @include('layouts.navigation2')

    <main>
        {{ $slot }}
    </main>

    <!-- footer area start -->
    <footer>
        <div class="footer__area footer-bg">
            <div class="footer__top pt-90 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
                            <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay=".3s">
                                <div class="footer__widget-head mb-35">
                                    <h4 class="footer__widget-title">Follow our Socials</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__social mb-30">
                                        <ul>
                                            <li><a href="#" class="pin"><i class="fab fa-youtube"></i></a>
                                            </li>
                                            <li><a href="https://wa.me/6285156326419?/" class="tw"><i class="fab fa-whatsapp"></i></a>
                                            </li>
                                            <li><a href="https://www.instagram.com/seilobdg/" class="fb"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
                            <div class="footer__widget mb-40 wow fadeInUp footer__pl" data-wow-delay=".7s">
                                <div class="footer__widget-head">
                                    <h4 class="footer__widget-title">Resources</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="#">Promotion </a></li>
                                            <li><a href="#">Submit Content</a></li>
                                            <li><a href="#">Resources</a></li>
                                            <li><a href="#">Design System</a></li>
                                            <li><a href="#">Expert</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4">
                            <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay=".9s">
                                <div class="footer__widget-head">
                                    <h4 class="footer__widget-title">Products</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4">
                            <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay="1.2s">
                                <div class="footer__widget-head">
                                    <h4 class="footer__widget-title">Community</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="#">Forums</a></li>
                                            <li><a href="#">Community</a></li>
                                            <li><a href="#">Meetups</a></li>
                                            <li><a href="#">Jobs</a></li>
                                            <li><a href="#">Careers</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/backToTop.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
        @if (Session::has('success'))
            Swal.fire({
                title: 'Success!',
                text: "{{ Session::get('success') }}",
                timer: 5000,
                icon: 'success'
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        @elseif (Session::has('fail'))
            Swal.fire({
                title: 'Oops!',
                text: "{{ Session::get('fail') }}",
                icon: 'error',
                timer: 5000
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        @endif
    </script>
</body>

</html>
