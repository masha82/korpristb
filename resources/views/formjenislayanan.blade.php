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
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Informasi Layanan:</label>
                                <textarea class="summernote" name="informasi"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label>Mekanisme:</label>
                                <textarea class="summernote" name="mekanisme"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label>Persyaratan:</label>
                                <textarea class="summernote" name="syarat"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label>Keterangan:</label>
                                <textarea class="summernote" name="keterangan"></textarea>
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
@push('js')
<script>
    $('.summernote').summernote({
      placeholder: 'Isikan Informasi Layanan',
      tabsize: 2,
      height: 100
    });
  </script>
@endpush