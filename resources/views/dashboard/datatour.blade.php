@include('dashboard.header')

@include('dashboard.navbar')

@include('dashboard.sidebar')

@include('sweetalert::alert')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0">View Data Tour</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">View Data Tour</li>
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
                        <div class="row m-3 pt-2">
                            <div class="col-sm-6">
                                <div class=" #">
                                    <div class="container-fluid">
                                        <form class="d-flex">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="ml-3  btn btn-dark" type="submit">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="{{ route('tambahtour.index') }}">
                                        <button type="submit" class="btn btn-dark flex" value="Submit">
                                            Tambah Tour
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover dataTable dtr-inline collapsed">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Image</th>
                                        <th>Nama biro</th>
                                        <th>Nama tour</th>
                                        <th>kategori</th>
                                        <th>Harga </th>
                                        <th>Kuota </th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach($tour as $p)
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>
                                            <img src="{{asset('storage/image/tour/'.$p->image)}}" style="width:100px" />
                                        </td>
                                        <td>{{ $p->namabiro}}</td>
                                        <td>{{ $p->namatour}}</td>
                                        <td>{{ $p->kategori}}</td>
                                        <td>Rp{{ $p->harga}}</td>
                                        <td>{{ $p->kuota}}</td>
                                        <td>
                                            <div class="btn flex">
                                                <a href="/datatour/edit/{{ $p->id }}" >
                                                    <button type="button" class="btn btn-warning text-white">
                                                        <i class="fa-solid fa-pen-to-square"></i>        
                                                    </button>
                                                </a>
                                                <a href="/datatour/hapus/{{ $p->id }}">
                                                    <button type="button"  class="btn btn-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('detail-datatour.index') }}">
                                                    <button type="submit"  class="btn btn-primary"  value="Submit">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <div class="pt-3">
                                {{ $tour->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.footer')