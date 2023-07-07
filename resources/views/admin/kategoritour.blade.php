
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
        @include('admin.header')
        <div class="container-fluid page-body-wrapper">
        @include('admin.sidebar')
        @include('admin.setting')
        @include('sweetalert::alert')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                            <h1 class="m-0">Kategori Tour</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kategori Tour</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                    </div>
                    <section class="content ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                    <div class="row m-3 pt-2">
                                            <div class="col-sm-6">
                                                <div class="#">
                                                    <div class="container-fluid">
                                                        <form class="d-flex">
                                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                            <button class="ml-3 btn btn-dark" type="submit">Search</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="float-sm-right">
                                                    <a href="{{ route('tambahkategori.index') }}">
                                                        <button  type="submit" class="btn btn-dark flex" value="Submit" value="Submit" >
                                                            Tambah Kategori
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-center fs-6">
                                                        <th>Image</th>
                                                        <th>Nama Kategori</th> 
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                @foreach($kategori as $p)
                                                <tbody class="fs-6">
                                                    <tr class="text-center text-break">
                                                        <td><img src="{{asset('storage/image/kategori/'.$p->image)}}" class="img-fluid" alt="" /></td>  
                                                        <td>{{ $p->namakategori}}</td>
                                                        <td>
                                                            <div class="btn flex">
                                                                <a href="/kategoritour/edit/{{ $p->id }}">
                                                                    <button type="button" class="btn btn-warning">
                                                                        <i class="fa-solid fa-pen-to-square"></i> 
                                                                    </button> 
                                                                </a>
                                                                <a href="/kategoritour/hapus/{{ $p->id }}">
                                                                    <button type="button" class="btn btn-danger">
                                                                        <i class="fa-solid fa-trash-can"></i> 
                                                                    </button> 
                                                                </a>       
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                            </table>
                                            <div class="m-3 float-right">
                                                {{ $kategori->links() }}
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

