<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Naturo</title>
    <link rel="shortcut icon" href="fontend/img/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" rel="stylesheet">

    <link href="{{ asset('assets/fontend/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/vendor/owl_carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fontend/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontend/vendor/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fontend/css/select2-bootstrap-5-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontend/scss/main.min.css') }}">
    <link href="{{ asset('assets/fontend/css/loading.css') }}" rel="stylesheet">


</head>

<body>
    <div>
        <style>
            .call-to-btn {
                position: fixed;
                z-index: 99;
                bottom: 100px;
                right: 30px;
                padding: 10px 10px;
                background: #86CD91;
                border-radius: 100px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #004111;
                font-size: 17px;
            }

            .call-to-btn .material-icons-outlined {
                font-size: 17px;
            }

            @media only screen and (max-width: 575px) {
                .call-to-btn {
                    bottom: 60px;
                    right: 15px;
                    width: 40px;
                    height: 40px;
                }
            }
        </style>




        <a class="call-to-btn" href="tel:09639812525">
            <span class="material-icons-outlined me-1">
                call
            </span>
            09639812525
        </a>
    </div>


    <section id="top">
        <div class="container">
            <div class="content">
                <div class="left d-flex align-items-center">
                    <span class="material-icons-outlined me-1">
                        call
                    </span>
                    <a href="callto:01979912525" class="call">01979912525</a>
                </div>
                <div class="center d-flex align-items-center">
                    <span class="material-icons-outlined me-1">
                        auto_fix_normal
                    </span>
                    Discover the Power of Nature with NaturoBD
                </div>

                <div class="right d-flex align-items-center">
                    <div class="d-flex align-items-center me-2">
                        <span class="material-icons-outlined me-1">
                            help_outline
                        </span>

                        <a href="tel:8809639812525" title="8809639812525">Customer Help</a>
                    </div>
                    <div>
                        <div class="dropdown lang">
                            <div class="head dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <img class="flag" src="{{ url('assets/fontend/img/bd.svg') }}" alt="" loading="lazy">
                                <span class="label">EN</span>
                            </div>
                            <ul class="dropdown-menu">
                                <div class="item">
                                    <a class="dropdown-item" href="#">
                                        <img class="flag" src="{{ url('assets/fontend/img/bd.svg') }}" alt="" loading="lazy">
                                        <span class="label">BD</span>
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="dropdown-item" href="#">
                                        <img class="flag" src="fontend/img/us.svg" alt="" loading="lazy">
                                        <span class="label">EN</span>
                                    </a>
                                </div>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('partials.header')

    {{ $slot }}
    <footer id="footer">
        <div class="container-fluid">
            <div class="content">
                <div class="logo-section">
                    <img class="footer-logo" src="{{ url('assets/fontend/img/footer-logo.svg') }}">

                    <div class="contacts">
                        <div class="contact">
                            <span class="material-icons-outlined">
                                phone
                            </span>
                            <a href="tel:09639812525" class="text">09639-812525</a>
                        </div>
                        <div class="contact">
                            <span class="material-icons-outlined">
                                email
                            </span>
                            <a href="mailto:helpdesk@naturo.com" class="text">helpdesk@naturo.com</a>

                        </div>
                        <div class="contact">
                            <span class="material-icons-outlined">
                                place
                            </span>
                            <span class="text">
                                <div class="head">Dhaka Office</div>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="help-section">
                    <div>
                        <p class="head">Help</p>

                        <!--[if BLOCK]><![endif]--> <a href="pages/help-support.html" class="link">Help &amp;
                            Support</a>
                        <a href="pages/refund-policy.html" class="link">Refund Policy</a>
                        <a href="pages/faqs.html" class="link">FAQ’s</a>
                        <!--[if ENDBLOCK]><![endif]-->


                    </div>
                </div>

                <div class="link-section">
                    <div>

                        <!--[if BLOCK]><![endif]--> <a href="pages/blogs.html" class="link">Blogs</a>
                        <a href="pages/contact-us.html" class="link">Contact Us</a>
                        <a href="pages/sitemap.html" class="link">Our Sitemap</a>
                        <a href="pages/wishlist.html" class="link">Wishlist</a>
                        <a href="pages/my-order-history.html" class="link">Order History</a>
                        <!--[if ENDBLOCK]><![endif]-->

                    </div>
                </div>

                <div class="product-section">
                    <div>
                        <p class="head">Products</p>
                        <!--[if BLOCK]><![endif]--> <a href="pages/shop.html" class="link">Honey &amp; Dates</a>
                        <a href="pages/honey%20-dates.html" class="link">Hair &amp; Skin Care</a>
                        <a href="pages/finest-herbs.html" class="link">Finest Herbs</a>
                        <a href="pages/nut-seeds.html" class="link">Nut &amp; Seeds</a>
                        <a href="pages/organic-oil%20-ghee.html" class="link">Organic Oil &amp; Ghee</a>
                        <a href="pages/energy-essentials.html" class="link">Energy Essentials</a>
                        <!--[if ENDBLOCK]><![endif]-->

                    </div>
                </div>

                <div class="payment-section">
                    <div>
                        <p class="head">We Accepts</p>
                        <img src="{{ url('assets/fontend/img/ssl_comerge.png') }}" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-bottom">
            <div class="container-fluid">
                <div class="content">
                    <div class="copyright">
                        &copy; 2024 Naturo All rights reserved. Developed by <a href="https://webspreed.com/" title="+8801722878226">Webspreed</a>

                    </div>
                    <div class="menu">
                        <!--[if BLOCK]><![endif]--> <a href="pages/terms.html">Terms</a>
                        <a href="pages/privacy.html">Privacy</a>
                        <a href="pages/cookie-policy.html">Cookie Policy</a>
                        <!--[if ENDBLOCK]><![endif]-->

                    </div>
                    <div class="d-flex align-items-center right">
                        <div class="title">
                            Find Us On
                        </div>
                        <div class="social">

                            <a href="https://www.facebook.com/naturobd" class="social-link">
                                <img src="{{ url('assets/fontend/img/facebook.svg') }}" alt="" loading="lazy">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <script src="{{ asset('assets/fontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/fontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/fontend/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/fontend/vendor/smooth-scrollbar/8.8.4/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/fontend/vendor/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/fontend/vendor/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/fontend/js/admin.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".category-carousel").owlCarousel({
                loop: true,
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