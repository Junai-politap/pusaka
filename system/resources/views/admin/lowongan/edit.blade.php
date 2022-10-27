@extends('template.admin')
@section('content')
    <div class="dashboard-wrapper mb-20">
        <div class="container-fluid  dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Edit Lowongan</h5>
                        <div class="card-body">
                            <form action="{{ url('lowongan-update', $lowongan->id_lowongan) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Nama
                                        Lowongan</label>
                                    <div class="col-9 col-lg-10">
                                        <input type="text" class="form-control" name="nama_lowongan"
                                            value="{{ $lowongan->nama_lowongan }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Fungsi
                                        Kerja</label>
                                    <div class="col-9 col-lg-10">
                                        <input type="text" class="form-control" name="fungsi_kerja"
                                            value="{{ $lowongan->fungsi_kerja }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Jenjang
                                        Karir</label>
                                    <div class="col-9 col-lg-10">
                                        <input type="text" class="form-control" name="jenjang_karir"
                                            value="{{ $lowongan->jenjang_karir }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail2"
                                        class="col-3 col-lg-2 col-form-label text-left">Pengalaman</label>
                                    <div class="col-9 col-lg-10">
                                        <input type="text" class="form-control" name="pengalaman"
                                            value="{{ $lowongan->pengalaman }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">
                                        Jurusan</label>
                                    <div class="col-9 col-lg-10">
                                        <input type="text" class="form-control" name="jurusan"
                                            value="{{ $lowongan->jurusan }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">
                                        Persyaratan</label>
                                    <div class="col-9 col-lg-10">
                                        <textarea class="textarea_editor form-control border-radius-0" name="persyaratan"
                                            id="summernote" cols="30" rows="10"> {{ $lowongan->persyaratan }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">
                                        Spesifikasi</label>
                                    <div class="col-9 col-lg-10">
                                        <input type="text" class="form-control" name="spesifikasi"
                                            value="{{ $lowongan->spesifikasi }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-lg-2 col-form-label text-left">Poto</label>
                                    <div class="col-3">
                                        <img src="{{ url("public/$lowongan->poto") }}"
                                            style="width: 50%; height: 100%; border-radius: 20px;">
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" type="file" accept=".jpg, .png, .jpeg" name="poto"
                                            value="{{ $lowongan->poto }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 pl-0">
                                    <p class="text-center">
                                        <button class="btn btn-space btn-secondary"><span class="fa fa-times"></span>
                                            Cancel</button>
                                        <button type="submit" class="btn btn-space btn-primary"><span
                                                class="fa fa-save"></span> Submit</button>
                                    </p>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
