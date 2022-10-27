@extends('template.admin')
@section('content')
    @include('section.notif')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                            </ol>
                        </div>
                        <h4 class="page-title"> Edit Data User</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/user',$user->id) }}/update" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="confirmasi_password" value="{{ $user->confirmasi_password }}">
                                </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Foto</label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$user->foto") }}" style="object-fit: cover; position: static; width: 50%; height:100%;">
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" name="foto" value="{{ $user->foto }}" accept=".jpg, .png, .jpeg" >
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-primary float-left rounded"><span class="fa fa-save"></span>
                                        Simpan</button>
                                </div>
                            </div>

                        </form>

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection
