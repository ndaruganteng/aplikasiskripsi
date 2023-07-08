  <!-- Main Sidebar  -->


  <aside class="main-sidebar sidebar-dark-primary  ">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/images/icon/iconbg.png" alt=" Logo" class="brand-image img-circle">
      <span class="brand-text fw-bold font-weight-light">THELEMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/icon/profile.png" class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('manajementour.index') }}" class="nav-link">          
                <i class="nav-icon fa-solid fa-shop"></i>
                  <p>
                    Manajemen Tour
                  </p>
                </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-users-gear"></i>
              <p>
              Manajemen User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('manajemenusermember.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manajemenuserbiro.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Biro wisata</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="{{ route('kategoritour.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-list"></i>
                  <p>
                    Kategori Tour
                  </p>
                </a>
          </li>
          <li class="nav-item user-panel">
                <a href="{{ route('requestmitra.index') }}" class="nav-link">          
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Request Mitra
                  </p>
                </a>
          </li>
          <li class="nav-item ">
                <a href="{{ route('requestmitra.index') }}" class="nav-link">          
                  <i class=" nav-icon fa-solid fa-right-from-bracket"></i>
                  <p> Log out </p>
                </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>