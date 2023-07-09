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
            <div class="container px-40 pt-10 pb-4 mx-auto">
                <div class="">
                    <h1 class="sm:text-3xl lg:text-3xl mx-auto font-semibold title-font text-gray-900 mb-4">Pesanan Saya</h1>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-40 pb-64  md:flex-row flex-col items-center">
                <div class="relative overflow-x-auto  sm:rounded-lg ">
                    <table class="w-full mx-auto table-responsive text-sm text-left text-gray-500 dark:text-gray-400">
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
                                <th scope="col" class="px-6 py-3 text-center">
                                    <span class="sr-only">Detail Pesanan</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="col" class="w-32 p-4 items-center">
                                    <img src="images/background/paket.jpg" alt="Apple Watch">
                                </td>
                                <td scope="col" class="px-6 py-4 text-center font-semibold text-gray-900 dark:text-white">
                                    Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N
                                </td>
                                <td scope="col" class="px-6 py-4  text-center font-semibold text-gray-900 dark:text-white">
                                    126735678789
                                </td>
                                <td class="px-6 py-4 text-center font-semibold text-gray-900">
                                    13 Februari 2023
                                </td>
                                <td scope="col" class="px-6 py-4 text-center font-semibold text-gray-900 ">
                                    1
                                </td>
                                <td scope="col" class="px-6 py-4 text-center font-semibold text-gray-900 ">
                                    IDR 8.800.000 
                                </td>
                                <td scope="col" class="px-6 py-4  text-center font-semibold text-gray-900">
                                    Berhasil 
                                </td>
                                <td scope="col" class="items-center  py-6 px-4 font-semibold">
                                    <a href="{{ route('detail-pesanan.index') }}" type="button" class=" text-white bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('detail-pesanan.index') }}" type="button" class=" text-white bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                                        <i class="fa-solid fa-download"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- <div class="relative w-full overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Color
                                        <a href="#">
                                            <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                             <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Category
                                            <a href="#">
                                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg>
                                            </a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Price
                                        <a href="#">
                                            <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="col" class="w-32 p-4 px-6 py-4 ">
                                    <img src="images/background/paket.jpg" alt="Apple Watch">
                                </td>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->

            </div>
        </section>





    </body>
</html>
@endsection
