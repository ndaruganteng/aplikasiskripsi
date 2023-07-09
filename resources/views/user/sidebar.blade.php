<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('user.index') }}" class="brand-link">
      <img src="/images/icon/iconbg.png" alt=" Logo" class="brand-image img-circle " style="opacity: .8">
      <span class="brand-text fw-bold font-weight-light">THELEMA</span>
    </a>
    <div class="sidebar flex">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/icon/profile.png" class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('profile.index') }}" class="d-block">Jamal</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
          </li> -->
          <li class="nav-item">
                <a href="{{ route('userprofile.index') }}" class="nav-link">          
                <i class="nav-icon fa-solid fa-users-gear"></i>
                  <p>
                    Profile
                  </p>
                </a>
          </li>
          <!-- <li class="nav-item user-panel">
                <a href="{{ route('home.index') }}" class="nav-link">          
                  <i class=" nav-icon fa-solid fa-arrow-left"></i>
                  <p>back</p>
                </a>
          </li>
          <li class="nav-item user-panel">
                <a href="#" class="nav-link">          
                  <i class=" nav-icon fa-solid fa-right-from-bracket"></i>
                  <p> Log out </p>
                </a>
          </li> -->
        </ul>
      </nav>
    </div>
  </aside>
