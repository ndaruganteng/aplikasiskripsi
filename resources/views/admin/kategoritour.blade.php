            
@include('admin.header')

@include('sweetalert::alert')

@include('admin.navbar')

@include('admin.sidebar')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Kategori Tour</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Kategori Tour</li>
                    </ol>
                </div>
            </div>
         </div>
    </div>
    <section class="content ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="input-group input-group-md" style="width: 200px;">
                                    <input type="text" name="table_search" class="form-control float-left" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-tools">
                                    <a href="{{ route('tambahkategori.index') }}">
                                        <button type="submit" class="btn float-right btn-secondary">
                                            Tambah Kategori
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive  ">
                            <table class="table table-borderd table-hover dataTable dtr-inline collapsed">
                                <thead>
                                    <tr class="text-center">
                                        <th>Image</th>
                                        <th>Nama Kategori</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach($kategori as $p)
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td><img src="{{asset('storage/image/kategori/'.$p->image)}}"  style="width:100px"  /></td>  
                                        <td>{{ $p->namakategori}}</td>
                                        <td>
                                            <div class="btn flex">
                                                <a href="/kategoritour/edit/{{ $p->id }}">
                                                    <button type="button" class="btn btn-warning">
                                                        <i class="fa-solid fa-pen-to-square"></i> 
                                                    </button> 
                                                </a>
                                                <a href="/kategoritour/hapus/{{ $p->id }}">
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="fa-solid fa-trash-can"></i> 
                                                    </button> 
                                                </a>       
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <div class="m-3 float-right">
                                {{ $kategori->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@include('admin.footer')
