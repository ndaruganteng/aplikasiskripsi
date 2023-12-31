@extends('dashboard.layouts.app')
@section('content')

@if(auth()->user()->role == "biro")
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
@endif
@if(auth()->user()->role == "admin")
<div class="content-wrapper" style="min-height: 574.4px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
                <h3>25</h3>
                <p>Total Tour</p>
              </div>
              <div class="icon">
                <i class=" ion fa-solid fa-cart-shopping"></i>
              </div>
              <a href="{{ route('manajementour.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>10</h3>
                <p>Request Mitra</p>
              </div>
              <div class="icon">
                <i class="ion fa-solid fa-envelope"></i>
              </div>
              <a href="{{ route('requestmitra.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
              </div>
              <div class="icon">
              <i class="ion fa-solid fa-user"></i>
              </div>
              <a href="{{ route('manajemenuser.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>3</h3>
                <p>Kategori Tour</p>
              </div>
              <div class="icon">
                <i class="ion fa-solid fa-gear"></i>
              </div>
              <a href="{{ route('kategoritour.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div>
    </section>
</div>
@endif

@endsection
