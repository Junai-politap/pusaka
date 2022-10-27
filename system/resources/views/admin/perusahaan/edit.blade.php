@extends('template.admin')
@section('content')
    @include('section.notif')
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                            </ol>
                        </div>
                        <h4 class="page-title"> Edit Data {{ $perusahaan->nama_perusahaan }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/perusahaan', $perusahaan->id) }}/update" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group row">
                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Nama
                                    Perusahaan</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="nama_perusahaan"
                                        value="{{ $perusahaan->nama_perusahaan }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Alamat</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="alamat"
                                        value="{{ $perusahaan->alamat }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Email</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="email"
                                        value="{{ $perusahaan->email }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Username</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="username"
                                        value="{{ $perusahaan->username }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Password</label>
                                <div class="col-9 col-lg-10">
                                    <input type="password" class="form-control" name="confirm_pass"
                                        value="{{ $perusahaan->confirm_pass }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">Nama Pemgang
                                    Akses</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="nama_pemegang_akses"
                                        value="{{ $perusahaan->nama_pemegang_akses }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-left">No
                                    Telp</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="no_telp"
                                        value="{{ $perusahaan->no_telp }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-left">Poto</label>
                                <div class="col-3">
                                    <img src="{{ url("public/$perusahaan->poto") }}"
                                        style="width: 70%; height: 100%; border-radius: 0px;">
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="file" accept=".jpg, .png, .jpeg" name="poto"
                                        value="{{ $perusahaan->poto }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-left">Bukti MoU</label>
                                <div class="col-3">
                                    <img src="{{ url("public/$perusahaan->mou") }}"
                                        style="width: 70%; height: 100%; border-radius: 0px;">
                                </div>
                                <div class="col-7">
                                    <input class="form-control" type="file" accept=".jpg, .png, .jpeg" name="mou"
                                        value="{{ $perusahaan->mou }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mt-10">
                            <div class="col-sm-6">
                                <p class="text-center">
                                    <button class="btn btn-space btn-secondary"><span class="fa fa-times"></span>
                                        Cancel</button>
                                    <button type="submit" class="btn btn-space btn-primary"><span
                                            class="fa fa-save"></span>
                                        Submit</button>
                                </p>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
