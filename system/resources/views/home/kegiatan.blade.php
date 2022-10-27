@extends('template.home')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            @foreach ($list_kegiatan as $kegiatan)
                <div class="row g-5 mt-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute" src="{{ url("public/$kegiatan->poto") }}" alt=""
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                        <h1 class="mb-4">
                            {{ $kegiatan->nama_kegiatan }}
                        </h1>
                        <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                        <p class="mb-4">
                            {!! nl2br($kegiatan->detail) !!}
                        </p>
                        <a class="btn btn-primary py-3 px-5 mt-2"
                            href="{{ url("kegiatan/$kegiatan->id_kegiatan") }}">Detail</a>
                    </div>
                </div>
            @endforeach
            <br><br>
        </div>
    </div>
@endsection
