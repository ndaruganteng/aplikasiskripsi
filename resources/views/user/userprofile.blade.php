
<div class="content-wrapper" style="min-height: 2080.4px;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
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
              <h3 class="profile-username text-center">Jamal21</h3>
              <p class="text-muted text-center">Wisatawan</p>

              <a href="{{ route('edituserprofile.index') }}" class="btn btn-secondary btn-block"><b>Edit Profile</b></a>
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
                  <dl class="row">
                      <dt class="col-sm-3">Nama Lengkap</dt>
                      <dd class="col-sm-9">Jamal panjang</dd>
                      <dt class="col-sm-3">Username</dt>
                      <dd class="col-sm-9">Jamal21</dd>
                      <dt class="col-sm-3">Email</dt>
                      <dd class="col-sm-9">Jamal @gmail.com</dd>
                      <dt class="col-sm-3">No Telepon</dt>
                      <dd class="col-sm-9">085647019630</dd>
                    </dl>
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

