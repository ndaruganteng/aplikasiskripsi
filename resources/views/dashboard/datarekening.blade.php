
@include('dashboard.header')

@include('dashboard.navbar')

@include('dashboard.sidebar')

@include('sweetalert::alert')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0"> Data Rekening</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Data Rekening</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content ">
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
                                    <a href="{{ route('tambahrekening.index') }}">
                                        <button type="submit" class="btn float-right btn-secondary">
                                            Tambah Rekening
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover dataTable dtr-inline collapsed">
                                <thead>
                                    <tr class="text-center">
                                        <th>Image</th>
                                        <th>Nama Rekening</th>
                                        <th>Nama Bank</th>
                                        <th>Nomor Rekening</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach($rekening as $p)
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>
                                            <img src="{{asset('storage/image/rekening/'.$p->imagerek)}}" style="width:100px">
                                        </td>
                                        <td>{{ $p->namarekening}}</td>
                                        <td>{{ $p->namabank}}</td>
                                        <td>{{ $p->nomorrekening}}</td>
                                        <td>
                                            <div>
                                                <a href="/datarekening/edit/{{ $p->id }}" >
                                                    <button type="button" class="btn btn-warning text-white">
                                                        <i class="fa-solid fa-pen-to-square"></i>        
                                                    </button>
                                                </a>
                                                <a href="/datarekening/hapus/{{ $p->id }}">
                                                    <button type="button"  class="btn btn-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <div class="pt-3">
                                {{ $rekening->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.footer')