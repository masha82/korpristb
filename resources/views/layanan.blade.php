@extends('layouts.master')
@section('title')
    <title>LAYANAN KORPRI</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="heading-block mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">LAYANAN KORPRI</h2><br>
                    <h4 class="gradient-text center gradient-horizon">LAYANAN BANTUAN KORPRI KABUPATEN SITUBONDO </h4>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('layanan.png') }}" alt="FAQs" class="px-5 mt-4">
                </div>
                <div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                        <th>NO</th>
                        <th>LAYANAN</th>
                        <th>INFORMASI</th>
                        <th>MEKANISME</th>
                        <th>SYARAT</th>
                        <th>KETERANGAN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Layanan</td>
                            <td>Informasi</td>
                            <td>Mekanisme</td>
                            <td>Syarat</td>
                            <td>Keterangan</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Layanan</td>
                            <td>Informasi</td>
                            <td>Mekanisme</td>
                            <td>Syarat</td>
                            <td>Keterangan</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Layanan</td>
                            <td>Informasi</td>
                            <td>Mekanisme</td>
                            <td>Syarat</td>
                            <td>Keterangan</td>
                        </tr>
                        </tbody>
                        </table>
                </div>

            </div>
        </div>

    </div>
@endsection