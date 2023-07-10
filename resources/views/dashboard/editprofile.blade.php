
@include('dashboard.header')

@include('dashboard.navbar')

@include('dashboard.sidebar')

@include('sweetalert::alert')

<div class="content-wrapper" style="min-height: 2080.4px;" data-select2-id="12">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h3 class="m-0 ">Edit Profile</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('profile.index') }}"><- Kembali</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row" data-select2-id="11">
                <div class="col-12 grid-margin">
                    <div class="card card-secondary">
                        <div class="card-body">
                            <form class="form-sample pt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Masukan Nama">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">No Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Masukan No Telepon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Instagram</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Masukan Link Instagram">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Facebook</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Masukan Link Facebook">
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
                                    <label for="deskripsi">Deskripsi Biro</label>
                                    <input id="deskripsi" type="hidden" name="deskripsi" >
                                    <trix-editor input="deskripsi"></trix-editor>
                                </div>
                            </form>
                            <div class=" mx-auto">
                                <button type="submit" class="btn btn-secondary " value="Simpan Data">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('dashboard.footer')