@extends('template.alumni')
@section('content')

    @include('section.alumni')
	<div class="slider-slick app-pages">
		@foreach ($list_slide as $slide)			
		<div class="slider-entry" style="height: 250%">
			<img class="img-fluid" src="{{ url("public/$slide->foto") }}"
                    style="object-fit: cover; position: static; width: 100%;">
			<div class="overlay"></div>
			<div class="caption">
				<div class="container">
					<h2>
						{{ $slide->title }}
					</h2>
					<br>
					
				</div>
			</div>
		</div>
		@endforeach
		
	</div>

	<div class="product-cart app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Data Lowongan</h3>
			</div>
			<div class="entry">
				<div class="cart-title">
                    @foreach ($list_lowongan as $lowongan)
                     
					<div class="row">
                      
						<div class="col s3">
							<img src="{{ url("public/$lowongan->poto") }}" alt="">
						</div>
						<div class="col s3">
							<h4>{{ $lowongan->nama_lowongan }}</h4>
						</div>

                        <div class="col s4">
                            <p>- {{ $lowongan->fungsi_kerja }}</p>
                            <p>- {{ $lowongan->jenjang_karir }}</p>
                            <p>- {{ $lowongan->pengalaman }}</p>
                            <p>- {{ $lowongan->jurusan }}</p>
                            <p>- {{ $lowongan->spesifikasi }}</p>
							<p style="text-align: justify">- {{ $lowongan->persyaratan }}</p>
						</div>

                        <div class="col s2">
							<a href="" class="btn btn-primary"><i class="fa fa-send"></i></a>
						</div>
					</div>
					<hr>
					
                       
                    @endforeach
				</div>
				
			</div>
			
		</div>
	</div>

@endsection
