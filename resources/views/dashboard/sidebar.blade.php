 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard.index') }}" class="brand-link">
      <img src="/images/icon/iconbg.png" alt=" Logo" class="brand-image img-circle " style="opacity: .8">
      <span class="brand-text fw-bold font-weight-light">THELEMA</span>
    </a>
    <div class="sidebar">
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
          <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('datatour.index') }}" class="nav-link">          
                <i class="nav-icon fa-solid fa-shop"></i>
                  <p>
                    Data Tour
                  </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('datarekening.index') }}" class="nav-link">          
                  <i class="nav-icon fa-sharp fa-solid fa-money-check-dollar"></i>
                  <p>
                    Rekening
                  </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('manajemenorder.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-cart-shopping"></i>
                  <p>
                    Manajemen Order
                  </p>
                </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
