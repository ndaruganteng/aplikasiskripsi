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
                <!-- <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/background/paket.jpg" class="mx-auto d-block w-25 " alt="gambar" />
                                </div>               
                            </div>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                    
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Herman Beck
                                                </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $ 77.99
                                                </td>
                                                <td>
                                                    May 15, 2015
                                                </td>
                                            </tr>
                                        
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th>
                                                    First name
                                                </th>
                                                <th>
                                                    Progress
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
                                                <th>
                                                    Deadline
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="content-wrapper" style="min-height: 1566.8px;">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Detail Data Tour</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Data Tour</li>
                            </ol>
                        </div>
                        </div>
                    </div><!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="content">

                    <!-- Default box -->
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
                                        <h4 class="#">Nama Biro :</h4>
                                        <p>Jamal Tour</p>
                                    </div> 
                                    <div>
                                        <h4 class="#">Harga :</h4>
                                        <p>Rp 1.000.000</p>
                                    </div> 
                                    <div>
                                        <h4 class="#">Highlight :</h4>
                                        <p>  Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                    </div>
                                    <div>
                                        <h4 class="#">Kuota :</h4>
                                        <p>40 Orang </p>
                                    </div>  
                                    <div>
                                        <h4 class="#">Tanggal Berangkat :</h4>
                                        <p> 20 Juli 2023</p>
                                    </div>  
                                    <div>
                                        <h4 class="#">Tanggal Berakhir :</h4>
                                        <p> 20 Juli 2023</p>
                                    </div>  
                                    <hr>

                                </div>
                            </div>
                            <div class="row mt-4">
                                <nav class="w-100">
                                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                                        <a class="nav-item nav-link" id="product-fasilitas-tab" data-toggle="tab" href="#product-fasilitas" role="tab" aria-controls="product-fasilitas" aria-selected="false">Fasilitas</a>
                                        <a class="nav-item nav-link" id="product-lokasi-tab" data-toggle="tab" href="#product-lokasi" role="tab" aria-controls="product-lokasi" aria-selected="false">Maps</a>
                                    </div>
                                </nav>
                                <div class="tab-content p-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
                                    <div class="tab-pane fade" id="product-lokasi" role="tabpanel" aria-labelledby="product-lokasi-tab"> 
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1833.7810144361779!2d109.10500244190945!3d-6.868313711232319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9e2805c1c1b%3A0xe3e61e1ae59106ff!2sPoliteknik%20Harapan%20Bersama!5e0!3m2!1sid!2sid!4v1688427548329!5m2!1sid!2sid" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    </section>
                    <!-- /.content -->
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

