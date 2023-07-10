
@include('dashboard.header')

@include('dashboard.navbar')

@include('dashboard.sidebar')

@include('sweetalert::alert')

<div class="content-wrapper" style="min-height: 2080.4px;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
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
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="card card-secondary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="images/icon/profile.png" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">Jamal</h3>
              <p class="text-muted text-center">Biro Wisata</p>
              <ul class="list-group  mb-3">
                <li class="list-group-item">
                  <b>whatsapp</b>
                  <a class="float-right" href="https://wa.me/085647019630" target="blank">
                    <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </li>
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
              <a href="{{ route('editprofile.index') }}" class="btn btn-secondary btn-block"><b>Edit Profile</b></a>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card ">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active " href="#profile" data-toggle="tab">Profile</a></li>
                <li class="nav-item"><a class="nav-link " href="#password" data-toggle="tab">Password</a></li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="profile">
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
                        <button type="submit" class="btn btn-secondary">Submit</button>
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
  </div>
</div>

@include('dashboard.footer')