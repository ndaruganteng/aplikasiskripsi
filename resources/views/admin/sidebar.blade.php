      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <!-- <li class="nav-header"> BIRO WISATA</li> -->
          <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.index') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard Admin</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="{{ route('manajementour.index') }}">
                  <i class="fa-solid fa-shop menu-icon"></i>
                  <span class="menu-title">Manajemen Tour</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fa-solid fa-users-gear menu-icon"></i>
              <span class="menu-title">Manajemen User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('manajemenusermember.index') }}">User</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('manajemenuserbiro.index') }}">Biro Wisata</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="{{ route('kategoritour.index') }}">
                  <i class="fa-solid fa-list menu-icon"></i>
                  <span class="menu-title">Kategori Tour</span>
              </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->