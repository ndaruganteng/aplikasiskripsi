<!-- <div class="content-wrapper">
  <nav class=" navbar navbar-expand navbar-white elevation-2">
    <div class="nabar-nav">
      <div class="nav-item">
        <h3 class=" pl-3 d-block">Selamat Datang Jamal</h3>
      </div>   
    </div>
   
  </nav>
    <div>
      <img src="images/dashboard/background.png" class="mx-auto d-block w-50 " alt="gmbrdsh" />
    </div>
</div> -->

<div class="content-wrapper" style="min-height: 574.4px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>5</h3>
                <p>Total Tour</p>
              </div>
              <div class="icon">
                <i class=" ion fa-solid fa-cart-shopping"></i>
              </div>
              <a href="{{ route('datatour.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>3</h3>
                <p>Rekening</p>
              </div>
              <div class="icon">
                <i class="ion fa-solid fa-credit-card"></i>
              </div>
              <a href="{{ route('datarekening.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>Pesanan Terkonfirmasi</p>
              </div>
              <div class="icon">
              <i class="ion fa-solid fa-check"></i>
              </div>
              <a href="{{ route('manajemenorder.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>
                <p>Pesanan Pending</p>
              </div>
              <div class="icon">
                <i class="ion fa-solid fa-ban"></i>
              </div>
              <a href="{{ route('manajemenorder.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>