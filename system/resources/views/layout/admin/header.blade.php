<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ url("public/$user->foto") }}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{ $user->nama }} <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h6 class="m-0">
                        Welcome ! {{ $user->nama }}
                    </h6>
                </div>

                
                <!-- item-->
                <a href="{{ url('admin/user') }}" class="dropdown-item notify-item">
                    <i class="dripicons-gear"></i>
                    <span>Setting</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="{{ url('logout') }}" class="dropdown-item notify-item">
                    <i class="dripicons-power"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
           
        </li>

    </ul>

    <ul class="list-unstyled menu-left mb-0">
        <li class="float-left">
            <a href="{{ url('/admin') }}" class="logo">
                <span class="logo-lg">
                    <img src="{{ url('public') }}/logo.png" alt="" height="50">
                </span>
                <span class="logo-sm">
                    <img src="{{ url('public') }}/politap.png" alt="" height="24">
                </span>
            </a>
        </li>
        <li class="float-left">
            <a class="button-menu-mobile navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </li>
        <li class="app-search d-none d-md-block">
            
        </li>
    </ul>
</div>