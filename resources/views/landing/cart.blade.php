@extends('landing.layouts.app')

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
    <body class="bg-gray-100">

        <section class="text-gray-600 body-font">
            <div class="container px-40  py-14 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 w-full mx-auto ">
                        <div class=" bg-white p-4 rounded-lg">
                            <div class="text-center mb-10">
                                <h1 class="sm:text-3xl text-2xl font-semibold title-font  mb-4">Metode Pembayaran </h1>
                                <div class="flex mt-6 justify-center">
                                    <div class="w-28 h-1 rounded-full bg-yellow-600 inline-flex"></div>
                                </div>
                            </div>
                            <div class="flex flex-wrap  pb-4 sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                                @foreach($rekening as $item)
                                    <div class="p-4 md:w-1/3 mx-auto flex flex-col text-center items-center">
                                    <div class="w-32 h-20 inline-flex items-center justify-center mb-2 flex-shrink-0">
                                        <img src="{{asset('storage/image/rekening/'.$item->imagerek)}}" alt="">
                                    </div>
                                    <div class="flex-grow">
                                        <h2 class="text-gray-400 text-lg title-font font-medium mb-2">Nomor Rekening</h2>
                                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">{{ $item->nomorrekening }} </h2>
                                        <p class="leading-relaxed text-gray-400 font-medium"> <span class="font-semibold">A/N : </span>   {{ $item->namarekening }}</p>
                                    </div>
                                    </div>
                                @endforeach 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-40 pt-10 pb-4 mx-auto">
                <div class="">
                    <h1 class="sm:text-3xl lg:text-3xl font-semibold title-font text-gray-900 mb-4">Daftar Pesanan</h1>
                </div>
            </div>
        </section>


        <section class="text-gray-600 body-font">
            <div class="container px-40 pb-64 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 w-full">           
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr class="text-center">
                                        <th scope="col" class="px-6 py-3">
                                            Nama
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Tour
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Durasi
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Harga/pax
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Total Harga
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            jumlahorang
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tanggal Berangkat
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status Pembayaran
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                           Upload Bukti Transfer
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pemesanan as $p)
                                    <tr class="bg-white text-center items-center border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $p->namauser}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $p->namatour}}
                                        </td>
                                        <td class="px-6 py-4">
                                             {{ $p->durasi}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $p->hargasatuan}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $p->hargatotal}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $p->jumlahorang}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $p->tanggalberangkat}}
                                        </td>
                                        <td class="font-weight-medium">
                                            @if($p->status == null)
                                            <!-- <div class="badge badge-warning">Belum disetuji </div> -->
                                            <span class="bg-green-100 text-red-800 text-xs font-medium  px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Menunggu Konfirmasi</span>
                                            @else($p->status == 2)
                                            <!-- <div class="badge badge-success"> Disetuji</div> -->
                                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Pembayaran Sukses</span>       
                                            @endif
                                        </td>
                                        <td class="px-12 py-4">
                                            <div class="items-center">
                                                <button data-modal-target="authentication-modal{{$p->id_pemesanan}}" data-modal-toggle="authentication-modal{{$p->id_pemesanan}}" class="block text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                    Upload
                                                </button>

                                            </div>

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                            <div id="authentication-modal{{$p->id_pemesanan}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Kirim Bukti Transfer</h3>
                                            <form class="space-y-6" action="/upload-buktitf/{{$p->id_pemesanan}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <div>
                                                    <input for="buktitf" name="buktitf" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                </div>
                                                <button type="submit"  class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <!-- <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-40 pb-40 md:flex-row flex-col items-center">
                <a href ="{{ route('transaksi.index') }}" class=" mx-auto mt-10 text-white bg-yellow-500  py-2 px-8 focus:outline-none hover:text-white hover:bg-gray-900 rounded-lg text-lg">Lanjut ke Pembayaran</a>
            </div>
        </section> -->
    </body>
</html>
@endsection
