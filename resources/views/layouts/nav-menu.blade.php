<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Restaurant</title>

    <!-- Meta -->
    <meta charset="utf-8">
  
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Stylesheet -->
    <link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/rangeslider/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/switcher/switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&amp;family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

</head>

<body id="bg">
    {{-- <div id="loading-area" class="loading-page-3">
	<img src="{{ asset('assets/images/loading.gif" alt="">
</div> --}}
    <div class="page-wraper">

       


        <div class="page-content bg-white">
            <!-- Banner  -->
            <div class="dz-bnr-inr style-1 text-center bg-parallax"
                style="background-image:url('{{ asset('assets/images/banner/bnr4.jpg') }}'); background-size:cover; background-position:center;">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>Our Menu</h1>
                        <!-- Breadcrumb Row -->
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">

                                <li class="breadcrumb-item active" aria-current="page">Our Menu</li>
                            </ul>
                        </nav>
                        <!-- Breadcrumb Row End -->
                    </div>
                </div>
            </div>

            <main>
                @yield('content') 
            </main>

        </div>
        <!--Footer-->
        <footer class="site-footer style-1 bg-dark" id="footer">

            <!-- Footer Bottom Part -->
            <div class="container">
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 text-md-start">
                            <p>Copyright 2024 All rights reserved.</p>
                        </div>
                        <div class="col-xl-6 col-md-6 text-md-end">
                            <span class="copyright-text">Crafted With <span class="heart"></span> by <a
                                    href="https://oussamaassmaoui.serv00.net/" target="_blank">OUSSAMA
                                    ELASSMAOUI</a></span>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!--Footer-->

        <div class="scroltop-progress scroltop-primary">
            <svg width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELEECT -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('assets/vendor/masonry/masonry-4.2.2.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script><!-- ISOTOPE -->
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/vendor/bootstrap-touchspin/bootstrap-touchspin.js') }}"></script><!-- TOUCHSPIN -->
    <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script><!-- NOUSLIDER MIN JS-->
    <script src="{{ asset('assets/vendor/wnumb/wNumb.js') }}"></script><!-- WNUMB -->
    <script src="{{ asset('assets/js/dz.carousel.min.js') }}"></script><!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- AJAX -->
    {{-- <script src="{{ asset('assets/js/custom.min.js') }}"></script><!-- CUSTOM JS --> --}}
    <script src="{{ asset('assets/js/dznav-init.js') }}"></script><!-- DZNAV INIT -->
    <script src="{{ asset('assets/vendor/rangeslider/rangeslider.js') }}"></script><!-- RANGESLIDER -->
    <script src="{{ asset('assets/vendor/switcher/switcher.js') }}"></script><!-- CUSTOM JS -->
</body>

<!-- Mirrored from swigo.dexignzone.com/xhtml/our-menu-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 15:30:45 GMT -->

</html>
