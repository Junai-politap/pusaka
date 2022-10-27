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
                        <h4 class="page-title"> Edit Data {{ $alumni->nama_lengkap }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <form action="{{ url('admin/alumni', $alumni->id) }}/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="pd-20 card-box mb-30">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <a href="{{ url('admin/alumni') }}" class="btn btn-primary btn-md"><i
                                                class="fa fa-arrow-left"></i>
                                            Kembali</a>
                                    </div>
                                    <div class="pull-right">
                                        <button onclick="return confirm('Yakin Akan Menyimpan Data Ini')" class="btn btn-primary btn-md"><i class="fa fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-12 col-md-2 col-form-label">NIM</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="nim"
                                            value="{{ $alumni->nim }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="nik"
                                            value="{{ $alumni->nik }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="nama_lengkap"
                                            value="{{ $alumni->nama_lengkap }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Alamat Email</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="email" name="email"
                                            value="{{ $alumni->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="username"
                                            value="{{ $alumni->username }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="password" name="password"
                                            value="{{ $alumni->password }}">
                                        <input class="form-control" type="text" name="confirmasi_password"
                                            value="{{ $alumni->confirmasi_password }}" hidden>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Tempat, Tanggal Lahir</label>
                                    <div class="col-md-5">
                                        <input class="form-control" type="text" name="tempat_lahir"
                                            value="{{ $alumni->tempat_lahir }}">
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" type="date" name="tanggal_lahir"
                                            value="{{ date('Y-m-d', strtotime($alumni->tanggal_lahir)) }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Program Studi</label>
                                    <div class="col-sm-12 col-md-10">
                                        <select name="program_studi" id="" class="form-control">
                                            <option value="Teknik Informatika"
                                                @if ($alumni->program_studi == 'Teknik Informatika') selected @endif> Teknik
                                                Informatika</option>
                                            <option value="Teknik Elektro"
                                                @if ($alumni->program_studi == 'Teknik Elektro') selected @endif> Teknik Elektro
                                            </option>
                                            <option value="Teknik Sipil" @if ($alumni->program_studi == 'Teknik Sipil') selected @endif>
                                                Teknik Sipil
                                            </option>
                                            <option value="Teknik Pertambangan"
                                                @if ($alumni->program_studi == 'Teknik Pertambangan') selected @endif> Teknik
                                                Pertambangan</option>
                                            <option value="Teknik Mesin" @if ($alumni->program_studi == 'Teknik Mesin') selected @endif>
                                                Teknik Mesin
                                            </option>
                                            <option value="Budidaya Tanaman Perkebunan"
                                                @if ($alumni->program_studi == 'Budidaya Tanaman Perkebunan') selected @endif>
                                                Budidaya Tanaman Perkebunan</option>
                                            <option value="Agroindustri" @if ($alumni->program_studi == 'Agroindustri') selected @endif>
                                                Agroindustri
                                            </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Lulusan</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="lulusan"
                                            value="{{ $alumni->lulusan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-12 col-md-10">
                                        <select name="jenis_kelamin" id="" class="form-control">
                                            <option value="Laki-Laki" @if ($alumni->jenis_kelamin == 'Laki-Laki') selected @endif>
                                                Laki-Laki</option>
                                            <option value="Perempuan" @if ($alumni->jenis_kelamin == 'Perempuan') selected @endif>
                                                Perempuan
                                            </option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Agama</label>
                                    <div class="col-sm-12 col-md-10">
                                        <select name="agama" id="" class="form-control">
                                            <option value="Islam" @if ($alumni->agama == 'Islam') selected @endif> Islam
                                            </option>
                                            <option value="Kristen" @if ($alumni->agama == 'Kristen') selected @endif>
                                                Kristen</option>
                                            <option value="Khatolik" @if ($alumni->agama == 'Khatolik') selected @endif>
                                                Khatolik
                                            </option>
                                            <option value="Hindu" @if ($alumni->agama == 'Hindu') selected @endif>
                                                Hindu</option>
                                            <option value="Budha" @if ($alumni->agama == 'Budha') selected @endif>
                                                Budha
                                            </option>
                                            <option value="Kong Hu Chu"
                                                @if ($alumni->agama == 'Kong Hu Chu') selected @endif>
                                                Kong Hu Chu</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="alamat"
                                            value="{{ $alumni->alamat }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">No Telp</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="no_telp"
                                            value="{{ $alumni->no_telp }}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Poto</label>
                                    <div class="col-md-4">
                                        <img class="img-responsive" src='{{ url("public/$alumni->poto") }}'
                                            style="object-fit: cover; position: static; width: 50%; height: 200px;">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="poto"
                                            accept=".jpg, .png, .jpeg" value="{{ $alumni->poto }}">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
