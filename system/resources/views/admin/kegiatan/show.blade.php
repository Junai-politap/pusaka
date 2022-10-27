@extends('template.admin')
@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title text-center">
                            <h4>Detail Kegiatan</h4>
                        </div>

                    </div>
                </div>
            </div>
            @csrf
            <div class="product-wrap">
                <div class="product-detail-wrap mb-30">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 ">

                            <img src="{{ url("public/$kegiatan->poto") }}" alt="">

                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="product-detail-desc pd-20 card-box height-100-p">
                                <h4 class="mb-20 pt-20">{{ $kegiatan->nama_kegiatan }}</h4>
                                <p>
                                    {!! nl2br($kegiatan->detail) !!}
                                </p>

                                <div class="price">
                                    <ins>{{ $kegiatan->waktu_kegiatan }}</ins>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title text-center">
                                <h4 class="mb-20">Poto Kegiatan</h4>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="product-list">
                    <ul class="row">
                        @foreach ($list_galery as $galery)
                            @if ($galery->id_kegiatan == $kegiatan->id_kegiatan)
                                <li class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="{{ url("public/$galery->poto_kegiatan") }}"
                                                alt="">
                                        </div>

                                    </div>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
