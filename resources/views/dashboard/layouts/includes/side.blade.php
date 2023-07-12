<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard.index') }}" class="brand-link">
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
       
          <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
          </li>
          @if(auth()->user()->role == "biro")
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
          <li class="nav-item user-panel">
              <a href="{{ route('manajemenorder.index') }}" class="nav-link">          
                <i class="nav-icon fa-solid fa-cart-shopping"></i>
                <p>
                  Manajemen Order
                </p>
              </a>
          </li>
          @endif
          @if(auth()->user()->role == "admin")
          <li class="nav-item">
                <a href="{{ route('manajementour.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-shop"></i>
                  <p>
                    Manajemen tour
                  </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('manajemenuser.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-user"></i>
                  <p>
                    Manajemen User
                  </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('kategoritour.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-list"></i>
                  <p>
                    kategori
                  </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('requestmitra.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-list"></i>
                    <p>
                      Request Mitra
                    </p>
                </a>
          </li>
          @endif
          <li class="nav-item">
                <a href="/logout" class="nav-link">          
                  <i class=" nav-icon fa-solid fa-right-from-bracket"></i>
                  <p> Log out </p>
                </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

