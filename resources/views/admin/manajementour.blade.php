<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Thelema - Dahsboard Admin</title>
  <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/icon/iconbg.png"
    />
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('template')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- trixeditor -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
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
        @include('admin.header')
        <div class="container-fluid page-body-wrapper">
        @include('admin.sidebar')
        @include('admin.setting')
            <div class="main-panel">        
                <div class="content-wrapper">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Manajemen Tour</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Manajemen Tour</li>
                                </ol>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main content -->
                    <section class="content ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                    <h3 class="text-uppercase mx-auto mt-3">Data Tour</h3>
                                        <div class="card-body table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="text-center fs-6">
                                                        <th>Judul Tour</th>
                                                        <th>Kategori</th>
                                                        <th>Harga/pax</th>
                                                        <th>Waktu</th>
                                                        <th>Nama Biro </th>
                                                        <th>Verifikasi </th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-6">
                                                    <tr class="text-center text-break">  
                                                        <td>Open Trip Tour Wisata Labuan Bajo</td>
                                                        <td>Wisata Alam</td>
                                                        <td>Rp 8.000.000</td>
                                                        <td>4D2N</td>
                                                        <td>Happy Tour</td>
                                                        <td>verified</td>
                                                        <td>
                                                            <div class="btn flex">
                    
                                                                <a
                                                                    href="#"
                                                                >
                                                                    <button
                                                                        type="submit"
                                                                        class="btn btn-primary"
                                                                        value="Submit"
                                                                    >
                                                                        <i
                                                                            class="fa-solid fa-eye"
                                                                        ></i>
                                                                        Detail
                                                                    </button>
                                                                </a>
                                                                <a
                                                                    href="#"
                                                                >
                                                                    <button
                                                                        type="button"
                                                                        class="btn btn-danger"
                                                                    >
                                                                        <i class="fa-solid fa-ban"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center text-break">  
                                                        <td>Open Trip Tour Wisata Bali</td>
                                                        <td>Wisata Alam</td>
                                                        <td>Rp 8.000.000</td>
                                                        <td>4D2N</td>
                                                        <td>Happy Tour</td>
                                                        <td>un-verified</td>
                                                        <td>
                                                            <div class="btn flex">
                    
                                                                <a
                                                                    href="#"
                                                                >
                                                                    <button
                                                                        type="submit"
                                                                        class="btn btn-primary"
                                                                        value="Submit"
                                                                    >
                                                                        <i
                                                                            class="fa-solid fa-eye"
                                                                        ></i>
                                                                        Detail
                                                                    </button>
                                                                </a>
                                                                <a
                                                                    href="#}"
                                                                >
                                                                    <button
                                                                        type="button"
                                                                        class="btn btn-success"
                                                                    >
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="pt-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @include('admin.footer')
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

