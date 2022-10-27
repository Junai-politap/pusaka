@extends('template.perusahaan')
@section('content')
    @include('section.perusahaan')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header"> Edit Lowongan</h5>
                    <div class="card-body">
                        <form action="{{ url('updatelowongan', $lowongan->id_lowongan) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Nama Lowongan</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="nama_lowongan"
                                        value="{{ $lowongan->nama_lowongan }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Fungsi Kerja</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="fungsi_kerja"
                                        value="{{ $lowongan->fungsi_kerja }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Jenjang Karir</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="jenjang_karir"
                                        value="{{ $lowongan->jenjang_karir }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Pengalaman Kerja</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="pengalaman"
                                        value="{{ $lowongan->pengalaman }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Spesifikasi Jurusan</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="jurusan"
                                        value="{{ $lowongan->jurusan }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Spesifikas</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="spesifikasi"
                                        value="{{ $lowongan->spesifikasi }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Persyaratan</label>
                                <div class="col-9 col-lg-10">
                                    <textarea class="form-control" id="summernote" name="persyaratan"
                                        rows="6">{{ $lowongan->persyaratan }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Poto</label>
                                <div class="col-3">
                                    <img src="{{ url("public/$lowongan->poto") }}"
                                        style="width: 100%; height: 100%; border-radius: 20px;">
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="file" accept=".jpg, .png, .jpeg" name="poto"
                                        value="{{ $lowongan->poto }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-space btn-secondary">Cancel</button>
                                <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
