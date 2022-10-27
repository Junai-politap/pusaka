@extends('template.home')

@section('content')
    <div class="container-xxl category">
        <div class="container">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 col-md-12">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="section-title bg-white text-center text-primary px-3">Daftar</h6>
                            <h1 class="mb-5">Galeri</h1>
                        </div>
                        <div class="row g-2 pt-2">
                            @foreach ($list_galery as $galery)
                                <div class="col-4">
                                    <img class="img-fluid bg-light p-1" src="{{ url("public/$galery->poto_kegiatan") }}"
                                        style="object-fit: cover; position: static; width: 100%;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
