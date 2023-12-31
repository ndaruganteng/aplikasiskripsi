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
    <body class="">
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-24 py-16 mx-auto">
                <div class=" mx-auto flex flex-wrap ">
                    <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="images/background/paket.jpg">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Alam</span>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h1>
                        <p class="leading-relaxed  mb-2 text-lg"> <span class="font-bold text-base">Kode Booking : </span>  1234567890 </p>
                        <p class="leading-relaxed mb-2 text-lg"> <span class="font-bold text-base">Jumlah Orang : </span> 1 Orang</p>
                        <p class="leading-relaxed mb-2 text-lg"> <span class="font-bold text-base">Harga : </span> IDR 8.250.000/pax </p>
                        <p class="leading-relaxed  mb-2 text-lg"> <span class="font-bold text-base">Tanggal Booking : </span>  8 Juli 2023 </p>
                            <p class="leading-relaxed  mb-2 text-lg"> <span class="font-bold text-base">Tanggal Berangkat : </span>  10 Juli 2023 </p>
                        <p class="leading-relaxed  mb-2 text-lg"> <span class="font-bold text-base">Tanggal Berakhir : </span> 11 Juli 2023 </p>
                        <p class="text-2xl mb-4 font-bold text-yellow-600 "><span class="font-bold  text-2xl">Total Bayar: </span>IDR 8.250.000/pax</p>
                        <div class="p-4 mb-4 mx-auto text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-500 dark:text-yellow-300" role="alert">
                            <span class="font-medium">Status Pembayaran :</span> Berhasil
                        </div>                
                        <div class="w-1/1 p-4 text-center bg-white border-2 border-gray-200 rounded-lg  sm:p-6 dark:bg-gray-800 dark:border-gray-700">
                            <p class="mb-3 text-xl font-bold text-gray-900 dark:text-white">Metode Pembayaran</p>
                            <img src="images/background/bca.png" class="w-20 items-center mx-auto mb-2" alt="">
                            <p class="mb-2 text-base font-semibold text-black sm:text-sm dark:text-gray-400">1234567890</p>
                            <p class=" text-base font-medium text-gray-500 sm:text-sm dark:text-gray-400">A/N Jamal</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
@endsection
