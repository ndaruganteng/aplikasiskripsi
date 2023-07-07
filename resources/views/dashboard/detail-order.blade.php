<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Thelema - Dahsboard </title>
  <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/icon/iconbg.png"
    />
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('template')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- trixeditor -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('template')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('template')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
 
</head>
<body>

    <div class="container-scroller">
        @include('dashboard.header')
        <div class="container-fluid page-body-wrapper">
        @include('dashboard.sidebar')
        @include('dashboard.setting')
            <div class="main-panel">         
                <div class="content-wrapper" style="min-height: 1566.8px;">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Detail Data Order</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                                        <li class="breadcrumb-item active">Detail Data Tour</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="content">
                        <div class="card card-solid">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="col-12 product-image-thumbs">
                                            <div class="product-image-thumb active"><img src="images/background/paket.jpg" class="w-100" alt="Product Image"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h2 class="my-3">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h2>
                                        <div>
                                            <h4 class="#">Kode Booking:</h4>
                                            <p>1234567890</p>
                                        </div> 
                                        <div>
                                            <h4 class="#">Nama Lengkap:</h4>
                                            <p>Jamal</p>
                                        </div> 
                                        <div>
                                            <h4 class="#">Email:</h4>
                                            <p>Jamal@gmail.com</p>
                                        </div> 
                                        <div>
                                            <h4 class="#">No Telepon:</h4>
                                            <p>1234567890</p>
                                        </div> 
                                        <div>
                                            <h4 class="#">Jumlah Orang:</h4>
                                            <p>1</p>
                                        </div> 
                                        <div >
                                            <h4 class="#">Total Harga :</h4>
                                            <p>Rp 1.000.000</p>
                                        </div>  
                                        <div>
                                            <h4 class="#">Status Pembayaran:</h4>
                                            <p>Berhasil</p>
                                        </div>  
                                        <div>
                                            <h4 class="#">Waktu Pemesanan :</h4>
                                            <p>06-07-2023 08:30</p>
                                        </div>  
                                        <div>
                                            <h4 class="#">Bukti Transfer :</h4>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!-- <a href="images/background/bukti.jpg?bukti=1" target="blank" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                                                        <img src="images/background/bukti.jpg?bukti=1" class="img-fluid mb-2" alt="red sample">
                                                    </a> -->
                                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#buktiModal">
                                                                <i class="fa-solid fa-image"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="modal fade" id="buktiModal" tabindex="-1" role="dialog" aria-labelledby="buktiModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="buktiModalLabel">Image Bukti Transfer </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <div class="modal-body">
                                            <!-- Formulir Edit Data Mahasiswa -->
                                            <div class="img-fluid">
                                                <img src="images/background/bukti.jpg" class="img-fluid" alt="" />
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @include('dashboard.footer')
            </div>
        </div>
    </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('template')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('template')}}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{asset('template')}}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{asset('template')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="{{asset('template')}}/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('template')}}/js/off-canvas.js"></script>
  <script src="{{asset('template')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('template')}}/js/template.js"></script>
  <script src="{{asset('template')}}/js/settings.js"></script>
  <script src="{{asset('template')}}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('template')}}/js/dashboard.js"></script>
  <script src="{{asset('template')}}/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

