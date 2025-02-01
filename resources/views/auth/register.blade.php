<!DOCTYPE html>

<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <title>Spike Bootstrap Admin</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('assets/images/logos/loader.svg') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <div id="main-wrapper" class="p-0 bg-white">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="auth-login-shape-box position-relative mt-4 mb-4">
                <div class="d-flex align-items-center justify-content-center w-100 z-1 position-relative">
                    <div class="card auth-card mb-0 mx-3">
                        <div class="card-body">
                            <a href="{{ route('home') }}"
                                class="text-nowrap logo-img text-center d-flex align-items-center justify-content-center mb-5 w-100">
                                <img src="{{ asset('assets/images/logos/logo.png') }}" class="light-logo"
                                    alt="Logo-Dark" />
                                <img src="{{ asset('assets/images/logos/logo.png') }}" class="dark-logo"
                                    alt="Logo-light" />
                            </a>
                            <div class="row">
                                <div class="col-12 mb-2 mb-sm-0">
                                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center py-6 shadow-none"
                                        href="javascript:void(0)" role="button">
                                        <img src="../assets/images/svgs/google-icon.svg" alt=""
                                            class="img-fluid me-2" width="18" height="18" />
                                        <span class="d-none d-sm-block me-1 flex-shrink-0">Sign Up with</span>Google
                                    </a>
                                </div>
                            </div>
                            <div class="position-relative text-center my-4">
                                <p class="mb-0 fs-4 px-3 d-inline-block text-dark bg-white z-1 position-relative">
                                    or sign Up with
                                </p>
                                <span
                                    class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputtext"
                                        aria-describedby="textHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" />
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-primary w-100 mb-4 rounded-pill">Sign
                                    Up</a>
                                <div class="d-flex align-items-center">
                                    <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                                    <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Sign
                                        In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Theme Settings Start -->
                @include('layouts.dashboard.partials.theme-settings')
                <!-- Theme Settings End -->

            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <script>
        function handleColorTheme(colorTheme) {
            settings.ColorTheme = colorTheme;
            localStorage.setItem('userSettings', JSON.stringify(settings));
            document.documentElement.setAttribute("data-color-theme", colorTheme);
            document.getElementById(colorTheme).checked = true;
        }
    </script>

    <!-- Import Js Files -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.dark.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/feather.min.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
