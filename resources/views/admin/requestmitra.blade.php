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
                    <h1 class="m-0">Request Mitra</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"> Request Mitra</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row m-3">
                                <div class="col-sm-6">
                                    <h3 class=""> Data Request Mitra</h3>
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
                                <table class="table">
                                    <thead>
                                        <tr class="text-center fs-6">
                                            <th>Nama Lengkap</th>
                                            <th>Nama Biro</th>
                                            <th>Alamat </th>
                                            <th>Nomor Telepon</th>
                                            <!-- <th>Foto Ktp</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6">
                                        <tr class="text-center text-break">  
                                            <td>AMal Jamal Sihab</td>
                                            <td>Amal Tour</td>
                                            <td>Adiwerna</td>
                                            <td>085647019630</td>
                                            <!-- <td>
                                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ktpModal">
                                                    <i class="fa-solid fa-image"></i>
                                                </button>
                                            </td> -->
                                            <td>
                                                <div class="">
                                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ktpModal">
                                                        <i class="fa-solid fa-image"></i>
                                                    </button>
                                                    <a href="#">                                                              
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>  
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="pt-3">
                                </div>                                         
                                <!-- Modal -->
                                <div class="modal fade" id="ktpModal" tabindex="-1" role="dialog" aria-labelledby="ktpModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ktpModalLabel">Foto Ktp</h5>
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
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')