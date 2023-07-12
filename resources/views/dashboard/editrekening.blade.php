@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="m-0 ">Edit Data Rekening</h3>
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
                            <h3 class="text-center ">Edit Data Rekening</h3>
                        </div>
                        <form action="{{ url('/datarekening/update/'.$rekening->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="card-body">
                            <input type="hidden" name="id" id="id" value="{{ $rekening->id }}">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control"   value="{{ $rekening->imagerek}}"   name="image">
                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                </div>
                                <div class="form-group">
                                    <label for="nama rekening">Nama Rekening</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nama rekening" value="{{ $rekening->namarekening}}"  name="namarekening">
                                </div>
                                <div class="form-group">
                                    <label for="nama bank">Nama Bank</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nama Bank" value="{{ $rekening->namabank}}"  name="namabank">
                                </div>
                                <div class="form-group">
                                    <label for="nomorekening">Nomor Rekening</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nomor Rekening" value="{{ $rekening->nomorrekening}}" name="nomorrekening">
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