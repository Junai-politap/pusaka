@extends('template.admin')
@section('content')
    @include('section.notif')
    <div class="min-height-200px">
        <div class="card-box mb-30">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Edit Kegiatan</h4>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ url('page-keg') }}">
                            <span class="icon-copy fa fa-arrow-left"></span> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <div class="pd-20 card-box mb-30">
                <form action="{{ url('update-kegiatan', $kegiatan->id_kegiatan) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4"></h4>

                        </div>
                        <div class="pull-right">
                            <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama Kegiatan</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="nama_kegiatan"
                                value="{{ $kegiatan->nama_kegiatan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Deskripsi Kegiatan</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="textarea_editor form-control border-radius-0" name="detail" id="summernote"
                                cols="30" rows="10"> {{ $kegiatan->detail }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Waktu Kegiatan</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="waktu_kegiatan"
                                value="{{ $kegiatan->waktu_kegiatan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-left">Poto Kegiatan</label>
                        <div class="col-3">
                            <img src="{{ url("public/$kegiatan->poto") }}"
                                style="width: 100%; height: 100%; border-radius: 20px;">
                        </div>
                        <div class="col-7">
                            <input class="form-control" type="file" accept=".jpg, .png, .jpeg" name="poto"
                                value="{{ $kegiatan->poto }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
