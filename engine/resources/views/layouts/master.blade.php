<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("title")</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icons/favicon1.png') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/themify/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/elegant-font/html-css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightbox2/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    @stack('css')
</head>

<body class="animsition">
    <header class="header1">
        <div class="container-menu-header">
            <div class="wrap_header">
                <a href="index.php" class="logo">
                    <img src="{{ asset('assets/images/icons/logo.png') }}" alt="IMG-LOGO">
                </a>
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a class="text-light" onclick="scrollWin()">Our Services</a>
                            </li>
                            <li>
                                <a class="text-light" onclick="scrollWin2()">About Us</a>
                            </li>
                            <li>
                                <a class="text-light" onclick="scrollWin3()">Contact Us</a>
                            </li>
                            @if (session()->has('user'))
                            <li class="{{ request()->is('login*')  }}">
                                <a href="{{ url('/login') }}">Admin</a>
                            </li>
                            @else
                            <li class="{{ request()->is('login*')  }}">
                                <a href="{{ url('/login') }}">Login</a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="header-icons">
                    <!-- <a class="text-light" class="header-wrapicon1 dis-block">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a> -->
                    <!-- <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span> -->
                </div>
            </div>
            <div class="redLine col-lg-12">
            </div>
        </div>
        <div class="wrap_header_mobile">
            <a href="index.php" class="logo-mobile">
                <img src="{{ asset('assets/images/icons/logo.png') }}" alt="IMG-LOGO">
            </a>
            <div class="btn-show-menu">
                <div class="header-icons-mobile">
                    <!-- <a class="text-light" class="header-wrapicon1 dis-block">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a> -->
                    <span class="linedivide2"></span>
                    <div class="header-wrapicon2">
                        <!-- <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span> -->
                    </div>
                </div>
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-menu-mobile">
                        <button><a href="{{ url('/') }}" class="text-light">Home</a></button>
                    </li>
                    <li class="item-menu-mobile">
                        <button onclick="scrollWin()">Our Services</button>
                    </li>
                    <li class="item-menu-mobile">
                        <button onclick="scrollWin2()">About Us</button>
                    </li>
                    <li class="item-menu-mobile">
                        <button onclick="scrollWin3()">Contact Us</button>
                    </li>
                    <li class="item-menu-mobile">
                        <button href="{{ url('/login') }}">Login</button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield("content")

    <footer class="bg-dark pt-4 text-white">
        <div class="text-center pb-5 mt-3" style="border-bottom: 5px solid #f44336">
            <h1 class="mb-3">HUBUNGI KAMI</h1>
            <a>
                Gedung Kolega<br>
                Jl. Veteran No 10 Lantai 2<br>
                Sumur Bandung<br>
                Telp: 08991227888
            </a>
        </div>

        <div class="container py-3">
            <div class="row text-center">
                <div class="col-12 col-lg-4">
                    <a href="facebook.com">
                        <img src="{{ asset('assets/images/icons/fb.png') }}" alt="facebook-icon" class="img-fluid"
                            style="width: 35px">
                    </a>
                    <a href="twitter.com">
                        <img src="{{ asset('assets/images/icons/tw.png') }}" alt="twitter-icon" class="img-fluid"
                            style="width: 35px">
                    </a>
                </div>
                <div class="col-12 col-lg-4">
                    <p class="mt-2 text-secondary">&copy;{{ date("Y") }} Unicorn Tracking</p>
                </div>
                <div class="col-12 col-lg-4">
                    <nav class="pt-2">
                        <a href="" class="text-white px-2">Our Services</a>
                        <a href="" class="text-white px-2">About Us</a>
                        <a href="" class="text-white px-2">News</a>
                        <a href="" class="text-white px-2">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('.block2-btn-addcart').each(function () {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
            $(this).on('click', function () {
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function () {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
            $(this).on('click', function () {
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });

        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        function scrollWin() {
            var elmnt = document.getElementById("ourservice");
            elmnt.scrollIntoView();
        }

        function scrollWin2() {
            var elmnt = document.getElementById("about");
            elmnt.scrollIntoView();
        }

        function scrollWin3() {
            var elmnt = document.getElementById("contact");
            elmnt.scrollIntoView();
        }

    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('js')
</body>

</html>
