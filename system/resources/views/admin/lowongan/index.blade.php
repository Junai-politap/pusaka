@extends('template.admin')
@section('content')
    @include('section.notif')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Alumni</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target=".bs-example-modal-lg"
                            type="button">
                            <span class="icon-copy fa fa-plus-circle"></span> Tambah Data
                        </a>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Aksi</th>
                                    <th>Nama Lowongan</th>
                                    <th>Nama Perusahaan/Mitra</th>

                                    <th> Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_lowongan as $lowongan)
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url("lowongan-show/$lowongan->id_lowongan") }}"
                                                    class="btn btn-info"><i class="fa fa-info"></i> Lihat</a>

                                                <a href="{{ url("lowongan-edit/$lowongan->id_lowongan") }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                                    href="{{ url("delete-lowongan/$lowongan->id_lowongan") }}"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                            </div>
                                        </td>
                                        <td>{{ $lowongan->nama_lowongan }}</td>
                                        <td>{{ $lowongan->perusahaan->nama_perusahaan }}</td>

                                        <td>{{ $lowongan->jurusan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" width="150%">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Lowongan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{ url('admin/lowongan') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-12 col-md-9">
                                <select name="id_perusahaan" class="form-control">
                                    <option value=""> Pilih Perusahaan</option>
                                    @foreach ($list_perusahaan as $perusahaan)
                                        <option value="{{ $perusahaan->id }}">
                                            {{ $perusahaan->nama_perusahaan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nama Lowongan</label>
                            <div class="col-sm-12 col-md-9">
                                <input type="text" placeholder="Masukan Nama Lowongan" class="form-control"
                                    name="nama_lowongan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Fungsi Kerja</label>
                            <div class="col-sm-12 col-md-9">
                                <input type="text" placeholder="Masukan Fungsi Kerja" class="form-control"
                                    name="fungsi_kerja">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Jenjang Karir</label>
                            <div class="col-sm-12 col-md-9">
                                <input type="text" placeholder="Masukan Jenjang Karir" class="form-control"
                                    name="jenjang_karir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Pengalaman</label>
                            <div class="col-sm-12 col-md-9">
                                <input type="text" placeholder="Masukan Pengalaman" class="form-control"
                                    name="pengalaman">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Jurusan</label>
                            <div class="col-sm-12 col-md-9">
                                <input type="text" placeholder="Masukan Spesifikasi Jurusan" class="form-control"
                                    name="jurusan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Spesifikasi</label>
                            <div class="col-sm-12 col-md-9">
                                <input type="text" placeholder="Masukan Spesifikasi" class="form-control"
                                    name="spesifikasi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Persyaratan</label>
                            <div class="col-sm-12 col-md-9">
                                <textarea class="textarea_editor form-control border-radius-0" id="summernote" name="persyaratan" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Browser</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="custom-file-input" type="file" name="poto"
                                    accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Browser Lowongan</label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close</button>
                        <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
