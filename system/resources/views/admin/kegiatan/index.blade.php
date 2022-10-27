@extends('template.admin')
@section('content')
    @include('section.notif')
    <div class="min-height-200px">
        <div class="card-box mb-30">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Kegiatan</h4>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#bd-example-modal-lg"
                            type="button">
                            <span class="icon-copy fa fa-plus-circle"></span> Tambah Kegiatan
                        </a>
                    </div>
                </div>
            </div>
            <div class="pb-20">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort text-center">Aksi</th>
                            <th class="text-center" style="width: 10%">Nama Kegiatan</th>
                            <th class="text-center"> Detail Kegiatan</th>
                            <th class="text-center" style="width: 10%">Waktu</th>

                            <th class="text-center">Tambah Poto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_kegiatan as $kegiatan)
                            <tr>
                                <td class="text-center">
                                    <div class="btn-group">

                                        <a href="{{ url("show-kegiatan/$kegiatan->id_kegiatan") }}"
                                            class="btn btn-info"><i class="fa fa-info"></i> Lihat</a>


                                        <a href="{{ url("edit-kegiatan/$kegiatan->id_kegiatan") }}"
                                            class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                            href="{{ url("delete-kegiatan/$kegiatan->id_kegiatan") }}"
                                            class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                </td>
                                <td class="text-center">{{ $kegiatan->nama_kegiatan }}</td>
                                <td class="text-center">{!! nl2br($kegiatan->detail) !!}</td>
                                <td class="text-center">{{ $kegiatan->waktu_kegiatan }}</td>
                                {{-- <td class="text-center">
                                    @if ($kegiatan->poto == $kegiatan->poto)
                                        <img src="{{ url("public/$kegiatan->poto") }}"
                                            style=" width: 50%; height: 100%; border-radius: 10px;"
                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                    @endif
                                </td> --}}
                                <td>
                                    <form action="{{ url('store-poto') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" class="form-control" name="poto_kegiatan"
                                            accept=".jpg, .png, .jpeg">
                                        <input type="text" name="id_kegiatan" value="{{ $kegiatan->id_kegiatan }}" hidden>
                                        <br>
                                        <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" width="150%">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{ url('store-kegiatan') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nama Kegiatan</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Nama Kegiatan" name="nama_kegiatan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Deskripsi kegiatan</label>
                            <div class="col-sm-12 col-md-9">
                                <textarea class="textarea_editor form-control border-radius-0" name="detail" id="summernote"
                                    cols="30" rows="10"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Waktu Kegiatan</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Waktu Kegiatan"
                                    name="waktu_kegiatan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Poto kegiatan</label>
                            <div class="col-sm-12 col-md-9 custom-file">
                                <input class="form-control" type="file" name="poto" accept=".jpg, .png, .jpeg">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
