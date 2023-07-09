@include('user.header')

@include('user.navbar')

@include('user.sidebar')

@include('sweetalert::alert')

<!-- <div class="content-wrapper" style="min-height: 2080.4px;" data-select2-id="12">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h3 class="m-0 ">Edit User Profile</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('userprofile.index') }}"><- Kembali</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control"  placeholder="Jamal">
                  </div>
                  <div class="form-group">
                    <label for="username">UserName</label>
                    <input type="text" class="form-control"  placeholder="Jamal21">
                  </div>
                  <div class="form-group">
                    <label for="email">Email </label>
                    <input type="text" class="form-control"  placeholder="Jamal21@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="notelp">No Telepon </label>
                    <input type="text" class="form-control"  placeholder="085647019630">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Profile</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div> -->

<div class="content-wrapper" style="min-height: 2080.4px;" data-select2-id="12">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h3 class="m-0 ">Edit Profile</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('userprofile.index') }}"><- Kembali</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-sample pt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Jamal panjang">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">No Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="085647019630">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Jamal21">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Jamal21@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Foto Profil</label>
                                    <input type="file" class="form-control"name="image">
                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Foto Profil</label>
                                    <input type="file" class="form-control"name="image">
                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                </div>
                                <div class="#">
                                    <button type="submit" class="btn btn-secondary " value="Simpan Data">Simpan</button>
                                </div>               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>



@include('user.footer')