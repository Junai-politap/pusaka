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
                                    <h4>Data Pelamar</h4>
                                </div>
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
                                        <th class="text-center">NIK</th>
                                        <th class="text-center">Nama Pelamar</th>
                                        <th class="text-center">Program Studi</th>
                                        <th class="text-center">No Hp</th>
                                        <th class="text-center">Penempatan</th>
                                        <th class="text-center">Berkas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pelamar as $pelamar)
                                        @if ($pelamar->username_perusahaan == $perusahaan->username)
                                            @if ($pelamar->status == 2)
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a href="{{ url("pelamar-show/$pelamar->id_pelamar") }}"
                                                                class="btn btn-info">
                                                                <i class="fas fa-exclamation"> Lihat</i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        @if ($pelamar->status == 2)
                                                            <p>Pengajuan Di Terima</p>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{ $pelamar->nik }}</td>
                                                    <td class="text-center">{{ $pelamar->nama_lengkap }}</td>
                                                    <td class="text-center">{{ $pelamar->program_studi }}</td>
                                                    <td class="text-center">{{ $pelamar->no_telp }}</td>
                                                    <td class="text-center">{{ $pelamar->nama_lowongan }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ url('public/app/cv', $pelamar->scan_cv) }}"
                                                            target="_blank"> CV</a>,
                                                        <a href="{{ url('public/app/ktp', $pelamar->scan_ktp) }}"
                                                            target="_blank"> KTP</a>,
                                                        <a href="{{ url('public/app/kk', $pelamar->scan_kk) }}"
                                                            target="_blank"> KK</a>,
                                                        <a href="{{ url('public/app/surat', $pelamar->scan_surat_lamaran) }}"
                                                            target="_blank">Surat Lamaran</a>

                                                    </td>
                                                </tr>
                                            @endif
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
@endsection
