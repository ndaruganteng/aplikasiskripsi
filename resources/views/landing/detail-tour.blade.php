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
  <body class="bg-gray-100">


    <section class="text-gray-600 body-font overflow-hidden">
      <div class="container px-5 pt-16 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap ">
          <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="images/background/paket.jpg">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Wisata Alam</span>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h1>
            <div class="flex mb-4">
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
            </div>  
            <p class="leading-relaxed mt-4 mb-2 text-lg"> <span class="font-bold text-base">Highlight </span> : Sailling Pulau Kelor, Pulau Manjarite, Pulau Kalong, Explore pulau Padar, Snorkelling Pulau Sebayur</p>
            <p class="leading-relaxed mb-2 text-lg"> <span class="font-bold text-base">Kuota </span> : 40 Orang </p>
            <p class="leading-relaxed  mb-2 text-lg"> <span class="font-bold text-base">Tanggal Berangkat </span> : 10 Juli 2023 </p>
            <p class="leading-relaxed  mb-2 text-lg"> <span class="font-bold text-base">Tanggal Berakhir </span> : 11 Juli 2023 </p>
            <p class="text-2xl my-4 font-bold text-yellow-600 ">IDR 8.250.000/pax</p>
            <div class="relative my-4">
              <input type="number" id="visitors" placeholder="jumlah orang" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
            </div>           
            <div class="flex mt-5">
              <a href="{{ route('cart.index') }}" class="text-white bg-black border-0 py-2 px-8 focus:outline-none rounded text-lg">Pesan sekarang</a>
            </div>
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
              <p class="leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus error corporis ab itaque rerum qui consectetur maxime magni quibusdam temporibus a provident rem odio, accusamus fugiat quaerat perferendis? Odit, est ea. Repudiandae molestiae illo facere, voluptas non vel voluptates amet dolores nihil, adipisci, soluta neque ad esse dolorum numquam.</p>
              <h1 class="text-3xl pb-4 font-semibold">Fasilitas</h1>
              <p class="leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus error corporis ab itaque rerum qui consectetur maxime magni quibusdam temporibus a provident rem odio, accusamus fugiat quaerat perferendis? Odit, est ea. Repudiandae molestiae illo facere, voluptas non vel voluptates amet dolores nihil, adipisci, soluta neque ad esse dolorum numquam.</p>
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
                  <!-- <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" 
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63378.67394922582!2d109.07603971807929!3d-6.870568940706868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9dfbf3264c3%3A0x3027a76e352bbe0!2sTegal%2C%20Kota%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1688413102726!5m2!1sid!2sid" 
                      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                  </iframe> -->
                <div class="absolute inset-0 w-full h-full ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3961.1849203713914!2d109.107594!3d-6.868432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9e2805c1c1b%3A0xe3e61e1ae59106ff!2sPoliteknik%20Harapan%20Bersama!5e0!3m2!1sid!2sid!4v1688427891467!5m2!1sid!2sid" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-gray-600 body-font">
      <div class="container px-40 pb-16 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="p-4 w-full mx-auto ">
            <div class=" bg-white p-8 rounded">
              <h1 class="text-3xl pb-8 font-semibold">Penilaian </h1>
              <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                  <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-gray-700">Namaku jamal</span>
                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2023</span>
                  </div>
                  <div class="md:flex-grow">
                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                  </div>
                </div>
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                  <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-gray-700">Namaku jamal</span>
                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2023</span>
                  </div>
                  <div class="md:flex-grow">
                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                  </div>
                </div>
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                  <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-gray-700">Namaku jamal</span>
                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2023</span>
                  </div>
                  <div class="md:flex-grow">
                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                  </div>
                </div>
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                  <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-gray-700">Namaku jamal</span>
                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2023</span>
                  </div>
                  <div class="md:flex-grow">
                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                  </div>
                </div>

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

    <!-- <section class="text-gray-600 font-inter">
        <div class="container mx-auto flex px-24 py-10 items-center justify-center flex-col">
          <h1 class="text-5xl mb-10 font-semibold">Open Trip Tour Wisata Beautiful of Labuan Bajo</h1>
            <img class="lg:w-2/9 md:w-3/6 w-5/6 mb-12 object-cover object-center " alt="hero" src="images/background/paket.jpg">
        </div>
    </section>  -->

    <!-- <section class="text-gray-600 body-font">
      <div class="container px-24 pb-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 bg-white mt-6 lg:mt-0">
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h1>
              <p class="leading-relaxed my-4"> <span class="font-bold">Highlight </span> : Sailling Pulau Kelor, Pulau Manjarite, Pulau Kalong, Explore pulau Padar, Snorkelling Pulau Sebayur</p>          
              <div class="mb-4 border-b border-white dark:border-gray-700">
                  <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                      <li class="mr-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tour Price</button>
                      </li>
                      <li class="mr-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Include & Exclude</button>
                      </li>
                  </ul>
              </div>
              <div id="myTabContent">
                  <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">                   
                    <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
                        <li>
                          Harga Paket Tour :
                            <ol class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Rp. 8.800.000 per pax</li>
                                <li>Harga berlaku untuk minimal 10 orang</li>
                            </ol>
                        </li>
                        <li>
                        Syarat & Ketentuan :
                            <ul class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Harga Berdasarkan peserta 10 orang dewasa</li>
                                <li>Pelunasan paling lambat 14 hari sebelum tanggal keberangkatan.</li>
                            </ul>
                        </li>
                    </ul>
                  </div>
                  <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
                        <li>
                          INCLUDE :
                            <ol class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Guide Lokal</li>
                                <li>Dokumentasi </li>
                                <li>Makan 3x</li>
                                <li>Menginap di Phinisi 3D 2N</li>

                            </ol>
                        </li>
                        <li>
                          EXCLUDE :
                            <ul class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Laundry & Minibar</li>
                            </ul>
                        </li>
                    </ul>
                  </div>
              </div>
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-white shadow rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
          <h2 class="text-gray-900 text-xl mx-auto font-bold title-font mb-5">-Booking-</h2>
          <div class="relative mb-4">
            <input type="number" id="visitors" placeholder="jumlah orang" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
          </div>         
          <div class="relative overflow-x-auto mb-4">
              <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                  <tbody>
                      <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Kuota
                          </th>
                          <td class="px-6 py-4">
                              45 orang
                          </td>
                      </tr>
                      <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Tersisa
                          </th>
                          <td class="px-6 py-4">
                              40 Orang Tersisa
                          </td>
                      </tr>
                      <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Sub Total
                          </th>
                          <td class="px-6 py-4">
                              1x 8.250.000
                          </td>
                      </tr>
                      <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Total Bayar
                          </th>
                          <td class="px-6 py-4 font-bold text-yellow-700">
                              IDR 8.250.000
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <a href="#" class="text-white bg-black border-0 py-2 px-8 focus:outline-none text-center rounded text-lg">Pesan sekarang</a>
        </div>
      </div>
    </section>  -->

    <!-- <section class="text-gray-600 body-font">
      <div class="container px-40 pb-10 mx-auto">
        <div class="flex flex-wrap -mx-4 -my-8">
          <div class="py-8 px-4 lg:w-1/4">
            <div class="h-full flex items-start">
              <div class="flex-grow pl-6">
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">DURATION :</h1>
                <p class="leading-relaxed mb-5">4 DAYS - 3 NIGHTS</p>
              </div>
            </div>
          </div>
          <div class="py-8 px-4 lg:w-1/4">
            <div class="h-full flex items-start">
              <div class="flex-grow pl-6">
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">KATEGORI</h1>
                <p class="leading-relaxed mb-5">Wisata Alam</p>
              </div>
            </div>
          </div>
          <div class="py-8 px-4 lg:w-1/4">
            <div class="h-full flex items-start">
              <div class="flex-grow pl-6">
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">TANGGAL BERANGKAT</h1>
                <p class="leading-relaxed mb-5">13 FEBRUARI 2023</p>
              </div>
            </div>
          </div>
          <div class="py-8 px-4 lg:w-1/4">
            <div class="h-full flex items-start">
              <div class="flex-grow pl-6">
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">TANGGAL BERAKHIR</h1>
                <p class="leading-relaxed mb-5">17 FEBRUARI 2023</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>   -->




  </body>
</html>
@endsection