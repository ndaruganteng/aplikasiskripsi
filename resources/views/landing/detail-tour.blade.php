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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
</head>
  <body class="bg-gray-100">


    <section id="{{$detail_tour->namatour}}" class="text-gray-600 body-font overflow-hidden">
      <div class="container px-5 pt-16 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap ">
          <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{asset('storage/image/tour/'.$detail_tour->image)}}">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $detail_tour->kategori }}</span>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">{{ $detail_tour->namatour }}</h1>
            <!-- <div class="flex mb-4">
              <span class="flex items-center">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <span class="text-gray-600 ml-3">4 Reviews</span>
              </span>
            </div>   -->
            <p class="leading-relaxed mt-4 mb-2 text-lg"> <span class="font-bold text-base">Highlight </span> : {{ $detail_tour->highlight }}</p>
            <p class="leading-relaxed mb-2 text-lg"> <span class="font-bold text-base">Durasi </span> : {{ $detail_tour->durasi }} </p>
            <p class="text-2xl my-4 font-bold text-yellow-600 ">Harga : Rp {{ $detail_tour->harga }}</p>
            <!-- <div class="flex mt-5">
              <a href="{{ route('cart.index') }}" class="text-white bg-black border-0 py-2 px-8 focus:outline-none rounded text-lg">Pesan sekarang</a>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <section class="text-gray-600 body-font">
      <div class="container px-40 pb-10 pt-16 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="p-4 w-full">
            <div class="h-full bg-white p-8 rounded">
              <h1 class="text-3xl pb-4 font-semibold">Deskripsi</h1>
              <p class="leading-relaxed mb-6">{!! $detail_tour->deskripsi !!}</p>
              <h1 class="text-3xl pb-4 font-semibold">Fasilitas</h1>
              <p class="leading-relaxed mb-6">{!! $detail_tour->fasilitas !!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-gray-600 body-font">
      <div class="container px-40 pb-16 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="p-4 w-full">
            <div class=" bg-white p-8 rounded">
              <h1 class="text-3xl pb-4 font-semibold">Detail Lokasi</h1>
              <div class="w-full h-72 bg-gray-300  rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <div class="absolute inset-0 w-full h-full ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3961.1849203713914!2d109.107594!3d-6.868432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9e2805c1c1b%3A0xe3e61e1ae59106ff!2sPoliteknik%20Harapan%20Bersama!5e0!3m2!1sid!2sid!4v1688427891467!5m2!1sid!2sid"
                   width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-gray-600 body-font">
      <div class="container px-40 pb-16 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="p-4 w-full mx-auto ">
          <div class=" bg-white p-4 rounded-lg">
                <h1 class="text-3xl mb-4 font-semibold text-center">Data Pemesan </h1>    
                <form class="p-4" action="/boking" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="flex items-center justify-between mb-6">
                          <input type="text" id="{{$detail_tour->namatour}}" for="namauser"   name="namauser"  value="{{ Auth::user()->nama }}" readonly class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mr-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <input type="text" id="{{$detail_tour->namatour}}" for="durasi"  name="durasi"    value="{{ $detail_tour->durasi }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ml-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="namatour"   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tour</label>
                        <input type="text"  name="namatour" id="{{$detail_tour->namatour}}"  value="{{ $detail_tour->namatour }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Lengkap" >
                    </div>
                    <div class="mb-6">
                        <label for="jumlahorang"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Orang</label>
                        <input type="text" id="{{$detail_tour->namatour}}" required="required"  name="jumlahorang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jumlah Orang" >
                    </div>
                    <div class="mb-6">
                        <label for="hargasatuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Satuan</label>
                        <input type="text" id="{{$detail_tour->namatour}}"  required="required"  name="hargasatuan"   value="{{ $detail_tour->harga }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
                    </div>
                    <div class="mb-6">
                        <label for="hargatotal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Total</label>
                        <input type="text" id="{{$detail_tour->namatour}}"   name="hargatotal"    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
                    </div>
                    <div class="mb-6">
                      <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Tanggal </label>
                      <div class="relative w-full mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                          </svg>
                        </div>
                        <input datepicker id="{{$detail_tour->namatour}}" required="required" for="tanggalberangkat"  name="tanggalberangkat"  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                      </div>
                    <div class="#">      
                        <button type="submit" class="text-white bg-yellow-500 hover:bg-gray-900 focus:ring-4 font-medium rounded-lg text-sm w-full sm:w-auto  px-5 py-2.5 text-center">Bayar</button>   
                    </div>              
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-gray-600 body-font">
      <div class="container px-40 pb-16 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="p-4 w-full mx-auto ">
            <div class=" bg-white p-4 rounded">
                <div class="flex  rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                    <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                      <img src="images/icon/profile.png" alt="" class="">
                    </div>
                    <div class="flex-grow">
                      <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Maju Tour</h2>
                      <p class="leading-relaxed text-base mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos veritatis dolorum rerum ullam saepe. Ipsa tempore accusantium dolorum odio velit?</p>
                      <span class="inline-flex">
                        <a href="#" class="text-gray-500">
                          <i class="  fa-brands fa-whatsapp"></i>  
                        </a>
                        <a href="#" class="ml-2 text-gray-500">
                          <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="ml-2 text-gray-500">
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>
@endsection