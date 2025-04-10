{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html> --}}

<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{asset('')}}assets/" data-template="front-pages"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('')}}assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('')}}assets/vendor/fonts/remixicon/remixicon.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{asset('')}}assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('')}}assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('')}}assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/demo.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{asset('')}}assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{asset('')}}assets/vendor/css/pages/front-page-landing.css" />

    <!-- Helpers -->
    <script src="{{asset('')}}assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('')}}assets/js/front-config.js"></script>
</head>

<body>
    <script src="{{asset('')}}assets/vendor/js/dropdown-hover.js"></script>
    <script src="{{asset('')}}assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar container shadow-none py-0">
        <div class="navbar navbar-expand-lg landing-navbar border-top-0 px-4 px-md-8">
            <!-- Menu logo wrapper: Start -->
            <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-6">
                <!-- Mobile menu toggle: Start-->
                <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="tf-icons ri-menu-fill ri-24px align-middle"></i>
                </button>
                <!-- Mobile menu toggle: End-->
                <a href="{{url('')}}" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <span style="color: #666cff">
                            <svg width="268" height="150" viewBox="0 0 38 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                                    fill="currentColor" />
                                <path
                                    d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                                    fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
                                <path
                                    d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                                    fill="currentColor" />
                                <path
                                    d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                    fill="currentColor" />
                                <path
                                    d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                    fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
                                <path
                                    d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                                    fill="currentColor" />
                                <defs>
                                    <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138"
                                        x2="10.532" y2="24.104" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-opacity="1" />
                                        <stop offset="1" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139"
                                        x2="10.3357" y2="24.1155" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-opacity="1" />
                                        <stop offset="1" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span>
                    </span>
                    <span class="app-brand-text demo menu-text fw-semibold ms-2 ps-1">{{ config('app.name') }}</span>
                </a>
            </div>
            <!-- Menu logo wrapper: End -->
            <!-- Menu wrapper: Start -->
            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="tf-icons ri-close-fill"></i>
                </button>
                <ul class="navbar-nav me-auto p-4 p-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-medium" aria-current="page" href="landing-page.html#landingHero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="landing-page.html#landingFeatures">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="landing-page.html#landingTeam">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="landing-page.html#landingFAQ">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-nowrap" href="landing-page.html#landingContact">Contact us</a>
                    </li>
                    <li class="nav-item mega-dropdown">
                        <a href="javascript:void(0);"
                            class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                            aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                            <span data-i18n="Pages">Pages</span>
                        </a>
                        <div class="dropdown-menu p-4 p-lg-6">
                            <div class="row gy-4">
                                <div class="col-12 col-lg">
                                    <div class="h6 d-flex align-items-center mb-2 mb-lg-4">
                                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                                            <span class="avatar-initial rounded bg-label-primary"><i
                                                    class="ri-layout-grid-line"></i></span>
                                        </div>
                                        <span class="ps-1">Other</span>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="pricing-page.html">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                <span data-i18n="Pricing">Pricing</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="payment-page.html">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                <span data-i18n="Payment">Payment</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="checkout-page.html">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                <span data-i18n="Checkout">Checkout</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="help-center-landing.html">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                <span data-i18n="Help Center">Help Center</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg">
                                    <div class="h6 d-flex align-items-center mb-2 mb-lg-4">
                                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                                            <span class="avatar-initial rounded bg-label-primary"><i
                                                    class="ri-lock-unlock-line"></i></span>
                                        </div>
                                        <span class="ps-1">Auth Demo</span>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-login-basic.html" target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Login (Basic)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-login-cover.html" target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Login (Cover)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-register-basic.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Register (Basic)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-register-cover.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Register (Cover)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-register-multisteps.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Register (Multi-steps)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-forgot-password-basic.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Forgot Password (Basic)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-forgot-password-cover.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Forgot Password (Cover)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-reset-password-basic.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Reset Password (Basic)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-reset-password-cover.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Reset Password (Cover)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg">
                                    <div class="h6 d-flex align-items-center mb-2 mb-lg-4">
                                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                                            <span class="avatar-initial rounded bg-label-primary"><i
                                                    class="ri-image-fill"></i></span>
                                        </div>
                                        <span class="ps-1">Other</span>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/pages-misc-error.html" target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Error
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/pages-misc-under-maintenance.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Under Maintenance
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/pages-misc-comingsoon.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Coming Soon
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/pages-misc-not-authorized.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Not Authorized
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-verify-email-basic.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Verify Email (Basic)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-verify-email-cover.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Verify Email (Cover)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-two-steps-basic.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Two Steps (Basic)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link d-flex align-items-center"
                                                href="../vertical-menu-template/auth-two-steps-cover.html"
                                                target="_blank">
                                                <i class="menu-icon tf-icons ri-circle-line me-2"></i>
                                                Two Steps (Cover)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="bg-body nav-img-col p-2">
                                        <img src="{{asset('')}}assets/img/front-pages/misc/nav-item-col-img-light.png"
                                            class="img-fluid scaleX-n1-rtl w-100" alt="nav item col image"
                                            data-app-light-img="front-pages/misc/nav-item-col-img-light.png"
                                            data-app-dark-img="front-pages/misc/nav-item-col-img-dark.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="../vertical-menu-template/index.html"
                            target="_blank">Admin</a>
                    </li>
                </ul>
            </div>
            <div class="landing-menu-overlay d-lg-none"></div>
            <!-- Menu wrapper: End -->
            <!-- Toolbar: Start -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                    <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow me-sm-4"
                        href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="ri-22px text-heading"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                <span class="align-middle"><i class="ri-sun-line ri-22px me-3"></i>Light</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                <span class="align-middle"><i class="ri-moon-clear-line ri-22px me-3"></i>Dark</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                <span class="align-middle"><i class="ri-computer-line ri-22px me-3"></i>System</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- navbar button: Start -->


                {{-- <a href="../vertical-menu-template/auth-login-cover.html"
                    class="btn btn-primary px-2 px-sm-4 px-lg-2 px-xl-4" target="_blank"><span
                        class="tf-icons ri-user-line me-md-1"></span><span
                        class="d-none d-md-block">Login/Register</span></a> --}}

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="{{Asset('/')}}assets/img/avatars/1.png" alt class="rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="pages-account-settings-account.html">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar avatar-online">
                                                <img src="{{Asset('/')}}assets/img/avatars/1.png" alt
                                                    class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-medium d-block small">{{ Auth::user()->name }}</span>
                                            <small class="text-muted">Role</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-profile-user.html">
                                    <i class="ri-user-3-line ri-22px me-3"></i><span class="align-middle">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-account-settings-account.html">
                                    <i class="ri-settings-4-line ri-22px me-3"></i><span
                                        class="align-middle">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-account-settings-billing.html">
                                    <span class="d-flex align-items-center align-middle">
                                        <i class="flex-shrink-0 ri-file-text-line ri-22px me-3"></i>
                                        <span class="flex-grow-1 align-middle">Billing</span>
                                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger">4</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-pricing.html">
                                    <i class="ri-money-dollar-circle-line ri-22px me-3"></i><span
                                        class="align-middle">Pricing</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-faq.html">
                                    <i class="ri-question-line ri-22px me-3"></i><span class="align-middle">FAQ</span>
                                </a>
                            </li>
                            <li>
                                <div class="d-grid px-4 pt-2 pb-1">
                                    <a class="btn btn-sm btn-danger d-flex" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                        <small class="align-middle">{{ __('Logout') }}</small>
                                        <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->

                @endguest

                <!-- navbar button: End -->
            </ul>
            <!-- Toolbar: End -->
        </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
        @yield('content')
    </div>

    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer">
        <div class="footer-top position-relative overflow-hidden">
            <img src="{{asset('')}}assets/img/front-pages/backgrounds/footer-bg.png" alt="footer bg"
                class="footer-bg banner-bg-img" />
            <div class="container position-relative">
                <div class="row gx-0 gy-7 gx-sm-6 gx-lg-12">
                    <div class="col-lg-5">
                        <a href="landing-page.html" class="app-brand-link mb-6">
                            <span class="app-brand-logo demo me-2">
                                <span style="color: #666cff">
                                    <svg width="268" height="150" viewBox="0 0 38 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                                            fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
                                        <path
                                            d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                            fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
                                        <path
                                            d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                                            fill="currentColor" />
                                        <defs>
                                            <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138"
                                                x2="10.532" y2="24.104" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-opacity="1" />
                                                <stop offset="1" stop-opacity="0" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139"
                                                x2="10.3357" y2="24.1155" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-opacity="1" />
                                                <stop offset="1" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </span>
                            <span class="app-brand-text demo footer-link fw-semibold ms-1">Materialize</span>
                        </a>
                        <p class="footer-text footer-logo-description mb-6">
                            Most Powerful & Comprehensive 🤩 React NextJS Admin Template with Elegant Material Design &
                            Unique
                            Layouts.
                        </p>
                        <form>
                            <div class="d-flex mt-2 gap-4">
                                <div class="form-floating form-floating-outline w-px-250">
                                    <input type="text" class="form-control bg-transparent" id="newsletter-1"
                                        placeholder="Your email" />
                                    <label for="newsletter-1">Subscribe to newsletter</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-4 mb-lg-6">Demos</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical
                                    Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal
                                    Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="../vertical-menu-template-bordered/" target="_blank"
                                    class="footer-link">Bordered Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link">Semi
                                    Dark Layout</a>
                            </li>
                            <li>
                                <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark
                                    Layout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-4 mb-lg-6">Pages</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a href="pricing-page.html" class="footer-link">Pricing</a>
                            </li>
                            <li class="mb-4">
                                <a href="payment-page.html" class="footer-link">Payment<span
                                        class="badge rounded-pill bg-primary ms-2">New</span></a>
                            </li>
                            <li class="mb-4">
                                <a href="checkout-page.html" class="footer-link">Checkout</a>
                            </li>
                            <li class="mb-4">
                                <a href="help-center-landing.html" class="footer-link">Help Center</a>
                            </li>
                            <li>
                                <a href="../vertical-menu-template/auth-login-cover.html" target="_blank"
                                    class="footer-link">Login/Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <h6 class="footer-title mb-4 mb-lg-6">Download our app</h6>
                        <a href="javascript:void(0);" class="d-block footer-link mb-4"><img
                                src="{{asset('')}}assets/img/front-pages/landing-page/apple-icon.png"
                                alt="apple icon" /></a>
                        <a href="javascript:void(0);" class="d-block footer-link"><img
                                src="{{asset('')}}assets/img/front-pages/landing-page/google-play-icon.png"
                                alt="google play icon" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-5">
            <div
                class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-text">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , Made with <i class="tf-icons ri-heart-fill text-danger"></i> by
                    </span>
                    <a href="https://pixinvent.com" target="_blank"
                        class="footer-link fw-medium footer-theme-link">Pixinvent</a>
                </div>
                <div>
                    <a href="https://github.com/pixinvent" class="footer-link me-4" target="_blank"><i
                            class="ri-github-fill"></i></a>
                    <a href="https://www.facebook.com/pixinvents/" class="footer-link me-4" target="_blank"><i
                            class="ri-facebook-circle-fill"></i></a>
                    <a href="https://twitter.com/pixinvents" class="footer-link me-4" target="_blank"><i
                            class="ri-twitter-fill"></i></a>
                    <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank"><i
                            class="ri-instagram-line"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('')}}assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('')}}assets/vendor/js/bootstrap.js"></script>
    <script src="{{asset('')}}assets/vendor/libs/node-waves/node-waves.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('')}}assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="{{asset('')}}assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="{{asset('')}}assets/js/front-main.js"></script>

    <!-- Page JS -->
    <script src="{{asset('')}}assets/js/front-page-landing.js"></script>
</body>

</html>