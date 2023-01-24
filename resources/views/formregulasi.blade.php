@extends('layouts.master')
@section('title')
    <title>Form Regulasi/Dasar Hukum</title>
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
                        <form class="row" action="{{ route('hukum.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Judul Regulasi:</label>
                                <input type="text" name="nama" id="jobs-application-name" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Nomor Regulasi:</label>
                                <input type="text" name="informasi" id="jobs-application-email" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Jenis Regulasi:</label>
                                <input type="text" name="mekanisme" id="jobs-application-phone" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Dokumen:</label>
                                <input type="text" name="syarat" id="jobs-application-location" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Status:</label>
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
