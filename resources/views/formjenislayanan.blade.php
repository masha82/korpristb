@extends('layouts.master')
@section('title')
    <title>Form Jenis Layanan KORPRI</title>
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <form class="row" action="{{ route('services.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Nama Layanan:</label>
                                <input type="text" name="nama" id="jobs-application-name" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Informasi Layanan:</label>
                                <input type="text" name="informasi" id="jobs-application-email" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Mekanisme:</label>
                                <input type="text" name="mekanisme" id="jobs-application-phone" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Persyaratan:</label>
                                <input type="text" name="syarat" id="jobs-application-location" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Keterangan:</label>
                                <input type="text" name="keterangan" id="jobs-application-location" class="form-control">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
