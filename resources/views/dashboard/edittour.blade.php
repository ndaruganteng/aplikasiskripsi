

@include('dashboard.header')

@include('dashboard.navbar')

@include('dashboard.sidebar')

@include('sweetalert::alert')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h3 class="m-0">Edit Data Tour</h3>
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
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="text-center ">Edit Data Tour</h3>
                        </div>
                        <form action="{{ url('/datatour/update/'.$tour->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="card-body">
                            <input type="hidden" name="id" id="id" value="{{ $tour->id }}">
                                <div class="form-group">
                                    <label for="nama">Image</label>
                                    <input type="file" class="form-control"   value="{{ $tour->image}}"   name="image">
                                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                                </div>
                                <div class="form-group">
                                    <label for="nama biro">Nama Biro</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Nama Biro" value="{{ $tour->namabiro}}"  name="namabiro">
                                </div>
                                <div class="form-group">
                                    <label for="nama tour">Nama Tour</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Judul Tour" value="{{ $tour->namatour}}"  name="namatour">
                                </div>
                                <div class="form-group">
                                    <label for="Kategori">Kategori</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Kategori Tour" value="{{ $tour->kategori}}" name="kategori">
                                </div>
                                <div class="form-group">
                                    <label for="highlight">Highlight</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Highlight Tour" value="{{ $tour->highlight}}"  name="highlight">
                                </div>
                                <div class="form-group">
                                    <label for="kuota">Kuota</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Kuota Tour" value="{{ $tour->kuota}}"  name="kuota">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal berangkat">Tanggal Berangkat</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Tanggal Berangkat" value="{{ $tour->tanggalberangkat}}"  name="tanggalberangkat">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal berakhir">Tanggal Berakhir</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Tanggal Berakhir" value="{{ $tour->tanggalberakhir}}"  name="tanggalberakhir">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga </label>
                                    <input type="text" class="form-control"  placeholder="Masukan Harga Tour" value="{{ $tour->harga}}"  name="harga">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Description</label>
                                    <input id="deskripsi" type="hidden" value="{{ $tour->deskripsi}}"  name="deskripsi" >
                                    <trix-editor input="deskripsi"></trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="fasilitas">Fasilitas</label>
                                    <input id="fasilitas" type="hidden" value="{{ $tour->fasilitas}}"  name="fasilitas" >
                                    <trix-editor input="fasilitas"></trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Link Lokasi</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Link Lokasi Tour" value="{{ $tour->lokasi}}"  name="lokasi">
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