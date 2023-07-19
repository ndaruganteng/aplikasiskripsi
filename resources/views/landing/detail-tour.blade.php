@extends('landing.layouts.app')

@section('content')

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thelema-Marketplace Tour & Travel</title>
  <link rel="icon" type="image/png" sizes="56x56" href="images/icon/iconbg.png" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
</head>

<body>


  <section id="{{$detail_tour->namatour}}" class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 pt-16 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap ">
        <img alt="ecommerce" class="lg:w-1/2 w-full mx-auto lg:h-auto h-64 object-cover object-center rounded"
          src="{{asset('storage/image/tour/'.$detail_tour->image)}}">
        <div class="lg:w-1/2 w-full mx-auto lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <span
            class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{
            $detail_tour->kategori }}</span>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">{{ $detail_tour->namatour }}</h1>
          <p class="leading-relaxed mt-4 mb-2 text-lg"> <span class="font-bold text-base">Highlight </span> : {{
            $detail_tour->highlight }}</p>
          <p class="leading-relaxed mb-2 text-lg"> <span class="font-bold text-base">Durasi </span> : {{
            $detail_tour->durasi }} </p>
          <p class="text-2xl my-4 font-bold text-yellow-600 ">Harga : Rp {{ $detail_tour->harga }}</p>
          <div class="flex mt-5">
            <a href="#booking" class="text-white bg-black border-0 py-2 px-8 focus:outline-none rounded text-lg">Pesan
              sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-40 pb-10 pt-16 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 w-full">
          <div class="w-full  p-8 shadow rounded">
            <div class="pb-6">
              <h1 class="text-3xl pb-2 font-semibold">Deskripsi</h1>
              <p class="leading-relaxed ">{!! $detail_tour->deskripsi !!}</p>
            </div>
            <div class="pb-6">
              <h1 class="text-3xl pb-3 font-semibold">Fasilitas</h1>
              <p class="leading-relaxed">{!! $detail_tour->fasilitas !!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-40 pb-16 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 w-full">
          <div class="shadow h-auto p-8 rounded">
            <div class="flex items-center pb-4  justify-between">
              <h1 class="text-3xl font-semibold">Detail Lokasi</h1>
              <a href="{{ $detail_tour->lokasi }}" target="blank">
                <button type="button"
                  class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 mr-2 -ml-1" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                  </svg>
                  Detail Lokasi
                </button>
              </a>
            </div>
            <div
              class="w-full h-72 bg-gray-300  rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
              <div class="absolute inset-0 w-full h-full ">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63378.67394922573!2d109.07603971807929!3d-6.870568940706868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9dfbf3264c3%3A0x3027a76e352bbe0!2sTegal%2C%20Kota%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1689364468058!5m2!1sid!2sid"
                  width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section id="booking" class="text-gray-600 body-font">
    <div class="container px-40 pb-16 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class=" p-4 w-full mx-auto">
          <div class="shadow-md p-4 rounded-lg">
            <h1 class="text-3xl mb-4 font-semibold text-center">Data Pemesan </h1>
            <form class="p-4" action="/boking" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-6">
              <label for="namauser" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Nama Pemesan
              </label>
                <input type="text" id="{{$detail_tour->namatour}}" for="namauser" name="namauser"
                  value="{{ Auth::user()->nama }}" readonly
                  class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="mb-6">
              <label for="durasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Durasi Tour
              </label>
              <input type="text" id="{{$detail_tour->namatour}}" for="durasi" name="durasi"
                  value="{{ $detail_tour->durasi }}"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>               
              <div class="mb-6">
                <label for="namatour" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                  Tour</label>
                <input type="text" name="namatour" id="{{$detail_tour->namatour}}" value="{{ $detail_tour->namatour }}"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Nama Lengkap">
              </div>
              <div class="mb-6">
                <label for="jumlahorang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                  Orang</label>
                <input type="number" name="jumlahorang" id="jumlahorang"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Jumlah Orang" onchange="updateHargaTotal()">
              </div>
              <div class="mb-6">
                <label for="hargasatuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                  Satuan</label>
                <input type="text" name="hargasatuan" id="hargasatuan" value="{{ $detail_tour->harga }}"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  onchange="updateHargaTotal()">
              </div>
              <div class="mb-6">
                <label for="hargatotal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                  Total</label>
                <input type="text" name="hargatotal" id="hargatotal"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  readonly>
              </div>
              <div class="mb-6">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Tanggal
                </label>
                <div class="relative w-full mb-6">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                  </div>
                  <input datepicker id="{{$detail_tour->namatour}}" required="required" for="tanggalberangkat"
                    name="tanggalberangkat" type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date">
                </div>
                <div class="#">
                  <button type="submit"
                    class="text-white bg-yellow-500 hover:bg-gray-900 focus:ring-4 font-medium rounded-lg text-sm w-full sm:w-auto  px-5 py-2.5 text-center">Bayar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="text-gray-600 body-font">
    <div class="container px-40 pb-16 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 w-full mx-auto ">
          <div class="shadow bg-white p-4 rounded">
            <div class="flex  rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
              <div
                class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                <img src="images/icon/profile.png" alt="" class="">
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Maju Tour</h2>
                <p class="leading-relaxed text-base mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Dignissimos veritatis dolorum rerum ullam saepe. Ipsa tempore accusantium dolorum odio velit?</p>
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
  </section> -->

  <!-- <script>
        function updateHargaTotal() {
            const jumlahOrang = parseInt(document.getElementById('jumlahorang').value);
            const hargaSatuan = parseInt(document.getElementById('hargasatuan').value);
            const hargaTotal = isNaN(jumlahOrang) || isNaN(hargaSatuan) ? '' : jumlahOrang * hargaSatuan;
            document.getElementById('hargatotal').value = hargaTotal;
        }
    </script> -->

  <script>
    function updateHargaTotal() {
      const jumlahOrang = parseInt(document.getElementById('jumlahorang').value);
      const hargaSatuan = parseInt(document.getElementById('hargasatuan').value);
      const hargaTotal = isNaN(jumlahOrang) || isNaN(hargaSatuan) ? '' : jumlahOrang * hargaSatuan;
      document.getElementById('hargatotal').value = hargaTotal;
    }
  </script>
</body>

</html>
@endsection