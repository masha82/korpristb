@extends('layouts.master')
@section('title')
    <title>Form Kegiatan Bansos</title>
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
                        <form class="row" action="{{ route('bansos.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Tanggal Kegiatan:</label>
                                <input type="text"  name="tgl_keg" id="tgl_keg" class="form-control datepicker">
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
@push('js')
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

  </script>
@endpush