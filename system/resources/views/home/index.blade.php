@extends('template.home')

@section('content')

<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach ($list_slide as $slide)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ url("public/$slide->foto") }}"
                style="object-fit: cover; position: static; width: 100%;">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h1 class=" text-white animated slideInDown">
                                {{ $slide->title }}
                            </h1>
                            <p class="fs-5 text-white mb-4 pb-2">

                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        @endforeach
    </div>
</div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Daftar</h6>
                <h1 class="mb-5">Lowongan</h1>
            </div>
            <div class="row g-4 card-box">
                <table>
                    @foreach ($list_lowongan as $lowongan)
                        @if ($lowongan->status == 'Buka')
                            <div class="d-flex border-top border-end">
                                <div class="col-lg-3 mt-2">
                                    <div class="card-box">
                                        <img src="{{ url("public/$lowongan->poto") }}"
                                            style="width: 100%; height: 100%; border-radius: 15px; object-fit: cover; position: static;">
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-2" style="margin-left: 5%;">
                                    <ul>
                                        <h5>{{ $lowongan->nama_lowongan }}</h5>
                                        <p>Di Butuhkan Segera</p>
                                        <p>
                                            <strong>
                                                {{ $lowongan->perusahaan->nama_perusahaan }}
                                            </strong>
                                        </p>
                                        <p>
                                            {{ date('d-M-Y', strtotime($lowongan->created_at)) }}
                                        </p>
                                        <p>
                                            {{ $lowongan->fungsi_kerja }}
                                        </p>
                                        <p>{{ $lowongan->jurusan }}</p>
                                    </ul>
                                </div>
                                <div class="col-lg-3 mt-2" style="margin-left: 5%;">
                                    <p>
                                        {!! nl2br($lowongan->persyaratan) !!}
                                    </p>
                                </div>
                                <div class="col-lg-3 mt-2">
                                    <a href="{{ url('login') }}" class="btn btn-primary"
                                        style="width: 50%; border-radius: 10px; margin-top: 20%"><i
                                            class="fa fa-paper-plane"></i> Lamar</a>
                                    <br><br>

                                </div>
                            </div>
                            <div class="d-flex border-top border-end"></div>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
