<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ app()->getLocale() }}">

<head>
    <title>Legal World</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="/legalworld/css/bootstrap.css">
    <link rel="stylesheet" href="/legalworld/css/fonts.css">
    <link rel="stylesheet" href="/legalworld/css/style.css" id="main-styles-link">
    <style>
        .map-content #contact-map {
            position: relative;
            width: 100%;
            height: 500px;
            border: 0;
        }
        @media only screen and (min-width: 1000px) {
            .logo-img1 {
                width: 200PX;
            }
        }
        @media only screen and (max-width: 1000px) {
            .logo-img1 {
                width: 100PX;
            }
        }
    </style>
</head>

<body>
    {{-- @yield('content') --}}

    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed"
                    data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <a class="rd-navbar-brand" href="{{ route('legalworld.main') }}">
                                    <img class="logo-img1" src="/legalworld/images/logo3.png"/>
                                </a>
                            </div>
                            <div class="rd-navbar-collapse">
                                <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                                    data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                                <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                                    <article class="unit align-items-center">
                                        <div class="unit-left"><span
                                                class="icon icon-md icon-modern mdi mdi-phone"></span></div>
                                        <div class="unit-body">
                                            <ul class="list-0">
                                                <li><a class="link-default" href="tel:+998972619595">+998 77 301-15-51</a></li>
                                                {{-- <li><a class="link-default"
                                                        href="mailto:info@legelworld.uz">info@legelworld.uz</a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="unit align-items-center">
                                        <div class="unit-left"><span
                                                class="icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                                        <div class="unit-body"><a class="link-default" href="tel:#">@lang('legalworld.add') <br> @lang('legalworld.addd')</a></div>
                                    </article><a class="button button-primary-outline button-winona"
                                        href="{{ route('legalworld.contact') }}">@lang('legalworld.aloqa')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                                <!-- RD Navbar Search-->
                                <div class="rd-navbar-search" id="rd-navbar-search-1">
                                    <ul class="rd-navbar-nav">
                                        <li class="nav-item list-inline">
                                            <a href="?locale=uz" class="m-1"><img style="width: 30px"
                                                    src="/legalworld/images/flag-uz.png"><span></span></a>
                                            <a href="?locale=ru" class="m-1"><img style="width: 30px"
                                                    src="/legalworld/images/flag-ru.png"><span></span></a>
                                            <a href="?locale=en" class="m-1"><img style="width: 30px"
                                                    src="/legalworld/images/flag-en.png"><span></span></a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item @if (Route::is('main')) active @endif">
                                        <a class="rd-nav-link"
                                            href="{{ route('legalworld.main') }}">@lang('legalworld.home')</a>
                                    </li>
                                    <li class="rd-nav-item @if (Route::is('about')) active @endif">
                                        <a class="rd-nav-link "
                                            href="{{ route('legalworld.about') }}">@lang('legalworld.about')</a>
                                    </li>
                                    {{-- <li class="rd-nav-item @if (Route::is('services')) active @endif">
                                        <a class="rd-nav-link "
                                            href="{{ route('legalworld.services') }}">@lang('legalworld.services')</a>
                                    </li> --}}
                                    <li class="rd-nav-item @if (Route::is('services') || Route::is('service-details')) active @endif"><a
                                            class="rd-nav-link"
                                            href="{{ route('legalworld.services') }}">@lang('legalworld.services')</a>
                                        {{-- <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link"
                                                    href="{{ route('legalworld.service-details', 1) }}">@lang('legalworld.yur')</a></li>
                                            </ul> --}}
                                    </li>
                                    <li class="rd-nav-item @if (Route::is('contact')) active @endif">
                                        <a class="rd-nav-link "
                                            href="{{ route('legalworld.contact') }}">@lang('legalworld.contacts')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        @yield('content')
        <!-- Page Footer-->
        <footer class="section footer-standard bg-gray-700">
            <div class="footer-standard-main">
                <div class="container">
                    <div class="row row-50">
                        <div class="col-lg-4">
                            <div class="inset-right-1">
                                <h4>@lang('legalworld.about')</h4>
                                <p>@lang('legalworld.onas')</p>
                            </div>
                            <div class="group group-xs group-middle">
                                <a class="icon icon-sm icon-creative mdi mdi-facebook" href="https://www.facebook.com/legalworld.uz?mibextid=ZbWKwL"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-instagram"
                                    href="https://www.instagram.com/legalworld.uz/"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-google" href="mailto:info@legalworld.uz"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-telegram" href="https://t.me/+998773011551"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4">
                            <div class="box-1">
                                <h4>@lang('legalworld.ainfo')</h4>
                                <ul class="list-sm">
                                    <li class="object-inline"><span
                                            class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a
                                            class="link-default" href="#">@lang('legalworld.add') <br> @lang('legalworld.addd')</a>
                                    </li>
                                    <li class="object-inline"><span
                                            class="icon icon-md mdi mdi-map text-gray-700"></span><a
                                            class="link-default"
                                            href="https://www.google.com/maps/place/41%C2%B019'20.7%22N+69%C2%B015'34.2%22E/@41.322404,69.2588399,19z/data=!3m1!4b1!4m4!3m3!8m2!3d41.322404!4d69.259485?entry=ttu">@lang('legalworld.maps')</a></li>
                                    <li class="object-inline"><span
                                            class="icon icon-md mdi mdi-phone text-gray-700"></span><a
                                            class="link-default" href="tel:+998903217745">+998 77 301-15-51</a></li>
                                    <li class="object-inline"><span
                                            class="icon icon-md mdi mdi-email text-gray-700"></span><a
                                            class="link-default"
                                            href="mailto:info@legelworld.uz">info@legelworld.uz</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-7 col-lg-4">
                            <h4> @lang('legalworld.news')</h4><p>@lang('legalworld.newstekst')</p>
                            <!-- RD Mailform-->
                            <form class="rd-form rd-mailform form-inline" data-form-output="form-output-global"
                                data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email"
                                        data-constraints="@Email @Required">
                                    <label class="form-label" for="subscribe-form-2-email">E-mail</label>
                                </div>
                                <div class="form-button">
                                    <button class="button button-primary button-icon button-icon-only button-winona"
                                        type="submit" aria-label="submit"><span
                                            class="icon mdi mdi-email-outline"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="preloader">
        <div class="preloader-logo"><img src="/legalworld/images/logo3.png" alt="" width="300"
                srcset="/legalworld/images/logo3.png 2x"/>
        </div>
        <div class="preloader-body">
            <div id="loadingProgressG">
                <div class="loadingProgressG" id="loadingProgressG_1"></div>
            </div>
        </div>
    </div>
    <!--// Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="/legalworld/js/core.min.js"></script>
    <script src="/legalworld/js/script.js"></script>
    <!-- Gmap3 Min JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ_mGhah8EApmFiXYYBsdBuygviP2M2EE"></script>
    <script src="/legalworld/js/gmap3.min.js"></script>
    <!-- Google Map JS -->
    <script src="/legalworld/js/map.js"></script>

</body>

</html>
