
@include('dashboard.header')

@include('dashboard.navbar')

@include('dashboard.sidebar')

@include('sweetalert::alert')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manajemen Order</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Manajemen Order</li>
                </ol>
            </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="row m-3">
                            <div class="col-sm-6">
                                <h3 class="text-uppercase mt-3"> Data Order</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <div class=" #">
                                        <div class="container-fluid">
                                            <form class="d-flex">
                                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="ml-3  btn btn-dark" type="submit">Search</button>
                                            </form>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Kode Booking</th>                                                                                     
                                        <th>Nama Tour</th>                                
                                        <th>Jumlah Orang</th>                                
                                        <th>Waktu Pemesanan</th>
                                        <th>Status Pemesanan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>1234567890</td>
                                        <td>Open Trip Tour Wisata Labuan Bajo</td>
                                        <td>20</td>
                                        <td>26-02-2023 02.00</td>
                                        <td>Berhasil</td>
                                        <td>
                                            <div>
                                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#buktiModal">
                                                    <i class="fa-solid fa-image"></i>
                                                </button>
                                                <a href="#">
                                                    <button type="button"  class="btn btn-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('detail-order.index') }}">
                                                    <button type="submit"  class="btn btn-primary"  value="Submit">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                        
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div> -->
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
                                    <div class="img-fluid">
                                        <img src="images/background/bukti.jpg" class="img-fluid" alt="" />
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.footer')