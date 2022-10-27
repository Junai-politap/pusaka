@extends('template.home')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            @csrf
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ url("public/$kegiatan->poto") }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                    <h1 class="mb-4">{{ $kegiatan->nama_kegiatan }}</h1>
                    <p class="mb-4">
                        {!! nl2br($kegiatan->detail) !!}
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($list_galery as $galery)
                    @if ($galery->id_kegiatan == $kegiatan->id_kegiatan)
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <img class="img-fluid" src="{{ url("public/$galery->poto_kegiatan") }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection
