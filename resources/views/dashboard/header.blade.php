<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5 fw-bold" href="index.html"><img src="/images/dashboard/logo.png" class="mr-2" alt="logo"/>THELEMA</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/images/dashboard/logo.png" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="images/icon/profile.png " alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{ route('dashboard.index') }}">
                    <i class="fa-solid fa-house text-primary"></i>
                    <!-- <i class="fa-regular fa-house text-primary"></i> -->
                    home
                </a>
                <a class="dropdown-item " href="{{ route('profile.index') }}">
                    <!-- <i class="ti-settings text-primary"></i> -->
                    <i class="fa-solid fa-user text-primary"></i>
                    profile
                </a>
                <a class="dropdown-item" href="#">
                    <!-- <i class="ti-power-off text-primary"></i> -->
                    <i class="fa-solid fa-right-from-bracket text-primary"></i>
                    Logout
                </a>
            </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>