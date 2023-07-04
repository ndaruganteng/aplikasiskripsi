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
    <body class="#">

        <!-- hero -->
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-24 py-10 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl xl:text-7xl mb-4 font-bold text-gray-900">Explore A New <br class="hidden lg:inline-block">World.
                    </h1>
                    <p class="mb-6 text-2xl text-gray-400">no matther where in the world you want to go, we can help get your there.</p>
                    <a href="{{ route('tour.index') }}" class="flex justify-center">
                        <button class="inline-flex text-white bg-black hover:bg-yellow-500  border-0 py-2 px-12 hover:shadow-lg rounded-xl text-lg">Jelajah</button>
                    </a>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="images/home/tour.png">
                </div>
            </div>
        </section>
        <!-- hero -->

        <!-- kategorii -->
        <!-- <section class="text-gray-600 body-font">
            <div class="container px-24 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-6">
                    <h1 class="text-3xl font-semibold title-font mb-4 text-gray-900">KATEGORI TOUR</h1>
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 lg:w-1/3 md:w-1/2">
                        <div class="h-full flex flex-col items-center text-center">
                            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/home/guci.jpg">
                            <div class="w-full">
                                <h1 class="title-font font-medium text-xl text-gray-900">Wisata Alam</h1>     
                            </div>
                        </div>
                    </div>
                    <div class="p-4 lg:w-1/3 md:w-1/2">
                        <div class="h-full flex flex-col items-center text-center">
                            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/home/guci.jpg">
                            <div class="w-full">
                                <h1 class="title-font font-medium text-xl text-gray-900">Wisata Alam</h1>     
                            </div>
                        </div>
                    </div>
                    <div class="p-4 lg:w-1/3 md:w-1/2">
                        <div class="h-full flex flex-col items-center text-center">
                            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/home/guci.jpg">
                            <div class="w-full">
                                <h1 class="title-font font-medium text-xl text-gray-900">Wisata Alam</h1>     
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
        <!-- end kategorii -->

        <!-- kategori -->
        <section class="text-gray-600 font-inter">
            <div class="container px-24 pt-10 mx-auto ">
                <div class="flex flex-wrap -m-2 ">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full   ">
                        <div class="h-full flex items-center  border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="images/background/bromo.jpg">
                            <div class="flex-grow">
                                <a href="{{ route('detail-tour.index') }}" class="text-gray-900 title-font font-medium">Wisata Alam</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="images/background/borobudur.jpg">
                            <div class="flex-grow">
                                <a href="" class="text-gray-900 title-font font-medium">Wisata Sejarah</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="images/background/demak.jpg">
                            <div class="flex-grow">
                                <a href="#" class="text-gray-900 title-font font-medium">Wisata Religi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end kategori -->

        <!-- Card -->
        <section class="font-inter" >
            <div class="container px-24 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-10 ">
                    <div class="container mx-auto flex flex-col px-5 justify-center items-center">
                        <div class="w-full md:w-2/3 flex flex-col mb-10 items-center text-center">
                            <h1 class="title-font sm:text-3xl text-2xl  font-bold text-gray-900">PAKET TOUR TERBARU</h1>
                        </div>
                        <div class="flex w-full mb-10 justify-center items-end">
                            <div class=" mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                                <input type="text" id="hero-field" name="hero-field" placeholder="Cari Tour Disini" class="w-full bg-gray-100 bg-opacity-50 rounded-lg focus:ring-2 focus:ring-yellow-200 focus:bg-transparent border border-gray-300 focus:border-yellow-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <button class="inline-flex text-white bg-black border-0 py-2 px-6 focus:outline-none rounded-lg text-lg">Button</button>
                        </div>
                        <!-- <div class="px-40 pt-4 flex w-full justify-center items-end">
                                <div class="  w-full lg:w-1/3 px-4 py-2">
                                    <div class="relative w-full mb-3  rounded-lg">
                                        <label for="tanggal_kembali"
                                            class="block uppercase text-blueGray-600 text-xs font-semibold mb-2">tanggal 
                                            Berangkat</label>
                                        <input type="date" id="tanggal_kembali" name="tanggal_kembali"
                                            min="<?= date('Y-m-d') ?>"
                                            class="border px-3 py-3  text-blueGray-600 border-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-15"
                                            placeholder="Tanggal Kembali" onchange="hitungTotalHarga()" required>
                                    </div>
                                </div>
                                <div class=" w-full lg:w-1/3 px-4 py-2">
                                    <div class="w-full mb-3 rounded-lg">
                                        <label for="tanggal_kembali"
                                            class="block uppercase text-blueGray-600 text-xs font-semibold mb-2">
                                            Tanggal Berakhir</label>
                                        <input type="date" id="tanggal_kembali" name="tanggal_kembali"
                                            min="<?= date('Y-m-d') ?>"
                                            class="border  px-3 py-3  text-gray-900 border-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-15"
                                            placeholder="Tanggal Kembali" onchange="hitungTotalHarga()" required>
                                    </div>
                                </div>                  
                        </div> -->      
                    </div>
                    <div class="flex flex-wrap -m-4 font-inter">
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/background/paket.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h2 class="tracking-widest text-md title-font font-medium italic text-gray-400 mb-1">24-05-2023</h2>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Alam</span>
                                    </div>
                                    
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-yellow-500 ">IDR 8.250.000</span>
                                        <span class="text-base font-medium text-gray\ ">*Raja holiday</span>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/background/paket.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h2 class="tracking-widest text-md title-font font-medium italic text-gray-400 mb-1">24-05-2023</h2>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Alam</span>
                                    </div>
                                    
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-yellow-500 ">IDR 8.250.000</span>
                                        <span class="text-base font-medium text-gray\ ">*Raja holiday</span>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/background/paket.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h2 class="tracking-widest text-md title-font font-medium italic text-gray-400 mb-1">24-05-2023</h2>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Alam</span>
                                    </div>
                                    
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-yellow-500 ">IDR 8.250.000</span>
                                        <span class="text-base font-medium text-gray\ ">*Raja holiday</span>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/background/paket.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h2 class="tracking-widest text-md title-font font-medium italic text-gray-400 mb-1">24-05-2023</h2>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Alam</span>
                                    </div>
                                    
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-yellow-500 ">IDR 8.250.000</span>
                                        <span class="text-base font-medium text-gray\ ">*Raja holiday</span>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href ="#" class="flex mx-auto mt-12 text-white bg-yellow-500  py-2 px-8 focus:outline-none hover:text-white hover:bg-gray-900 rounded-lg text-lg">Jelajah Lainnya</a>
                </div>
            </div>
        </section>
        <!-- Card -->

    </body>
</html>
@endsection
