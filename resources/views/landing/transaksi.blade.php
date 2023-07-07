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

        <!-- <section class="text-gray-600 body-font">
            <div class="container px-40 pt-16 pb-4 mx-auto">
                <div class="">
                    <h1 class="sm:text-3xl lg:text-3xl font-semibold title-font text-gray-900 mb-4">Pembayaran</h1>
                </div>
            </div>
        </section> -->

        <!-- <section class="text-gray-600 body-font">
            <div class="container px-24 py-24 mx-auto">
                <div class="text-center mb-10">
                    <h1 class="sm:text-3xl text-2xl font-bold title-font text-gray-900 mb-4">METODE PEMBAYARAN</h1>
                    <div class="flex mt-6 justify-center">
                        <div class="w-28 h-1 rounded-full bg-yellow-600 inline-flex"></div>
                    </div>
                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div class="w-32 h-20 inline-flex items-center justify-center mb-2 flex-shrink-0">
                            <img src="images/background/bca.png" alt="">
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">NO. VIRTUAL ACCOUNT </h2>
                            <p class="leading-relaxed text-base">1234567890098</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div class="w-32 h-20 inline-flex items-center justify-center mb-2 flex-shrink-0">
                            <img src="images/background/bni.png" alt="">
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">NO. VIRTUAL ACCOUNT </h2>
                            <p class="leading-relaxed text-base">1234567890098</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div class="w-32 h-20 inline-flex items-center justify-center mb-2 flex-shrink-0">
                            <img src="images/background/mandiri.png" alt="">
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">NO. VIRTUAL ACCOUNT </h2>
                            <p class="leading-relaxed text-base">1234567890098</p>
                        </div>
                    </div>

                </div>  
            </div>
        </section> -->

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
            <div class="container px-40 pb-40 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 w-full mx-auto ">
                        <div class=" bg-white p-4 rounded-lg">
                            <h1 class="text-3xl font-semibold text-center">Data Pemesan </h1> 
                            
                            <form class="p-4">
                                <div class="mb-6">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telepon</label>
                                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No Telepon" required>
                                </div>
                                <div class="mb-6">  
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Bukti Transfer</label>
                                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="p-4 mr-6 w-full text-sm text-center text-yellow-500 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                                        <span class="font-medium ">Harga yang Anda bayar : </span> IDR 8.800.000
                                    </div>
                                    <button type="submit" class="text-white bg-yellow-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>                                           
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </body>
</html>
@endsection
