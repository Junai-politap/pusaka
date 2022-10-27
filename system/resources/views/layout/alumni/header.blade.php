<div class="navbar">
    <div class="container">
        <div class="panel-control-left">
            <a href="#" data-activates="slide-out-left" class="sidenav-control"><i class="fa fa-bars"></i></a>
        </div>
        <div class="site-title">
            <a href="{{ url('alumni') }}" class="logo">
                <h1>
                    PUSAKA - POLITAP
                </h1>
            </a>
        </div>

    </div>
</div>

<div class="panel-control-left">
    <ul id="slide-out-left" class="side-nav collapsible" data-collapsible="accordion">
        @yield('profil')
        
        <li class="first-list">
            <a href="{{ url('alumni') }}"><i class="fa fa-home"></i>Dashboard</a>
        </li>

        <li>
            <div class="collapsible-header"><i class="fa fa-file"></i>Berkas Lamaran <span><i class="fa fa-chevron-right"></i></span></div>
            <div class="collapsible-body">
                <ul class="side-nav-panel">
                    <a href=""><li class="fa fa-check">  Lamaran Baru</li></a>
                    <a href=""><li class="fa fa-check">  Lamaran Diterima</li></a>
                    <a href=""><li class="fa fa-check"> Lamaran Ditolak</li></a>
                    
                </ul>
            </div>
        </li>
        
        <li>
            <a href="{{ url('alumni/lowongan') }}"><i class="fa fa-info-circle"></i>Lowongan</a>
        </li>

        <li>
            <a href="{{ url('alumni/perusahaan') }}"><i class="fa fa-building"></i>Perusahaan</a>
        </li>

        <li>
            <a href=""><i class="fa fa-calendar"></i>Kegiatan</a>
        </li>
        <li>
            <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}"><i class="fa fa-sign-out" ></i>Logout</a>
        </li>
        
    </ul>
</div>
