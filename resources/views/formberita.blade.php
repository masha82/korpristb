@extends('layouts.master')
@section('title')
    <title>Form Berita</title>
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
                        <form class="row" action="{{ route('news.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Judul Berita:</label>
                                <input type="text" name="nama" id="jobs-application-name" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Kategori:</label>
                                <input type="text" name="informasi" id="jobs-application-email" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Isi Berita:</label>
                                <textarea class="summernote" name="isi"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label>Hashtag:</label>
                                <input type="text" name="syarat" id="jobs-application-location" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Upload Foto:</label>
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
                            <div class="col-12 form-group">
                                <label>Editor:</label>
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
@push('js')
<script>
    $('.summernote').summernote({
      placeholder: 'Isikan berita tentang KOPRI Kabupaten Situbondo',
      tabsize: 2,
      height: 100
    });
  </script>
@endpush