

@include('admin.header')

@include('admin.navbar')

@include('admin.sidebar')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 fw-blod">Manajemen User </h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
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
                        <div class="card-header">
                            <h3 class="card-title">Data Account User </h3>
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
                                    @foreach($users as $p)
                                    <tr class="text-center text-break">
                                        <td>
                                            <img src="{{asset('storage/image/user/'.$p->image)}}"  style="width:50px" />
                                        </td>  
                                        <td>{{$p->nama}}</td>
                                        <td>{{$p->username}}</td>
                                        <td>{{$p->email}}</td>
                                        <td>{{$p->no_hp}}</td>  
                                        <td>{{$p->role}}</td>
                                           
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
                                    @endforeach
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