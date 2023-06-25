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
            <div class="container px-40 pt-16 pb-4 mx-auto">
                <div class="">
                    <h1 class="sm:text-3xl lg:text-3xl font-semibold title-font text-gray-900 mb-4">Pesanan Saya</h1>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-40 pb-40  md:flex-row flex-col items-center">
                <div class="relative overflow-x-auto  sm:rounded-lg ">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    <span class="sr-only">product</span>
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Kode Booking
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Tanggal Booking
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Jumlah Orang
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Harga Satuan
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Status Transaksi
                                </th>
                                <!-- <th scope="col" class="px-6 py-3 text-center">
                                    Lihat Tiket
                                </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-32 p-4 items-center">
                                    <img src="images/background/paket.jpg" alt="Apple Watch">
                                </td>
                                <td class="px-6 py-4 text-center font-semibold text-gray-900 dark:text-white">
                                    Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N
                                </td>
                                <td class="px-6 py-4  text-center font-semibold text-gray-900 dark:text-white">
                                    126735678789
                                </td>
                                <td class="px-6 py-4 text-center font-semibold text-gray-900 dark:text-white">
                                    13 Februari 2023
                                </td>
                                <td class="px-6 py-4 text-center font-semibold text-gray-900 dark:text-white">
                                    1
                                </td>
                                <td class="px-6 py-4 text-center font-semibold text-gray-900 dark:text-white">
                                    IDR 8.800.000 
                                </td>
                                <td class="px-6 py-4  text-center font-semibold text-gray-900 dark:text-white">
                                    Sukses 
                                </td>
                                <!-- <td class="px-6 py-4  text-center font-semibold  dark:text-white">
                                    <button type="button" class=" text-white bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Tiket</button>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>





    </body>
</html>
@endsection
