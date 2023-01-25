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
                                <input type="text" name="judul" id="judul" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Kategori Pengumuman:</label>
                                <input type="text" name="kategori" id="kategori" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Isi Pengumuman:</label>
                                <textarea class="summernote" name="isi"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Thumbnail Pengumuman:</label>
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail" />
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label">Upload Dokumen:</label>
                                <input type="file" class="form-control" name="file" id="file" />
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Status:</label>
                                <select class="form-control" name="status" id="status">
                                    <option><label>-- Pilih Salah Satu --</label></option>
                                    <option value="1">Draft</option>
                                    <option value="2">Publish</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label>Sumber:</label>
                                <input type="text" name="sumber" id="sumber" class="form-control">
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
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['link', ['link']]
  ]
});
  </script>
@endpush