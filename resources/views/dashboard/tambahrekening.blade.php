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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        @include('dashboard.header')
        <div class="container-fluid page-body-wrapper">
        @include('dashboard.sidebar')
        @include('dashboard.setting')
        @include('sweetalert::alert')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <h3 class="m-0 ">Tambah Data Tour</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{ route('datarekening.index') }}"><- Kembali</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="text-center ">Input Data Tour</h3>
                                        </div>
                                        <form action="{{ route('Rekening.index') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="nama">Image</label>
                                                    <input type="file" class="form-control"  required="required"  name="imagerek">
                                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama rekening">Nama rekening</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Nama Rekening" required="required" name="namarekening">
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for="nama bank">Minimal</label>
                                                    <select class="form-control select2 select2-hidden-accessible" type="text" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                        <option selected="selected" data-select2-id="3">Nama Bank</option>
                                                        <option data-select2-id="82">Bank BCA</option>
                                                        <option data-select2-id="83">Bank BRI</option>
                                                        <option data-select2-id="84">Bank BNI</option>
                                                        <option data-select2-id="85">Bank Mandiri</option>
                                                    </select>                                                 
                                                </div> -->
                                                <div class="form-group">
                                                    <label for="nama bank">Nama Bank</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Nama Bank" required="required" name="namabank">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nomor rekening">Nomor rekening</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Nomor Rekening " required="required" name="nomorrekening">
                                                </div>
                                                <div class=" mx-auto">
                                                    <button type="submit" class="btn btn-dark " value="Simpan Data">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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

