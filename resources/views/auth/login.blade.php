<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thelema - Login</title>
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
  <!-- Example -->
  <div class="flex min-h-screen">
  <!-- Container -->
  <div class="flex flex-row w-full">
    <!-- Sidebar -->
    <div class='hidden lg:flex flex-col justify-between bg-yellow-500 lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg'>
      <div class="flex items-center justify-start space-x-3">
        <img src="images/icon/iconbg.png" class="w-8 h-8" alt="">
        <a href="#" class="font-medium text-xl">Thelema</a>
      </div>
      <div class='space-y-5'>
        <h1 class="lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold">Enter your account and discover new
          experiences</h1>
        <p class="text-lg">You do not have an account?</p>
        <a href="{{ route('register.index') }}"
          class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">Create
          account here</a>
      </div>
      <p class="font-medium">© 2022 Company</p>
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
            <a href="{{ route('register.index') }}" class="underline font-medium text-yellow-500">
              Sign up now
            </a>
          </div>
        </div>

        <!-- Login box -->
        <div class="flex flex-1 flex-col  justify-center space-y-5 max-w-md">
          <div class="flex flex-col space-y-2 text-center">
            <h2 class="text-3xl md:text-4xl font-bold">Sign in to account</h2>
            <p class="text-md md:text-xl">Sign up or log in to place the order,no password require!</p>
          </div>
          <form action="{{route('login.store')}}" method="post">
           @csrf
          <div class="flex flex-col max-w-md space-y-5">
            <input type="email" name="email" placeholder="Email" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
            <input type="password"   name="password" placeholder="Password" class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
            <button type="submit" class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-black text-white">
              Sign in
            </button>
            <div class="flex justify-center items-center">
              <span class="w-full border border-black"></span>
              <span class="px-4">Or</span>
              <span class="w-full border border-black"></span>
            </div>
          </div>
          </form>
        </div>

      </div>
    

  </div>
  </div>
</body>
</html>
