@extends('layouts.master')
@section('title')
    <title>Form Galeri Foto</title>
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
                        <form class="row" action="{{ route('gallery.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Upload Foto:</label>
                                <input type="file" class="form-control" id="customFile" />
                            </div>
                           
                            <div class="col-12 form-group">
                                <label>Keterangan:</label>
                                <input type="text" name="informasi" id="jobs-application-email" class="form-control">
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
        </div>
    </section>
@endsection
