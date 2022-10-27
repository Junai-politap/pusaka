@extends('template.home')

@section('content')
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Daftar</h6>
                <h1 class="mb-5">Perusahaan</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        @foreach ($list_perusahaan as $perusahaan)
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a class="position-relative d-block overflow-hidden"
                                    href="{{ url("perusahaan/$perusahaan->id_perusahaan") }}">
                                    <img src="{{ url("public/$perusahaan->poto") }}"
                                        style="object-fit: cover; position: static; height: 200px; border-radius: 15px;">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">{{ $perusahaan->nama_perusahaan }}</h5>
                                        <small class="text-primary">{{ $perusahaan->alamat }}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
