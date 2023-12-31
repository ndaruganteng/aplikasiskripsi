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
        <div class="container mx-auto flex px-24 pb-16 pt-10 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl xl:text-7xl mb-4 font-bold text-gray-900">THELEMA <br
                        class="hidden lg:inline-block">MARKETPLACE
                </h1>
                <p class="mb-10 text-2xl text-gray-400"> Marketplace yang menjual pruduk berupa paket tour wisata.</p>
                <!-- <a href="{{ route('login.index') }}" class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-black hover:bg-yellow-500 border-0 py-2 px-12 hover:shadow-lg rounded-xl text-lg">Jelajah</button>
                </a> -->
                <div class="items-center" >
                    <form action="{{route('home.search') }}" method="GET">            
                        <div date-rangepicker class="flex ">
                            <div class="relative ">
                                        
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input name="start-date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Berangkat">          
                            </div>
                            <span class="mx-4 text-gray-500">to</span>
                            <div class="relative ">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input name="end-date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Berakhir">
                            </div>
                            <span class="mx-4">
                                <div>
                                <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:focus:ring-yellow-900">Yellow</button>
                                </div>
                            </span>  
                        </div>
                    </form>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="images/home/tour.png">
            </div>
        </div>
    </section>
        <!-- hero -->

        <!-- kategori -->
        <!-- <section class="text-gray-600 font-inter">
            <div class="container px-24 pt-10 mx-auto ">
                <div class="flex flex-wrap -m-2 ">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full   ">
                        <div class="h-full flex items-center  border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="kategori" class="w-16 h-16 object-center flex-shrink-0 rounded-full mr-4" src="images/icon/iconbg.png">
                            <div class="flex-grow">
                                <a href="{{ route('detail-tour.index') }}" class="text-gray-900 title-font font-medium">Wisata Alam</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="kategori" class="w-16 h-16 object-center flex-shrink-0 rounded-full mr-4" src="images/icon/iconbg.png">
                            <div class="flex-grow">
                                <a href="" class="text-gray-900 title-font font-medium">Wisata Sejarah</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg">
                            <img alt="kategori" class="w-16 h-16 object-center flex-shrink-0 rounded-full mr-4" src="images/icon/iconbg.png">
                            <div class="flex-grow">
                                <a href="#" class="text-gray-900 title-font font-medium">Wisata Religi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end kategori -->

        <!-- search -->
        <section class="font-inter" >   
            <div class="container px-24 pt-16 pb-6 mx-auto">
                <div class="flex flex-wrap w-full ">
                    <div class="container mx-auto flex flex-col px-5 ustify-center items-center">
                        <div class="w-full md:w-2/3 flex flex-col mb-6 items-center text-center">
                            <h1 class="title-font sm:text-4xl text-3xl font-bold text-gray-900">DAFTAR TOUR</h1>
                        </div>
                    </div>
                    <!-- <div class="flex w-full justify-center items-end">
                        <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                            <form class="flex mx-auto" action="{{route('home.search') }}" method="GET">
                                <input type="text" name="search" placeholder="Cari Tour Disini" class="w-full bg-gray-100 bg-opacity-50 rounded-lg focus:ring-2 focus:ring-yellow-200 focus:bg-transparent border border-gray-300 focus:border-yellow-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <button class="inline-flex text-white bg-black border-0 py-2 px-6 ml-3 focus:outline-none rounded-lg text-lg" type="submit">Search</button>
                            </form> 
                        </div>
                    </div> -->
                </div>   
            </div>
        </section>
        <!-- end search -->



        <!-- cardd -->
        <section class="font-inter" >   
            <div class="container px-24 pt-4 pb-24 mx-auto">          
                    <div class="flex flex-wrap -m-4 font-inter">
                    @foreach($tour as $item)
                    @if($item->status == 2)
                    <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <a href="/{{ ($item->id_tour) }}#{{$item->namatour}}">
                                <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                    <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="{{asset('storage/image/tour/'.$item->image)}}" alt="content">
                                </div>
                            </a>
                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2">
                                    <p class="tracking-widest text-xs title-font font-semibold italic text-gray-400 mb-1">{{$item->date}}</p>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $item->kategori }}</span>
                                </div>                             
                                <a href="/{{ ($item->id_tour) }}#{{$item->namatour}}">
                                    <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">{{ $item->namatour }}</h5>
                                </a>
                                <p class="flex items-center font-semibold text-gray-400 mb-4">
                                    <span class="mr-2">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>                        
                                    {{ $item->durasi }}
                                </p>
                                <p class="font-semibold text-gray-400 dark:text-gray-400">Start From</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-lg font-bold text-yellow-500 ">Rp {{ $item->harga }}</span>
                                    <span class="text-sm font-semibold text-gray-400 ">
                                        <i class="fa-solid fa-shop "></i> 
                                        {{ $item->namabiro }}</span>                                      
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
                @endforeach   
            </div>
        </section>
        <!-- end card -->
    </body>
</html>
@endsection
