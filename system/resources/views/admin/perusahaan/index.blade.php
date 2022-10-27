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
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Perusahaan</h2>
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
                                    <th class="table-plus datatable-nosort text-center">Aksi</th>
                                    <th class="text-center">Nama Perusahaan</th>
                                    <th class="text-center">Alamat</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_perusahaan as $perusahaan)
                                    <tr>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                @if ($perusahaan->status == 1)
                                                    <form action="{{ url('konfirmasi', $perusahaan->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="text" name="username"
                                                            value="{{ $perusahaan->email }}" hidden="">
                                                        <button class="btn btn-info"><span class="fa fa-check"></span>
                                                            Konfirmasi </button>
                                                    </form>
                                                @endif

                                                <a href="{{ url("admin/perusahaan/$perusahaan->id") }}"
                                                    class="btn btn-info"><i class="fa fa-info"></i> Lihat</a>

                                                <a href="{{ url("admin/perusahaan/$perusahaan->id") }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

                                                    @include('template.utils.delete', [
                                                        'url' => url('admin/perusahaan', $perusahaan->id),
                                                    ])
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $perusahaan->nama_perusahaan }}</td>
                                        <td class="text-center">{{ $perusahaan->alamat }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Perusahaan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{ url('admin/perusahaan') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Nama Perusahaan"
                                    name="nama_perusahaan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Alamat Perusahaan</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Alamat Perusahaan" name="alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Email Perusahaan</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="email" placeholder="Email Perusahaan" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Username</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Username" name="username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="password" placeholder="**********************"
                                    name="confirm_pass">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nama Pemegang Akses</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Nama Pemegang Akses"
                                    name="nama_pemegang_akses">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">No Telp</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="No Telp" name="no_telp">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Logo/Poto</label>
                            <div class="col-sm-12 col-md-9 custom-file">
                                <input class="custom-file-input" type="file" name="poto"
                                    accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Logo Perusahaan</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Bukti MoU</label>
                            <div class="col-sm-12 col-md-9 custom-file">
                                <input class="custom-file-input" type="file" name="mou"
                                    accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Bukti MoU</label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close</button>
                        <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
