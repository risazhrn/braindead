<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BRAINDEAD') }}</title>
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
    <script type="text/javascript">
        $('#search').keypress((e) => {
            if (e.keyCode == 13) {
                let url = '{{ route('question', ['search' => '$1']) }}'
                location.href = url.replace('%241', $('#search').val())
            }
        })
    </script>
</body>

</html>
