@extends('template.admin')
@section('content')
    <div class="content">


        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Data {{ $perusahaan->nama_perusahaan }}</h4>
                    </div>
                </div>
            </div>


            <div class="row">


                <div class="col-lg-12">
                    <div class="card-box">

                        <div class="inbox-leftbar">
                            <img src="{{ url("public/$perusahaan->poto") }}" style="width: 100%;">

                        </div>

                        <div class="inbox-rightbar">


                            <div class="mt-4">
                                <ul class="message-list">
                                    <li class="unread">
                                        <div class="col-mail col-mail-1">
                                          Nama Perusahaan
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            : {{ $perusahaan->nama_perusahaan }}
                                        </div>
                                    </li>

                                    <li class="unread">
                                        <div class="col-mail col-mail-1">
                                          Email Perusahaan
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            : {{ $perusahaan->email }}
                                        </div>
                                    </li>

                                    <li class="unread">
                                        <div class="col-mail col-mail-1">
                                          Alamat Perusahaan
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            : {{ $perusahaan->alamat }}
                                        </div>
                                    </li>

                                    <li class="unread">
                                        <div class="col-mail col-mail-1">
                                          Nama Pemegang Akses
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            : {{ $perusahaan->nama_pemegang_akses }}
                                        </div>
                                    </li>

                                    <li class="unread">
                                        <div class="col-mail col-mail-1">
                                          No Telp Perusahaan
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            : {{ $perusahaan->no_telp }}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
