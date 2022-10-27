@extends('template.alumni')
@section('content')
    @include('section.alumni')
    
    <div class="courses app-section" style="margin-top: 3%">
		<div class="container">
			<div class="app-title">
				<h4>Data Perusahaan</h4>
				<div class="line"></div>
			</div>

            <div class="row">
				@foreach ($list_perusahaan as $perusahaan)
				<div class="col s4">
					<div class="entry">
						<img src="{{ url("public/$perusahaan->poto") }}" style="object-fit: cover; position: static; width: 40%;">
						<h5>
							{{ $perusahaan->nama_perusahaan }}
						</h5>
						<p>
							{{ $perusahaan->alamat }}
						</p>
					</div>
				</div>
				@endforeach
			</div>

        </div>
    </div>
@endsection
