<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thelema - Register</title>
    <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/icon/iconbg.png"
    />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

      html, body{
        font-family: 'Roboto', sans-serif;
      }

      .break-inside {
        -moz-column-break-inside: avoid;
        break-inside: avoid;
      }
      body {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        min-height: 100vh;
        line-height: 1.5;
      }

    </style>

  </head>

  <body class="bg-white">
  <div class="flex min-h-screen">

    <!-- Container -->
    <div class="flex flex-row w-full">

      <!-- Sidebar -->
      <div class='hidden lg:flex flex-col justify-between bg-yellow-500 lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg'>
        <div class="flex items-center justify-start space-x-3">
          <!-- <span class="bg-black rounded-full w-8 h-8"></span> -->
          <img src="images/icon/iconbg.png" class="w-8 h-8" alt="">
          <a href="#" class="font-medium text-xl">Thelema</a>
        </div>
        <div class='space-y-5'>
          <h1 class="lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold">
            Buat akun dan temukan pengalaman baru
          </h1>
          <a href="{{ route('login.index') }}"
              class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">
               Kembali <i class="fa-solid fa-arrow-left"></i>
          </a>
        </div>
        <p class="font-medium">Thelema ©2023</p>
      </div>

      <!-- Login -->
      <div class="flex flex-1 flex-col items-center justify-center px-10 relative">
        <div class="flex lg:hidden justify-between items-center w-full py-4">
          <div class="flex items-center justify-start space-x-3">
            <span class="bg-black rounded-full w-6 h-6"></span>
            <a href="#" class="font-medium text-lg">Brand</a>
          </div>
          <div class="flex items-center space-x-2">
            <span>Not a member? </span>
            <a href="#" class="underline font-medium text-[#070eff]">
              Sign up now
            </a>
          </div>
        </div>
        <!-- Login box -->
        <div class="flex flex-1 flex-col  justify-center space-y-5 max-w-md">
          <div class="flex flex-col space-y-2 text-center">
            <h2 class="text-3xl md:text-4xl font-bold"> Create your account </h2>
            <p class="text-md md:text-xl">Daftar atau masuk untuk temukan pengalaman baru!</p>
          </div>
          <form action="/register" method="POST">
          @csrf
            <div class="flex flex-col max-w-md space-y-5">
              <input type="nama" name="nama" placeholder="Nama Lengkap" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
              <input type="username" name="username" placeholder="Username" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
              <input type="email" name="email" placeholder="Email" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
              <input type="no_hp" name="no_hp" placeholder="No Telepon" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
              <input type="password" name="password" placeholder="Password" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
              <label class="blocktext-sm font-medium text-gray-900 dark:text-white" for="file_input">Foto Profile</label>
              <input type="file" name="image"  class=" font-medium w-full text-sm px-3 pt-2 border-black md:px-4 md:py-3 border-2 text-gray-900 rounded-lg cursor-pointer bg-gray-50 " >
              <button type="submit" class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-black text-white">
                Sign in
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>
  <!-- Example -->
</body>



</html>
