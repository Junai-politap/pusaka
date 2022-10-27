@extends('template.alumni')
@section('content')
    @include('section.alumni')

    <div class="product-cart app-pages app-section">
		<div class="container">
            <div class="entry">
			<div class="pages-title">
				<h3>Data Lowongan</h3>
			</div>
            </div>
			<div class="entry">
				<div class="cart-title">
                    @foreach ($list_lowongan as $lowongan)
                     
					<div class="row">
                      
						<div class="col s4">
							<img src="{{ url("public/$lowongan->poto") }}" style="object-fit: cover; position: static; width: 100%;">
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

                        <div class="col s1">
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
