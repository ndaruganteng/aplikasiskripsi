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
                                        <li class="breadcrumb-item"><a href="{{ route('updatetour.index') }}"><- Kembali</a></li>
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
                                        <form action="#" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nama">Image</label>
                                                <input type="file" class="form-control"  required="required"  name="image">
                                                <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="jobs">Nama Agen</label>
                                                <input type="text" class="form-control"  placeholder="Masukan Jobs" required="required" name="namaagen">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Judul</label>
                                                <input type="text" class="form-control"  placeholder="Masukan Tittle" required="required" name=" judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Durasi</label>
                                                <input type="text" class="form-control"  placeholder="Masukan Tittle" required="required" name=" durasi">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Highlight</label>
                                                <input type="text" class="form-control"  placeholder="Masukan Tittle" required="required" name=" highlight">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Harga</label>
                                                <input type="text" class="form-control"  placeholder="Masukan Tittle" required="required" name=" harga">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Tanggal Berangkat</label>
                                                <input type="text" class="form-control"  placeholder="Masukan Tittle" required="required" name="tanggalberangkat">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Tanggal Berakhir</label>
                                                <input type="text" class="form-control"  placeholder="Masukan Tittle" required="required" name="tanggalberakhir">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Kuota</label>
                                                <input type="text" class="form-control"  placeholder="Masukan Tittle" required="required" name="kuota">
                                            </div>
                                            <div class="form-group">
                                                <label for="desc">Description</label>
                                                <input id="description" type="hidden" name="description" >
                                                <trix-editor input="description"></trix-editor>
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

