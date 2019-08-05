<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Unicorn Admin</title>
    <link rel="icon" href="{{ asset('ass-admin/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('ass-admin/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carbon/css/styles.css') }}">
    {{-- <link href="{{ asset('ass-admin/css/ipro.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('ass-admin/plugins/select2/select2.min.css') }}" rel="stylesheet">
    @stack('css')
    <style>
        .btn.btn-ipro {
            background-color: #136332;
            color: #fff;
            border-radius: 0;
        }

        .btn.btn-ipro:hover {
            background-color: #0C4020;
        }

        .nav-link.active i {
            color: #8BC34A !important;
        }
    </style>
</head>

<body class="sidebar-fixed header-fixed">
    <div class="page-wrapper">
        <nav class="navbar page-header navbar-dark bg-dark">
            <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
                <i class="fa fa-bars"></i>
            </a>

            <a class="navbar-brand" href="#">
                <h4>Unicorn</h4>
                {{-- <img src="{{ asset('ass-admin/img/logo.png') }}" width="80" alt="logo ipro"> --}}
            </a>

            <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
                <i class="fa fa-bars"></i>
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('carbon/imgs/avatar-1.png') }}" class="avatar avatar-sm" alt="logo">
                        <span class="small ml-1 d-md-down-none"></span>
                        {{ auth()->user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item btnLogout">
                            <i class="fa fa-lock"></i> Logout
                        </a>
                        <form class="hidden" id="formLogout" action="{{ url('logout') }}" method="post">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="main-container">
            @include("layouts.sidebar")

            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('carbon/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('carbon/vendor/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('carbon/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('carbon/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('carbon/js/carbon.js') }}"></script>
    <script src="{{ asset('carbon/js/demo.js') }}"></script>
    <script src="{{ asset('ass-admin/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('ass-admin/plugins/select2/select2.full.min.js') }}"></script>
    @stack('js')
    <script>
        $(document).ready(function () {
            $('.btnLogout').on('click', function (e) {
                e.preventDefault();
                $('#formLogout').submit();
            })
        });

    </script>
</body>

</html>
