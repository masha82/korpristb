@extends('layouts.master')
@section('title')
    <title>STRUKTUR ORGANISASI</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="heading mx-auto" style="max-width: 700px">
                    <h2 class="nott center ls0 gradient-text gradient-horizon">STRUKTUR ORGANISASI</h2><br>
                    <h4 class="text-dark">STRUKTUR ORGANISASI KORPRI KABUPATEN SITUBONDO </h4>
                </div>
                <div class="row">
                    <img src="{{ asset('struktur/' . $struktur->file) }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
@endsection
