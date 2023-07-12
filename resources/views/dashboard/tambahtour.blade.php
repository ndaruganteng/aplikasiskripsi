@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="m-0 ">Tambah Data Tour</h2>
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
            <div class="row" data-select2-id="11">
                <div class="col-12 grid-margin">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="text-center ">Input Data Tour</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-sample" action="{{ route('Tour.index') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control " required="required"  name="image">
                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                </div>  
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label  for="namabiro" class="col-sm-3 col-form-label">Nama Biro</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="required" name="namabiro" placeholder="Masukan Nama Biro">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label  for="namatour" class="col-sm-3 col-form-label">Nama Tour</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="required" name="namatour"  placeholder="Masukan Nama Tour">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label  for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="required" name="kategori" placeholder="Masukan Kategori">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label  for="highlight" class="col-sm-3 col-form-label">Highlight</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="required" name="highlight" placeholder="Masukan Highlight">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label  for="durasi" class="col-sm-3 col-form-label">Durasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="required" name="durasi" placeholder="Masukan Kuota Tour">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label  for="harga" class="col-sm-3 col-form-label">Harga</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="required" name="harga" placeholder="Masukan Harga Tour">
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                                <div class="form-group">
                                    <label for="lokasi">Link Lokasi</label>
                                    <input type="text" class="form-control" required="required" name="lokasi"  placeholder="Masukan Link Lokasi Tour" required="required" name="lokasi">
                                </div>            
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Tour</label>
                                    <input id="deskripsi" type="hidden" name="deskripsi" >
                                    <trix-editor input="deskripsi"></trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="fasilitas">Fasilitas Tour</label>
                                    <input id="fasilitas" type="hidden" name="fasilitas" >
                                    <trix-editor input="fasilitas"></trix-editor>
                                </div>
                                <div class=" mx-auto">
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

@endsection