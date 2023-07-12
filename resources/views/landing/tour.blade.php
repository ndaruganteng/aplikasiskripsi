@extends('landing.layouts.app')

@section('content')

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thelema-Marketplace Tour & Travel</title>
    <link
        rel="icon"
        type="image/png"
        sizes="56x56"
        href="images/icon/iconbg.png"
    />
</head>
<body class="">
    
    <section class="font-inter" >   
        <div class="container px-24 pt-16 pb-6 mx-auto">
            <div class="flex flex-wrap w-full ">
                <div class="container mx-auto flex flex-col px-5 ustify-center items-center">
                    <div class="w-full md:w-2/3 flex flex-col mb-6 items-center text-center">
                        <h1 class="title-font sm:text-4xl text-3xl  font-bold text-gray-900">DAFTAR TOUR</h1>
                    </div>
                </div>
                <div class="flex w-full justify-center mx-auto items-end">
                    <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                        <form class="flex mx-auto" action="{{route('tour.cari') }}" method="GET">
                            <input type="text" name="cari" placeholder="Cari Tour Disini" class="w-full bg-gray-100 bg-opacity-50 rounded-lg focus:ring-2 focus:ring-yellow-200 focus:bg-transparent border border-gray-300 focus:border-yellow-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            <button class="inline-flex text-white bg-black border-0 py-2 px-6 ml-3 focus:outline-none rounded-lg text-lg" type="submit">Search</button>
                        </form> 
                    </div>
                </div>
            </div>   
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-40 pt-6 pb-10 mx-auto">
            <div class="flex flex-wrap -m-4 text-center mx-auto">
                <div class="p-2 md:w-1/3 sm:w-1/2 mx-auto">
                    <div class="border-2 border-gray-200 px-2 py-4 rounded-lg">
                        <a href="#" class="text-base ">Wisata Alam</a>
                    </div>
                </div>
                <div class="p-2 md:w-1/3 sm:w-1/2 mx-auto">
                    <div class="border-2 border-gray-200 px-2 py-4 rounded-lg">
                        <a href="#" class="leading-relaxed">Wisata Religi</a>
                    </div>
                </div>
                <div class="p-2 md:w-1/3 sm:w-1/2 mx-auto ">
                    <div class="border-2 border-gray-200 px-2 py-4 rounded-lg">
                        <a href="#" class="leading-relaxed">Wisata Sejarah</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                    <p class="tracking-widest text-sm title-font font-semibold italic text-gray-400 mb-1">24-05-2023</p>
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
            </div>
    </section>
</body>
</html>
@endsection
