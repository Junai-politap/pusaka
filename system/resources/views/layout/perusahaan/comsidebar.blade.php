<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list"><br>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item ">
                        <a class="nav-link {{ checkRouteActive('page-perusahaan') }}"
                            href="{{ url('page-perusahaan') }}"><i class="fa fa-fw fa-home"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ checkRouteActive('lowongan-page') }}"
                            href="{{ url('lowongan-page') }}"><i class="fa fa-fw fa-list"></i>
                            Lowongan
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ checkRouteActive('pelamar-page') }}"
                            href="{{ url('pelamar-page') }}"><i class="fa fa-fw fa-users"></i>
                            Pelamar
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ checkRouteActive('diterima-page') }}"
                            href="{{ url('diterima-page') }}"><i class="fa fa-fw fa-check"></i>
                            Lamaran Diterima
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ checkRouteActive('ditolak-page') }}"
                            href="{{ url('ditolak-page') }}"><i class="fa fa-fw fa-times"></i>
                            Lamaran Ditolak
                        </a>
                    </li>

                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
