@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="m-0 ">Tambah Data Tour</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('datarekening.index') }}"><- Kembali</a></li>
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
                            <h3 class="text-center ">Input Data Tour</h3>
                        </div>
                        <form action="{{ route('Rekening.index') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Image</label>
                                    <input type="file" class="form-control"  required="required"  name="imagerek">
                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                </div>
                                <div class="form-group">
                                    <label for="nama rekening">Nama rekening</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nama Rekening" required="required" name="namarekening">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="nama bank">Minimal</label>
                                    <select class="form-control select2 select2-hidden-accessible" type="text" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="3">Nama Bank</option>
                                        <option data-select2-id="82">Bank BCA</option>
                                        <option data-select2-id="83">Bank BRI</option>
                                        <option data-select2-id="84">Bank BNI</option>
                                        <option data-select2-id="85">Bank Mandiri</option>
                                    </select>                                                 
                                </div> -->
                                <div class="form-group">
                                    <label for="nama bank">Nama Bank</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nama Bank" required="required" name="namabank">
                                </div>
                                <div class="form-group">
                                    <label for="nomor rekening">Nomor rekening</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nomor Rekening " required="required" name="nomorrekening">
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