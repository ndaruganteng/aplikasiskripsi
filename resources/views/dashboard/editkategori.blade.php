@extends('dashboard.layouts.app')
@section('content')


<div class="content-wrapper" style="min-height: 2080.4px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="m-0 ">Edit Data Kategori</h3>
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
                                <h4 class="text-center ">Edit Data Kategori</h4>
                            </div>
                            <form action="{{ url('/kategoritour/update/'.$kategori->id_kategori) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                <input type="hidden" name="id" value="{{ $kategori->id_kategori }}">
                                    <div class="form-group">
                                        <label for="nama">Image</label>
                                        <input type="file" class="form-control"  value="{{ $kategori->image}}" name="image">
                                        <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama ">Nama Kategori</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Nama Kategori" value="{{ $kategori->namakategori}}" name="namakategori">
                                    </div>
                                    <div class="mx-auto">
                                        <button type="submit" class="btn btn-dark" value="Simpan Data">Simpan</button>
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