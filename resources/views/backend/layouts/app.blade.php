<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Foodtech Dashboard</title>
    <meta name="csrf_token" value="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">


    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/iconic-fonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css') }}">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/jquery-ui.min.css') }}">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/datatables.min.css') }}">

    <!-- Page Specific CSS (Toastr.css) -->
    <link href="{{ asset('assets/backend/css/toastr.min.css') }}" rel="stylesheet">
    <!-- Foodtech styles -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/custom.css') }}">
    <!-- Favicon -->
</head>

<body class="ms-body {{ Route::is('admin.login') ? 'ms-logged-out' : 'ms-aside-left-open'}} ms-primary-theme ">
    <!-- Preloader -->

    @if(Route::is('admin.login'))
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>
    @endif
    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>

    <!-- Sidebar Navigation Left -->
    <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
        <!-- Logo -->
        <x-backend.page.logo parentclass="logo-sn ms-d-block-lg" childclass="pl-0 ml-0 text-center" />

        <!-- Navigation -->
        <x-backend.page.side-menu />

    </aside>

    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        @auth
        <x-backend.page.navbar />
        @endauth

        @yield('content')

    </main>
    <!-- MODALS -->



    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="{{ asset('assets/backend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery-ui.min.js') }}"></script>
    <!-- Global Required Scripts End -->

    <!-- Page Specific Scripts Start -->
    <script src="{{ asset('assets/backend/js/toastr.min.js') }}"></script>


    <!-- Page Specific Scripts Start -->
    @yield('page-js')
    <!-- Page Specific Scripts Finish -->

    <!-- Foodtech core JavaScript -->
    <script src="{{ asset('assets/backend/js/framework.js') }}"></script>
    <!-- Settings -->
    <script src="{{ asset('assets/backend/js/settings.js') }}"></script>

    @yield('scripts')

    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 5000);
    </script>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('alert', (event) => {
                toastr[event[0].type](event[0].message,
                    event[0].title ?? ''), toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                }
            });
        });
    </script>

</body>

</html>