@extends('layouts.master')
@section('title')
    <title>STRUKTUR ORGANISASI</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="heading-block mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">STRUKTUR ORGANISASI</h2><br>
                    <h4 class="gradient-text center gradient-horizon">STRUKTUR ORGANISASI KORPRI KABUPATEN SITUBONDO </h4>
                    <div class="row posts-md col-mb-30 mb-4">
                        @foreach ($struktur as $item)
                        <div class="entry col-sm-6 col-lg-3">
                            <div class="grid-inner">
                            <div class="entry-image">
                            <a href="#"><img src="{{ asset('struktur/' . $item->file) }}" alt="Image"></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection