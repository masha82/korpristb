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
                                <input type="text" name="judul" id="judul" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Kategori:</label>
                                <input type="text" name="kategori" id="kategori" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Isi Berita:</label>
                                <textarea class="summernote" name="isi"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label">Upload Foto:</label>
                                <input type="file" class="form-control" name="file" id="file" />
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Status:</label>
                                <select class="form-control" name="status" id="status"">
                                    <option><label>-- Pilih Salah Satu --</label></option>
                                    <option value="1">Draft</option>
                                    <option value="2">Publish</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label>Sumber:</label>
                                <input type="text" name="sumber" id="sumber" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Editor:</label>
                                <input type="text" name="editor" id="editor" class="form-control">
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