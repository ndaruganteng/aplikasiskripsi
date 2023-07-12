@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Manajemen Order</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
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
                        <div class="card-header">
                            <h3 class="card-title">Data Order </h3>
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
                            <table class="table table-stiped">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Nama </th>                                                                                     
                                        <th>Nama Tour</th>                                
                                        <th>Durasi</th>                                
                                        <th>Harga/pax</th>
                                        <th>Harga Total</th>
                                        <th>jumlahorang</th> 
                                        <th>Tanggal Berangkat</th> 
                                        <th>Bukti Transfer</th>
                                        <th>Status</th>  
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="fs-6">
                                @foreach($pemesanan as $p)
                                    <tr class="text-center text-break">
                                        <td>{{ $p->namauser}}</td>
                                        <td>{{ $p->namatour}}</td>
                                        <td>{{ $p->durasi}}</td>
                                        <td>{{ $p->hargasatuan}}</td>
                                        <td>{{ $p->hargatotal}}</td>
                                        <td>{{ $p->jumlahorang}}</td>
                                        <td>{{ $p->tanggalberangkat}}</td>
                                        <td>
                                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#buktiModal{{$p->id_pemesanan}}">
                                                <i class="fa-solid fa-image"></i>
                                            </button>
                                        </td>
                                        <td class="font-weight-medium">
                                            @if($p->status == null)
                                            <div class="badge badge-warning">Belum disetuji </div>
                                            @else($p->status == 2)
                                            <div class="badge badge-success"> Disetuji</div>
                     
                                            @endif
                                        </td>
                                        <td>
                                            @if($p->status == null)

                                            <form  method="post" action="{{route('konfirmasi', ['id_pemesanan'=> $p->id_pemesanan])}}">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa-solid fa-check"></i>
                                                </button>
                                            </form>
                                            @else
                                                <a href="/cart/hapus/{{ $p->id_pemesanan }}">
                                                    <button type="button"  class="btn btn-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="buktiModal{{$p->id_pemesanan}}" tabindex="-1" role="dialog" aria-labelledby="buktiModalLabel{{$p->id_pemesanan}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="buktiModalLabel">Image Bukti Transfer </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <div class="modal-body">
                                                <div class="img-fluid">
                                                    <img src="{{asset('storage/image/bukti-transfer/'.$p->buktitf)}}" class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>      
                                    @endforeach
                                </tbody>
                                
                       
                                
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection