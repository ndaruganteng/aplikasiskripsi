@include('admin.header')

@include('admin.navbar')

@include('admin.sidebar')

@include('sweetalert::alert')

<div class="main-panel">        
    <div class="content-wrapper">
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
                            <h3 class="text-uppercase mx-auto mt-3">Data Order</h3>
                            <div class="card-body table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-center fs-6">
                                            <th>Kode Booking</th>
                                            <th>Tour</th>                                
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
                                            <td>Sukses</td>
                                            <td>
                                                <div class="btn flex">
                                                    <a
                                                        href="#"
                                                    >
                                                        <button
                                                            type="submit"
                                                            class="btn btn-primary"
                                                            value="Submit"
                                                        >
                                                            <i
                                                                class="fa-solid fa-eye"
                                                            ></i>
                                                            Detail
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-center text-break">
                                            <td>1234567890</td>
                                            <td>Open Trip Tour Wisata Labuan Bajo</td>
                                            <td>20</td>
                                            <td>26-02-2023 02.00</td>
                                            <td>Gagal</td>
                                            <td>
                                                <div class="btn flex">
                                                    <a
                                                        href="#"
                                                    >
                                                        <button
                                                            type="submit"
                                                            class="btn btn-primary"
                                                            value="Submit"
                                                        >
                                                            <i
                                                                class="fa-solid fa-eye"
                                                            ></i>
                                                            Detail
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')