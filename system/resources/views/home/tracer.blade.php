@extends('template.home')

@section('content') 

<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="section-title bg-white text-center text-primary px-3">Tracer Study</h1>
    </div>
    <div class="col-lg-12">
      <form action="" method="post" role="form" class="php-email-form">
        <div class="form-group">
          <p>Nomor Induk Mahasiswa (NIM)</p>
          <input type="text" class="form-control" name="subject" placeholder="Masukan NIM Anda" autocomplete="off">
        </div>
        <br>
        <div class="row">
          <div class="col form-group">
            <label for=""> Tanggal Lahir</label>
            <input type="text" name="name" class="form-control text-center" placeholder="Juni" autocomplete="off">
          </div>
          <div class="col form-group">
            <label for=""></label>
            <input type="text" class="form-control text-center" placeholder="09" autocomplete="off">
          </div>
          <div class="col form-group">
            <label for=""></label>
            <input type="text" class="form-control text-center" placeholder="2000" autocomplete="off">
          </div>
        </div><br>
        <div class="text-center">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Validasi Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
