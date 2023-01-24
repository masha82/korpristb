@extends('layouts.master')
@section('title')
    <title>Form Pengumuman</title>
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
                        <form class="row" action="{{ route('info.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Judul Pengumuman:</label>
                                <input type="text" name="nama" id="jobs-application-name" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Kategori Pengumuman:</label>
                                <input type="text" name="informasi" id="jobs-application-email" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Isi Pengumuman:</label>
                                <input type="text" name="mekanisme" id="jobs-application-phone" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Thumbnail Pengumuman:</label>
                                <input type="file" class="form-control" id="customFile" />
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Upload Dokumen:</label>
                                <input type="file" class="form-control" id="customFile" />
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Status:</label>
                                <select class="form-control" id="sel1">
                                    <option><label>-- Pilih Salah Satu --</label></option>
                                    <option>Draft</option>
                                    <option>Publish</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label>Sumber:</label>
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
