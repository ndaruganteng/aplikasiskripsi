

@include('admin.header')

@include('admin.navbar')

@include('admin.sidebar')

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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="row m-3">
                                <div class="col-sm-6">
                                    <h3 class=""> Data Wisatawan</h3>
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
                                    <tr class="text-center text-break">
                                        <td>
                                            <img src="images/icon/profile.png"  style="width:50px" />
                                        </td>  
                                        <td>Jamal</td>
                                        <td>Jamal21</td>
                                        <td>Jamal20gmail.com</td>
                                        <td>1234567890</td>
                                        <td>Wisatawan</td>                                             
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>        

@include('admin.footer')