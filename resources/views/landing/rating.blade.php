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
    <body class="">
        <section class="text-gray-600 body-font">
            <div class="container px-40  py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 w-full mx-auto ">
                            <div class="text-center mb-4">
                                <h1 class="sm:text-3xl text-2xl font-semibold title-font  mb-4">Beri Nilai </h1>
                                <div class="flex mt-3 justify-center">                               
                                    <div class="flex mb-4">
                                        <span class="flex items-center">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 cursor-pointer text-yellow-300" viewBox="0 0 24 24">
                                             <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 cursor-pointer text-yellow-300" viewBox="0 0 24 24">
                                             <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 cursor-pointer text-yellow-300" viewBox="0 0 24 24">
                                             <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 cursor-pointer text-yellow-300" viewBox="0 0 24 24">
                                             <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 cursor-pointer text-yellow-300" viewBox="0 0 24 24">
                                             <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6 mx-auto">
                                <textarea id="message" rows="4" class="block mx-auto p-2.5 w-1/2  text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" 
                                    placeholder="komentar.......">
                                </textarea>
                            </div>
                            <div class="mb-6 mx-auto">
                                <button type="submit" class="text-white block py-2.5 px-8  mx-auto bg-yellow-500 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto  text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>                                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </body>
</html>
@endsection
