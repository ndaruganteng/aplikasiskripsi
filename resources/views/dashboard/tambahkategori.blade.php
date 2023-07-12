@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 ">Tambah Data Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('kategoritour.index') }}"><- Kembali</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="m-0 text-center ">Input Data Kategori</h3>
                        </div>
                        <form action="{{ route('Kategori.index') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Image</label>
                                    <input type="file" class="form-control"  required="required"  name="image">
                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                </div>
                                <div class="form-group">
                                    <label for="namakategori">Nama Kategori</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nama Kategori" required="required" name="namakategori">
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
</div>

@endsection