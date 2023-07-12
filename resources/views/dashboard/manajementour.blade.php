@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 2080.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Manajemen Tour</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
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
                                        <th>Image</th>
                                        <th>Nama biro</th>
                                        <th>Nama tour</th>
                                        <th>kategori</th>
                                        <th>Harga </th>
                                        <th>durasi </th>
                                        <th>Status </th>
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
                                        <td>{{ $p->durasi}}</td>
                                        <td class="font-weight-medium">
                                            @if($p->status == null)
                                            <div class="badge badge-warning">Belum disetuji </div>
                                            @else($p->status == 2)
                                            <div class="badge badge-success"> Disetuji</div>
                     
                                            @endif
                                        </td>
                                        <td>
                                            @if($p->status == null)

                                            <form  method="post" action="{{route('approve', ['id_tour'=> $p->id_tour])}}">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa-solid fa-check"></i>
                                                </button>
                                            </form>
                                            @else
                                                <a href="/datatour/hapus/{{ $p->id_tour }}">
                                                    <button type="button"  class="btn btn-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
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

@endsection