@extends('template.perusahaan')
@section('content')
    @include('section.perusahaan')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="title">
                                    <h4>Data Lowongan</h4>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <span class="icon-copy fa fa-plus-circle"></span> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Nama Lowongan</th>
                                        <th class="text-center">Spesifikas</th>
                                        <th class="text-center">Poto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_lowongan as $lowongan)
                                        @if ($lowongan->id_perusahaan == $perusahaan->id_perusahaan)
                                            <tr>
                                                <td>
                                                    <div class="btn-group">

                                                        <a href="{{ url("show-lowongan/$lowongan->id_lowongan") }}"
                                                            class="btn btn-info"><span class="fa fa-info"></span>
                                                            Lihat</a>

                                                        <a href="{{ url('edit-lowongan', $lowongan->id_lowongan) }}"
                                                            class="btn btn-warning"><span class="fa fa-edit"></span>
                                                            Edit</a>

                                                        <a href="{{ url("lowongan/deletelowongan/$lowongan->id_lowongan") }}"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><span
                                                                class="fa fa-trash"></span> Hapus</a>

                                                        @if ($lowongan->status == 'Buka')
                                                            <form action="{{ url('ditutup', $lowongan->id_lowongan) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-primary">
                                                                    <i class="fa fa-times"></i> Di Tutup
                                                                </button>
                                                            </form>
                                                        @endif
                                                        @if ($lowongan->status == 'Tutup')
                                                            <form action="{{ url('dibuka', $lowongan->id_lowongan) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-primary">
                                                                    <i class="fa fa-check"></i> Di Buka
                                                                </button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($lowongan->status == 'Buka')
                                                        <p>Di Buka</p>
                                                    @endif
                                                    @if ($lowongan->status == 'Tutup')
                                                        <p>Di Tutup</p>
                                                    @endif
                                                </td>
                                                <td>{{ $lowongan->nama_lowongan }}</td>

                                                <td>{{ $lowongan->spesifikasi }}</td>
                                                <td class="text-center">
                                                    <img src="{{ url("public/$lowongan->poto") }}"
                                                        style="width: 20%; height: 20%; border-radius: 15px;">
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Tambah Lowongan</h3>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ url('lowonganstore') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            @foreach ($list_perusahaan as $perusahaan)
                                <input type="text" name="id_perusahaan" value="{{ $perusahaan->id_perusahaan }}"
                                    hidden="">
                            @endforeach

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Nama Lowongan</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" placeholder="Masukan Nama Lowongan" class="form-control"
                                        name="nama_lowongan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Fungsi Kerja</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" placeholder="Masukan Fungsi Kerja" class="form-control"
                                        name="fungsi_kerja">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Jenjang Karir</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" placeholder="Masukan Jenjang Karir" class="form-control"
                                        name="jenjang_karir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Pengalaman</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" placeholder="Masukan Pengalaman" class="form-control"
                                        name="pengalaman">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Jurusan</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" placeholder="Masukan Spesifikasi Jurusan" class="form-control"
                                        name="jurusan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Spesifikasi</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" placeholder="Masukan Spesifikasi" class="form-control"
                                        name="spesifikasi">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Persyaratan</label>
                                <div class="col-9 col-lg-10">
                                    <textarea class="form-control" id="summernote" name="persyaratan" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-right">Browser</label>
                                <div class="col-9 col-lg-10">
                                    <input class="custom-file-input" type="file" name="poto" accept=".jpg, .png, .jpeg">
                                    <label class="custom-file-label">Browser Lowongan</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-times"></span>
                                    Batal</button>
                                <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
