@include('admin.header')

@include('admin.navbar')

@include('admin.sidebar')

@include('sweetalert::alert')

    <div class="content-wrapper" style="min-height: 2080.4px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 fw-blod">Manajemen User </h1>
                    </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manajemen User</li>
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
                                    <h3 class=" "> Data Biro Wisata</h3>
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
                                            <th>Image</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>                                
                                            <th>No Telepon</th>                                
                                            <th>Role</th>                                
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6">
                                        <tr class="text-center items-start text-break">
                                            <td>
                                                <img
                                                    src="images/icon/profile.png"
                                                    alt=""
                                                    style="width:50px"
                                                />
                                            </td>  
                                            <td>Rudi</td>
                                            <td>Rudi21</td>
                                            <td>RUDI20gmail.com</td>
                                            <td>1234567890</td>
                                            <td>
                                                <div class="#">
                                                    <select class="#">
                                                        <option>Konsumen</option>
                                                        <option>Biro Wisata</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="#">
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                    </a>
                                                    <a href="#">
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="fa-solid fa-trash"></i>
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
@include('admin.footer')