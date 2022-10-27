@section('profil')
    <li>
        <div class="photos">
            <img src="{{ url("public/$alumni->poto") }}" onerror="this.src='{{ url('public') }}/avatar.png'">
            <h3>{{ $alumni->nama_lengkap }}</h3>
        </div>
    </li>
@endsection
