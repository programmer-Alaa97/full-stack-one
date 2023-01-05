<!DOCTYPE html>
<html dir="rtl">


<!-- Mirrored from technext.github.io/Benz/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Dec 2022 13:05:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}" type="">

    @include('layouts.head')
</head>

<body class="sub_page">

    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ URL::asset('assets/images/hero-bg.jpg') }}" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <span>
                            Benz
                        </span>
                    </a>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>
    @yield('content')
    @include('layouts.footer-scripts')
    @include('layouts.footer')
</body>


</html>
