<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Naturo</title>
    <link rel="shortcut icon" href="frontend/img/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/owl_carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/select2-bootstrap-5-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/scss/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/filter.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
    <style>
        #products .filter.content {
            grid-template-columns: repeat(3, 1fr);
        }

        #products .content.grid {
            grid-template-columns: repeat(4, 1fr);
        }

        @media(max-width: 767px) {
            #products .filter.content {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
    @livewireStyles

</head>

<body>
    @include('partials.frontend.call-btn')
    @include('partials.frontend.top-header')
    @include('partials.frontend.header')

    @yield('content')

    @include('partials.frontend.footer')

    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/smooth-scrollbar/8.8.4/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/admin.js') }}"></script>
    @livewireScripts
    <script>
        $(document).ready(function() {
            $(".category-carousel").owlCarousel({
                loop: false,
                margin: 5,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 4
                    },
                    400: {
                        items: 5
                    },
                    576: {
                        items: 6
                    },
                    768: {
                        items: 8
                    },
                    992: {
                        items: 10
                    },
                    1200: {
                        items: 14
                    }
                }
            });
        });
    </script>

</body>


</html>