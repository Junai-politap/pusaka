@extends('template.admin')
@section('content')

<div class="container-xl px-4 mt-4">
   @csrf
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile {{ $alumni->nama_lengkap }}</div>
                <div class="card-body text-center">
                    <img class="img-account-profile mb-2" src="{{ url("public/$alumni->poto") }}" style="width: 100%" onerror="this.src='{{ url('public') }}/avatar.png';">
                    
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Data Pribadi</div>
                <div class="card-body">
                    <form>
                       
                        <div class="row gx-3 mb-3">
                            <div class="col-md-4">
                                <label class="" for="inputFirstName">Nama Lengkap</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->nama_lengkap }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">NIK</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->nik }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">NIM</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->nim }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">Program Studi</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->program_studi }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName"> Lulusan</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->lulusan }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">Tempat, Tanggal Lahir</label>
                            </div>
                            <div class="col-md-8">
                                <label class="" for="inputLastName">: {{ $alumni->tempat_lahir }} , {{date("d-m-Y", strtotime ($alumni->tanggal_lahir)) }}</label>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->jenis_kelamin }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">Agama</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->agama }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">Alamat</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->alamat }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">Email</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->email }}</p>
                            </div>

                            <div class="col-md-4">
                                <label class="" for="inputFirstName">No Hp</label>
                            </div>
                            <div class="col-md-8">
                                <p>: {{ $alumni->no_telp }}</p>
                            </div>

                        </div>
                        
                        <a href="{{ url('admin/alumni') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection