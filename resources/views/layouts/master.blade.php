<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Heebo:300,400,500,700,900" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" type="text/css"/>

    <!-- Freelancer Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/demos/freelancer/css/fonts.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/demos/freelancer/freelancer.css')}}" type="text/css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="{{asset('assets/css/colors.php?color=f7c25e')}}" type="text/css"/>
    @stack('css')
    <!-- Document Title
    ============================================= -->
    @yield('title')

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="border-bottom-0 no-sticky transparent-header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="demo-freelancer.html" class="standard-logo"><img src="demos/freelancer/images/logo.png"
                                                                                  alt="Canvas Logo"></a>
                        <a href="demo-freelancer.html" class="retina-logo"><img
                                src="demos/freelancer/images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                
                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path
                                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path
                                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu">

                        <ul class="menu-container">
                            <li class="menu-item"><a class="menu-link" href="demo-freelancer-about.html">
                                    <div>Profil</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="#"><div>Visi dan Misi</div></a>
                                    </li>
                                    <li class="menu-item" style="">
                                    <a class="menu-link" href="#"><div>Dasar Hukum</div></a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="#"><div>Struktur Organisasi</div></a>
                                    </li>                      
                                </ul>
                            </li>
            				<li class="menu-item"><a class="menu-link" href="demo-freelancer-works.html">
                                    <div>Layanan KORPRI</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="demo-freelancer-works.html">
                                    <div>Kegiatan BANSOS</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="demo-freelancer-works.html">
                                    <div>Galeri</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="demo-freelancer-works.html">
                                    <div>Pengumuman</div>
                                </a></li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>
            </div>
        </div>
    </header><!-- #header end -->

    <!-- Slider
    ============================================= -->
   
    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap p-0">
        @yield('content')
        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="border-0" style="background-color: #C9D6CF;">

        <div class="container">
            <div class="footer-widgets-wrap  m-0">

                <div class="row justify-content-between">

                    <div class="col-md-4">
                        <div class="widget">

                            <h3 class="h1 mb-5">Got a Project?<br>Let's Talk!</h3>
                            <span class="text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quisquam aspernatur vero voluptas.</span>
                            <a href="mailto:noreply@canvas.com" class="h4 text-dark mt-5 mb-4 d-block"><u>noreply@canvas.com</u>
                                <i class="icon-line-arrow-right position-relative ms-2" style="top: 3px"></i></a>
                            <div>
                                <a href="http://facebook.com/semicolonweb"
                                   class="social-icon si-small si-colored si-facebook" target="_blank">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="http://instagram.com/semicolonweb"
                                   class="social-icon si-small si-colored si-instagram" target="_blank">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="http://youtube.com/semicolonweb"
                                   class="social-icon si-small si-colored si-youtube" target="_blank">
                                    <i class="icon-youtube"></i>
                                    <i class="icon-youtube"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-colored si-flattr">
                                    <i class="icon-flattr"></i>
                                    <i class="icon-flattr"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-5">
                        <h3 class="h1 mb-5">Estimate your Project?</h3>
                        <div class="form-widget" data-loader="button" data-alert-type="inline">

                            <div class="form-result"></div>

                            <form class="row mb-0" id="landing-enquiry" action="include/form.php" method="post"
                                  enctype="multipart/form-data">
                                <div class="form-process"></div>
                                <div class="col-12 form-group mb-4">
                                    <label>What is Your Name:</label>
                                    <input type="text" name="landing-enquiry-name" id="landing-enquiry-name"
                                           class="form-control border-form-control required" value="">
                                </div>
                                <div class="col-12 form-group mb-4">
                                    <label>Your Email Address Please:</label>
                                    <input type="email" name="landing-enquiry-email" id="landing-enquiry-email"
                                           class="form-control border-form-control required" value="">
                                </div>
                                <div class="col-12 form-group mb-4">
                                    <label>Tell more about your Project:</label>
                                    <textarea name="landing-enquiry-additional-requirements"
                                              id="landing-enquiry-additional-requirements"
                                              class="form-control border-form-control" cols="10" rows="3"></textarea>
                                </div>
                                <div class="col-12 d-none">
                                    <input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck"
                                           value=""/>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="landing-enquiry-submit"
                                            class="button h-translatey-3 bg-dark rounded-pill"><i
                                            class="icon-line-arrow-right m-0"></i></button>
                                </div>

                                <input type="hidden" name="prefix" value="landing-enquiry-">
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->
</body>
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-double-angle-up bg-white text-dark rounded-circle shadow"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/functions.js')}}"></script>
@stack('js')

<script>
    // Owl Carousel Scripts
    jQuery(window).on('pluginCarouselReady', function () {
        $('#oc-services').owlCarousel({
            items: 1,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed: 400,
            responsive: {
                576: {stagePadding: 30, items: 1},
                768: {stagePadding: 30, items: 2},
                991: {stagePadding: 150, items: 3},
                1200: {stagePadding: 150, items: 3}
            },
        });
    });
</script>
