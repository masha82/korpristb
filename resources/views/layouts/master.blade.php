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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
                        <a href="demo-freelancer.html" class="standard-logo"><img src="{{ asset('logo_situbondo.png') }}"
                                                                                  alt="Canvas Logo"></a>
                        <a href="demo-freelancer.html" class="retina-logo"><img
                                src="{{ asset('logo_situbondo.png') }}" alt="Canvas Logo"></a>
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
                            <li class="menu-item"><a class="menu-link" href="{{url('/')}}">
                                <div>Beranda</div>
                            </a></li>   
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>Profil</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{url('visi')}}"><div>Visi dan Misi</div></a>
                                    </li>
                                    <li class="menu-item" style="">
                                    <a class="menu-link" href="{{url('regulasi')}}"><div>Dasar Hukum</div></a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{url('struktur')}}"><div>Struktur Organisasi</div></a>
                                    </li>
                                                         
                                </ul>
                            </li>
            				<li class="menu-item"><a class="menu-link" href="{{url('layanankorpri')}}">
                                    <div>Layanan KORPRI</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{url('kegiatanbansos')}}">
                                    <div>Kegiatan BANSOS</div>
                                </a></li>
                            
                            <li class="menu-item"><a class="menu-link" href="{{url('galeri')}}">
                                    <div>Galeri</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{url('pengumuman')}}">
                                    <div>Pengumuman</div>
                                </a></li>
                        
                        <li class="menu-item"><a class="menu-link" href="#">
                            <div>Admin</div>
                        </a>
                        <ul class="sub-menu-container" style="">
                            <li class="menu-item" style="">
                                <a class="menu-link" href="{{url('formberita')}}"><div>Form Berita</div></a>
                            </li>
                            <li class="menu-item" style="">
                                <a class="menu-link" href="{{url('formregulasi')}}"><div>Form Dasar Hukum</div></a>
                            </li>
                            <li class="menu-item" style="">
                                <a class="menu-link" href="{{url('formstruktur')}}"><div>Form Struktur Organisasi</div></a>
                            </li> 
                            <li class="menu-item"><a class="menu-link" href="{{url('formjenislayanan')}}">
                                <div>Form Jenis Layanan KORPRI</div>
                            </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{url('formlayanan')}}">
                                <div>Form Foto Layanan KORPRI</div>
                            </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{url('formkegbansos')}}">
                                <div>Form Kegiatan BANSOS</div>
                            </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{url('formgaleri')}}">
                                <div>Form Galeri</div>
                            </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{url('formpengumuman')}}">
                                <div>Form Pengumuman</div>
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
@stack('js')


