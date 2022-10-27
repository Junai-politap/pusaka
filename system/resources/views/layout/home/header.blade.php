<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-university me-3"></i>PUSAKA</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('lowongan') }}" class="nav-item nav-link active {{ checkRouteActive('lowongan') }}">
                <i class="fa fa-info-circle"></i> Lowongan
            </a>

            <a href="{{ url('perusahaan') }}" class="nav-item nav-link {{ checkRouteActive('perusahaan') }}">
                <i class="fa fa-building"></i> Perusahaan
            </a>

            <a href="{{ url('kegiatan') }}" class="nav-item nav-link {{ checkRouteActive('kegiatan') }}">
                <i class="fa fa-calendar"></i> Kegiatan
            </a>

            {{-- <a href="{{url('informasi')}}" class="nav-item nav-link">
                <i class="fa fa-question"></i> Informasi
            </a> --}}

            <a href="{{ url('galeri') }}" class="nav-item nav-link {{ checkRouteActive('galeri') }}">
                <i class="fa fa-camera"></i> Galeri
            </a>

            <a href="{{ url('tracer') }}" class="nav-item nav-link {{ checkRouteActive('page404') }}">
                <i class="fa fa-industry"></i> Tracer Study
            </a>

            <!--  <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a> -->
        </div>
        <a href="{{ url('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">login<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
