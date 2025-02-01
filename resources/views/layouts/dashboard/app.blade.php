<!DOCTYPE html>

<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/logo.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    @yield('css')

    <title>{{ config('app.name') }}</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('assets/images/logos/loader.svg') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader End -->

    <div id="main-wrapper">

        <!-- Vertical Sidebar Start -->
        @include('layouts.dashboard.partials.vertical-nav')
        <!--  Vertical Sidebar End -->

        <div class="page-wrapper">

            <!-- Horizontal Sidebar Start -->
            @include('layouts.dashboard.partials.horizontal-nav')
            <!-- Horizontal Sidebar End -->

            <div class="body-wrapper">
                <div class="container-fluid">

                    <!--  Header Start -->
                    @include('layouts.dashboard.partials.header')
                    <!--  Header End -->

                    <!-- Content Start -->
                    @yield('content')
                    <!-- Content End -->

                </div>
            </div>

            <!-- Theme Settings Start -->
            @include('layouts.dashboard.partials.theme-settings')
            <!-- Theme Settings End -->

        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <script>
        function handleColorTheme(e) {
            console.log(e);

            $("html").attr("data-color-theme", e);
            $(e).prop("checked", !0);
        }
    </script>

    <!-- Import Js Files -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.dark.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/theme/feather.min.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    @yield('js')
</body>

</html>
