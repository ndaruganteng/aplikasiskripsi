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
      <div class="container px-40 pt-16 pb-24 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="p-4 w-1/2 mx-auto ">
            <div class=" bg-white p-4 rounded-lg mx-auto">
              <div class="bg-gray-900 rounded-lg">
                <h1 class="text-3xl p-4 text-white font-bold text-center">Form Daftar Mitra </h1>   
              </div>                 
                <form class="p-4" action="{{ route('Mitra.index') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="mb-6">
                        <label for="nama"  class="block mb-2 text-sm font-medium text-gray-900 ">Nama Biro</label>
                        <input type="nama" required="required"  name="nama"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Biro" required>
                    </div>
                    <div class="mb-6">
                        <label for="email"  class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="email" required="required"  name="email"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
                    </div>
                    <div class="mb-6">
                        <label for="nohp"  class="block mb-2 text-sm font-medium text-gray-900 ">No Telepon</label>
                        <input type="nohp" required="required"  name="nohp"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No Telepon" required>
                    </div>
                    <div class="mb-6">
                        <label for="alamat"  class="block mb-2 text-sm font-medium text-gray-900 ">Alamat Biro</label>
                        <input type="alamat" required="required"  name="alamat"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat Biro" required>
                    </div>
                    <div class="mb-6">  
                      <label  class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Upload Foto Ktp</label>
                      <input required="required"  name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                      <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG  (MAX. 800x400px).</p>
                    </div>
                    <button type="submit" class="text-white bg-yellow-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    </body>
</html>
@endsection
