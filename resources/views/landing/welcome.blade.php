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
            @vite('resources/css/app.css')
            @vite('resources/js/app.js')
    </head>
    <body class="" >
 
        <!-- Navbar -->
        <nav class="bg-white pt-6 border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
                <a href="{{ route('home.index') }}" class="flex items-center">
                    <img src="images/icon/iconbg.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">THELEMA</span>
                </a>
                <div class="flex items-center">
                    <a href="{{ route('login.index') }}" class="text-base font-medium text-gray-900 dark:text-blue-500 hover:text-yellow-500">Login</a>
                </div>
            </div>
        </nav>
        <nav class="bg-yellow-500 dark:bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
                <div class="flex items-center">
                    <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                        <li>
                            <a href="{{ route('home.index') }}" class="text-white dark:text-white hover:underline" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('tour.index') }}" class="text-white dark:text-white hover:underline">Tour</a>
                        </li>
                        <li>
                            <a href="{{ route('mitra.index') }}" class="text-white dark:text-white hover:underline">Daftra Mitra</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end Navbar -->


        <!-- hero -->
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-24 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl xl:text-7xl mb-4 font-bold text-gray-900">Explore A New <br class="hidden lg:inline-block">World.
                    </h1>
                    <p class="mb-6 text-2xl text-gray-400">no matther where in the world you want to go, we can help get your there.</p>
                    <a href="{{ route('tour.index') }}" class="flex justify-center">
                        <button class="inline-flex text-white bg-black hover:bg-yellow-500 border-0 py-2 px-12 hover:shadow-lg rounded-xl text-lg">Jelajah</button>
                    </a>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="images/home/tour.png">
                </div>
            </div>
        </section>
        <!-- hero -->


        <section class="text-gray-600 body-font">
            <div class="container px-24 pt-10 mx-auto ">
                <div class="flex flex-wrap -m-2 ">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full   ">
                        <div class="h-full flex items-center  border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="images/background/alam.jpg">
                            <div class="flex-grow">
                                <a href="#" class="text-gray-900 title-font font-medium">Wisata Alam</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="images/background/sejarah.jpg">
                            <div class="flex-grow">
                                <a href="" class="text-gray-900 title-font font-medium">Wisata Sejarah</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="images/background/religi.jpg">
                            <div class="flex-grow">
                                <a href="" class="text-gray-900 title-font font-medium">Wisata Religi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card -->
        <section class="font-inter" >
            <div class="container px-24 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-10 ">
                    <div class="container mx-auto flex flex-col px-5 ustify-center items-center">
                        <div class="w-full md:w-2/3 flex flex-col mb-10 items-center text-center">
                            <h1 class="title-font sm:text-3xl text-2xl  font-semibold text-gray-900">PAKET TOUR TERBARU</h1>
                        </div>
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
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Labuan Bajo</h5>
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
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/home/bali.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h2 class="tracking-widest text-md title-font font-medium italic text-gray-400 mb-1">24-05-2023</h2>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Alam</span>
                                    </div>
                                    
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Bali</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-yellow-500 ">IDR 8.250.000</span>
                                        <span class="text-base font-medium text-gray\ ">*Amal tour</span>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/home/lombok.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <div class="flex items-center justify-between">
                                        <h2 class="tracking-widest text-md title-font font-medium italic text-gray-400 mb-1">24-05-2023</h2>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Alam</span>
                                    </div>
                                    
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Lombok 2.0</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-yellow-500 ">IDR 8.250.000</span>
                                        <span class="text-base font-medium text-gray\ ">*Ojan holiday</span>                                      
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
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Keluarga</span>
                                    </div>
                                    
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Yogyakarta</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 
                                            14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 
                                            3.175-2.138Q9.925 2 12 
                                            2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
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

        <!-- footer -->
        <footer class="p-4 bg-white rounded-lg shadow md:px-6 lg:px-24  md:py-8 dark:bg-gray-900">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="{{ route('home.index') }}" class="flex items-center mb-4 sm:mb-0">
                    <img src="images/icon/iconbg.png" class="h-8 mr-3" alt=" Logo" />
                    <span class="self-center text-gray-900 text-2xl font-bold whitespace-nowrap dark:text-white">Thelema</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="{{ route('home.index') }}" class="mr-4 hover:underline md:mr-6 ">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('tour.index') }}" class="mr-4 hover:underline md:mr-6">Tour</a>
                    </li>
                    <li>
                        <a href="{{ route('mitra.index') }}"  class="hover:underline">daftarmitra</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 3 <a href="#" class="hover:underline">Thelema</a>. All Rights Reserved.
            </span>
        </footer>
        <!-- footer -->

    </body>
</html>
