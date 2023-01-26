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
                                data-margin="0" data-autoplay="3000" data-loop="true" data-nav="false" data-pagi="false"
                                data-animate-in="fadeInUp">
                                <div class="oc-item gradient-text gradient-red-yellow text-uppercase">KORPRI</div>
                                <div class="oc-item gradient-text gradient-red-yellow text-uppercase">KABUPATEN</div>
                                <div class="oc-item gradient-text gradient-red-yellow text-uppercase">SITUBONDO</div>
                            </span>
                        </h1>
                    </div>

                    <div class="mx-auto" style="max-width: 600px">
                        <p class="lead fw-normal text-dark mb-5">Korps Pegawai Republik Indonesia atau biasa dikenal KORPRI
                            berdiri berdasarkan Keputusan Presiden Nomor 82 Tahun 1971,<br> 29 November 1971. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #section 1 -->
    <section id="content">
        <div class="container clearfix">

            <div class="row col-mb-50">
                <div class="col-12">

                    <div class="fancy-title title-border title-center">
                        <h3>Berita & Informasi</h3>
                    </div>

                    <div class="row posts-md col-mb-30 mb-4">
                        @foreach ($berita as $item)
                        <div class="entry col-sm-6 col-lg-3">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('gambar/'.$item->file) }}" alt="Image"></a>
                                </div>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="blog-single.html">{{$item->judul}}</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> {{\Carbon\Carbon::parse($item->created_at)->isoFormat("dddd, D MMMM Y")}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    <!-- #section 2 -->
    <section id="content">
        <div class="container clearfix">

            <div class="row col-mb-50">
                <div class="col-12">

                    <div class="fancy-title title-border title-center">
                        <h3>Galeri Foto Kegiatan</h3>
                    </div>

                    <div class="row posts-md col-mb-30 mb-4">
                        @foreach ($galeri as $item)
                        <div class="entry col-sm-6 col-lg-3">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('galeri/'.$item->file) }}" alt="Image"></a>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                       
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
