@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 "> Detail Data Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('datatour.index') }}"><- Kembali</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6 pt-3">
                        <div class="col-12 ">
                            <img src="images/background/paket.jpg" class="product-image" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h3>
                        <div>
                            <h5 class="#">Kode Booking:</h5>
                            <p>1234567890</p>
                        </div> 
                        <div>
                            <h5 class="#">Nama Lengkap:</h5>
                            <p>Jamal</p>
                        </div> 
                        <div>
                            <h5 class="#">Email:</h5>
                            <p>Jamal@gmail.com</p>
                        </div> 
                        <div>
                            <h5 class="#">No Telepon:</h5>
                            <p>1234567890</p>
                        </div> 
                        <div>
                            <h5 class="#">Jumlah Orang:</h5>
                            <p>1</p>
                        </div> 
                        <div >
                            <h5 class="#">Total Harga :</h5>
                            <p>Rp 1.000.000</p>
                        </div>  
                        <div>
                            <h5 class="#">Status Pembayaran:</h5>
                            <p>Berhasil</p>
                        </div>  
                        <div>
                            <h5 class="#">Waktu Pemesanan :</h5>
                            <p>06-07-2023 08:30</p>
                        </div>  
                        <div>
                            <h5 class="#">Bukti Transfer :</h5>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- <a href="images/background/bukti.jpg?bukti=1" target="blank" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                                        <img src="images/background/bukti.jpg?bukti=1" class="img-fluid mb-2" alt="red sample">
                                    </a> -->
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#buktiModal">
                                        <i class="fa-solid fa-image"></i>
                                    </button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="modal fade" id="buktiModal" tabindex="-1" role="dialog" aria-labelledby="buktiModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="buktiModalLabel">Image Bukti Transfer </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            <!-- Formulir Edit Data Mahasiswa -->
                            <div class="img-fluid">
                                <img src="images/background/bukti.jpg" class="img-fluid" alt="" />
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection