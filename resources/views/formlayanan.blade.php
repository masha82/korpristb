@extends('layouts.master')
@section('title')
    <title>Form Layanan KOPRI</title>
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
                        <form class="row" action="{{ route('layanan.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label class="form-label" >Upload Foto:</label>
                                <input type="file" class="form-control" name="file" id="file" />
                            </div>
                            <div class="col-12 form-group">
                                <label>Keterangan:</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control">
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

