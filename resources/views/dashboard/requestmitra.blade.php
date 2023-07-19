@extends('dashboard.layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thelema-Marketplace Tour & Travel</title>
        <link
              rel="icon"
              type="image/png"
              sizes="56x56"
              href="images/icon/iconbg.png"
          />
          
    </head>
    <body>
    <div id="" class="main-panel">        
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Request Mitra</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
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
                            <div class="card-header">
                                <h3 class="card-title">Data Request Mitra </h3>
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
                                <table class="table">
                                    <thead>
                                        <tr class="text-center fs-6">
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Nama Biro</th>
                                            <th>Alamat </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6">
                                    @foreach($mitra as $p)
                                        <tr class="text-center text-break">
                                            <td>{{$p->nama}}</td>
                                            <td>{{$p->email}}</td>
                                            <td>{{$p->nohp}}</td>
                                            <td>{{$p->alamat}}</td>
                                            <td>
                                                <div class="">
                                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ktpModal{{$p->id}}">
                                                        <i class="fa-solid fa-image"></i>
                                                    </button>
                                                    <a href="/requestmitra/hapus/{{ $p->id }}">
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="ktpModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="ktpModalLabel{{$p->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ktpModalLabel{{$p->id}}">Foto KTP</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="img-fluid">
                                                            <img src="{{asset('storage/image/mitra/'.$p->image)}}" class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pt-3">
                                {{ $mitra->links() }}
                                </div>                                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
    </body>
</html>
@endsection
