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
                                    <h3 class="m-0 ">Edit Data Tour</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{ route('datatour.index') }}"><- Kembali</a></li>
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
                                            <h3 class="text-center ">Edit Data Tour</h3>
                                        </div>
                                        <form action="{{ url('/datatour/update/'.$tour->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                            <div class="card-body">
                                            <input type="hidden" name="id" id="id" value="{{ $tour->id }}">
                                                <div class="form-group">
                                                    <label for="nama">Image</label>
                                                    <input type="file" class="form-control"   value="{{ $tour->image}}"   name="image">
                                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama biro">Nama Biro</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Nama Biro" value="{{ $tour->namabiro}}"  name="namabiro">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama tour">Nama Tour</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Judul Tour" value="{{ $tour->namatour}}"  name="namatour">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Kategori">Kategori</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Kategori Tour" value="{{ $tour->kategori}}" name="kategori">
                                                </div>
                                                <div class="form-group">
                                                    <label for="highlight">Highlight</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Highlight Tour" value="{{ $tour->highlight}}"  name="highlight">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kuota">Kuota</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Kuota Tour" value="{{ $tour->kuota}}"  name="kuota">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal berangkat">Tanggal Berangkat</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Tanggal Berangkat" value="{{ $tour->tanggalberangkat}}"  name="tanggalberangkat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal berakhir">Tanggal Berakhir</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Tanggal Berakhir" value="{{ $tour->tanggalberakhir}}"  name="tanggalberakhir">
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga </label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Harga Tour" value="{{ $tour->harga}}"  name="harga">
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi">Description</label>
                                                    <input id="deskripsi" type="hidden" value="{{ $tour->deskripsi}}"  name="deskripsi" >
                                                    <trix-editor input="deskripsi"></trix-editor>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fasilitas">Fasilitas</label>
                                                    <input id="fasilitas" type="hidden" value="{{ $tour->fasilitas}}"  name="fasilitas" >
                                                    <trix-editor input="fasilitas"></trix-editor>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lokasi">Link Lokasi</label>
                                                    <input type="text" class="form-control"  placeholder="Masukan Link Lokasi Tour" value="{{ $tour->lokasi}}"  name="lokasi">
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

