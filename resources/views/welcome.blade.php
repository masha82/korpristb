@extends('layouts.master')
@section('title')
<title>KORPRI KABUPATEN SITUBONDO</title>
@endsection

@section('content')
<section id="slider" class="slider-element min-vh-md-100 py-4 include-header"
style="background: #FFF url('demos/freelancer/images/hero-bg.svg') repeat top center; background-size: cover;">
<div class="slider-inner">
<div class="vertical-middle slider-element-fade">
   <div class="container text-center py-5">
       <div class="emphasis-title mb-2">
           <h4 class="text-uppercase ls3 fw-bolder mb-0">Selamat Datang di Website Kami</h4>
           <h1>
                   <span id="oc-images" class="owl-carousel image-carousel carousel-widget" data-items="1"
                         data-margin="0" data-autoplay="3000" data-loop="true" data-nav="false"
                         data-pagi="false" data-animate-in="fadeInUp">
                       <div
                           class="oc-item gradient-text gradient-red-yellow text-uppercase">KORPRI</div>
                       <div class="oc-item gradient-text gradient-red-yellow text-uppercase">KABUPATEN</div>
                       <div class="oc-item gradient-text gradient-red-yellow text-uppercase">SITUBONDO</div>
                   </span>
           </h1>
       </div>
       <!-- <div class="d-flex align-items-center justify-content-center mb-5">
           <img src="demos/freelancer/images/face.svg" alt="Face" width="60">
           <span class="text-uppercase fw-bold ms-3">SemiColonWeb</span>
       </div> -->
       <div class="mx-auto" style="max-width: 600px">
           <p class="lead fw-normal text-dark mb-5">Authoritatively expedite backward-compatible e-commerce
               with cross-media e-commerce. Credibly provide access to world-class action items through
               resource-leveling resources.</p>
           <a href="demo-freelancer-works.html"
              class="button button-dark button-hero h-translatey-3 tf-ts button-reveal overflow-visible bg-dark text-end"><span>View our Works</span><i
                   class="icon-line-arrow-right"></i></a>
           <a href="#" data-scrollto="#footer" data-easing="easeInOutExpo" data-speed="1250"
              data-offset="70" class="button button-large button-light text-dark bg-transparent m-0"><i
                   class="icon-line2-arrow-down fw-bold"></i> <u>Contact Me</u></a>
       </div>
   </div>
</div>
</div>
</section><!-- #slider end -->

@endsection