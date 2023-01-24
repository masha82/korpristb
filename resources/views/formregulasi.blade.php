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
                                <input type="text" name="judul" id="judul" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Nomor Regulasi:</label>
                                <input type="text" name="nomor" id="nomor" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Tahun Regulasi:</label>
                                <input type="text" name="tahun" id="tahun" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Jenis Regulasi:</label>
                                <input type="text" name="jenis" id="jenis" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label">Upload Dokumen:</label>
                                <input type="file" class="form-control" name="dokumen" id="dokumen" />
                            </div>
                            <div class="col-12 form-group">
                                <label>Status:</label>
                                <select class="form-control" name="status" id="status">
                                    <option><label>-- Pilih Salah Satu --</label></option>
                                    <option value="1">Draft</option>
                                    <option value="2">Publish</option>
                                </select>
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
