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
                                    <th class="table-plus datatable-nosort text-center">Aksi</th>
                                    <th class="text-center">NIM</th>
                                    <th class="text-center">Nama </th>
                                    <th class="text-center">Angkatan</th>
                                    <th class="text-center">Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_alumni as $alumni)
                                    <tr>
                                        <td class="text-center">
                                            <div class="btn-group">


                                                <a href="{{ url("admin/alumni/$alumni->id") }}"
                                                    class="btn btn-info"><i class="fa fa-info"></i> Lihat</a>

                                                <a href="{{ url("admin/alumni/$alumni->id") }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

                                                        @include('template.utils.delete', [
                                                            'url' => url('admin/alumni', $alumni->id),
                                                        ])
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $alumni->nim }}</td>
                                        <td class="text-center">{{ $alumni->nama_lengkap }}</td>
                                        <td class="text-center">{{ $alumni->lulusan }}</td>
                                        <td class="text-center">{{ $alumni->program_studi }}</td>
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
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Alumni</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{ url('admin/alumni') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">NIM</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Nomor Induk Mahasiswa"
                                    name="nim">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">NIK</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Nomor Induk Kependudukan"
                                    name="nik">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" placeholder="Nama Lengkap Mahasiswa"
                                    name="nama_lengkap">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Alamat Email</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="email" name="email" placeholder="Alamat Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Username</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="password" name="confirmasi_password" placeholder="**************">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="Tempat Lahir Mahasiswa"
                                    name="tempat_lahir">
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="date" placeholder="Tanggal Lahir Mahasiswa"
                                    name="tanggal_lahir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Program Studi</label>
                            <div class="col-sm-12 col-md-9">
                                <select name="program_studi" class="form-control">
                                    <option value=""> Pilih Program Studi</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Sipil"> Teknik Sipil</option>
                                    <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                                    <option value="Teknik Mesin"> Teknik Mesin</option>
                                    <option value="TPHP">TPHP</option>
                                    <option value="Budidaya Tanaman Perkebunan">Budidaya Tanaman Perkebunan
                                    </option>
                                    <option value="Agroindustri">Agroindustri</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="lulusan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-12 col-md-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value=""> Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Agama</label>
                            <div class="col-sm-12 col-md-9">
                                <select name="agama" class="form-control">
                                    <option value=""> Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Khatolik"> Khatolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha"> Budha</option>
                                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label"> Alamat</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="alamat" placeholder="Alamat Anda Saat Ini">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">No Telepone</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="no_telp" placeholder="+62 8++++++++">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Poto</label>
                            <div class="col-sm-12 col-md-9 custom-file">
                                <input class="custom-file-input" type="file" name="poto"
                                    accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Poto Mahasiswa</label>
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
