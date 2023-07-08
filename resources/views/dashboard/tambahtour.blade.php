

@include('dashboard.header')

@include('dashboard.navbar')

@include('dashboard.sidebar')

@include('sweetalert::alert')

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
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card card-secondary ">
                        <div class="card-header">
                            <h3 class="text-center ">Input Data Tour</h3>
                        </div>
                        <form action="{{ route('Tour.index') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Image</label>
                                    <input type="file" class="form-control"  required="required"  name="image">
                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                </div>
                                <div class="form-group">
                                    <label for="nama biro">Nama Biro</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nama Biro" required="required" name="namabiro">
                                </div>
                                <div class="form-group">
                                    <label for="nama tour">Nama Tour</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Judul Tour" required="required" name="namatour">
                                </div>
                                <div class="form-group">
                                    <label for="Kategori">Kategori</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Kategori Tour" required="required" name="kategori">
                                </div>
                                <div class="form-group">
                                    <label for="highlight">Highlight</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Highlight Tour" required="required" name="highlight">
                                </div>
                                <div class="form-group">
                                    <label for="kuota">Kuota</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Kuota Tour" required="required" name="kuota">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal berangkat">Tanggal Berangkat</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Tanggal Berangkat" required="required" name="tanggalberangkat">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal berakhir">Tanggal Berakhir</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Tanggal Berakhir" required="required" name="tanggalberakhir">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga </label>
                                    <input type="text" class="form-control"  placeholder="Masukan Harga Tour" required="required" name="harga">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Description</label>
                                    <input id="deskripsi" type="hidden" name="deskripsi" >
                                    <trix-editor input="deskripsi"></trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="fasilitas">Fasilitas</label>
                                    <input id="fasilitas" type="hidden" name="fasilitas" >
                                    <trix-editor input="fasilitas"></trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Link Lokasi</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Link Lokasi Tour" required="required" name="lokasi">
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

@include('dashboard.footer')