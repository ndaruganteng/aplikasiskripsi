
@include('admin.header')

@include('admin.navbar')

@include('admin.sidebar')

@include('sweetalert::alert')

     
<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Manajemen Tour</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Manajemen Tour</li>
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
                        <div class="card-header">
                            <h3 class="card-title">Data Tour</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr class="text-center ">
                                        <th>Nama Biro </th>
                                        <th>Nama Tour</th>
                                        <th>Kategori</th>
                                        <th>Harga/pax</th>
                                        <th>Tanggal Berangkat</th>
                                        <th>Verifikasi </th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>Happy Tour</td>  
                                        <td>Open Trip Tour Wisata Labuan Bajo</td>
                                        <td>Wisata Alam</td>
                                        <td>Rp 8.000.000</td>
                                        <td>20 Juli 2023</td>
                                        <td>verified</td>
                                        <td>
                                            <div class="btn flex">
                                                <a href="#">                                                              
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="fa-solid fa-ban"></i>
                                                    </button>  
                                                </a>
                                                <!-- <a href="#">
                                                    <button  type="submit" class="btn btn-primary" value="Submit">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button> 
                                                </a>                                                        -->

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pt-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@include('admin.footer')