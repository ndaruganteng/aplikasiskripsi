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
              <div class="content-wrapper" style="min-height: 2646.8px;">
                <section class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1>Profile</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                          <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
                </section>
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card card-primary card-outline">
                          <div class="card-body box-profile">
                            <div class="text-center">
                              <img class="profile-user-img img-fluid img-circle" src="images/icon/profile.png" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">Jamal</h3>
                            <p class="text-muted text-center">Biro Wisata</p>
                            <ul class="list-group  mb-3">
                              <!-- <li class="list-group-item">
                                <b>whatsapp</b>
                                <a class="float-right" href="https://wa.me/085647019630" target="blank">
                                  <i class="fa-brands fa-whatsapp"></i>
                                </a>
                              </li> -->
                              <li class="list-group-item">
                                <b>Facebook</b> 
                                <a class="float-right" href="https://www.facebook.com/adek.gantengs/" target="blank">
                                  <i class="fa-brands fa-facebook"></i>
                                </a>
                              </li>
                              <li class="list-group-item">
                                <b>Instagram</b> 
                                <a class="float-right" href="https://www.instagram.com/namakualberttt/" target="blank">
                                  <i class="fa-brands fa-instagram"></i>
                                </a>
                              </li>
                            </ul>
                            <a href="{{ route('editprofile.index') }}" class="btn btn-info btn-block"><b>Edit Profile</b></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="card">
                          <div class="card-header p-2">
                            <ul class="nav nav-pills">
                              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                              <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Password</a></li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content">
                              <div class="tab-pane active" id="activity">
                                <!-- Post -->
                                <div class="post">
                                  <h4>No Telepon :</h4>
                                  <p>085647019630</p>
                                  <h4>Deskripsi Biro</h4>
                                  <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise
                                  </p>
                                </div>
                                <!-- /.post -->
                              </div>
                              <div class="tab-pane" id="password">
                                <form class="form-horizontal">
                                  <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Password lama</label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="inputName" placeholder="Password lama">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Password baru</label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="inputEmail" placeholder="Password baru">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Konfirmasi Password baru</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputName2" placeholder="Konfirmasi Password baru">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                      <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                  </div>
                                </form>
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

