<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thelema - Login</title>
  <link rel="icon" type="image/png" sizes="56x56" href="images/icon/iconbg.png" />
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    html,
    body {
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

  <!-- <main class="login-form">
    <div class="cotainer">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Reset Password</div>
            <div class="card-body">

              @if (Session::has('message'))
              <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
              </div>
              @endif

              <form action="{{ route('forget.password.post') }}" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                  <div class="col-md-6">
                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Send Password Reset Link
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> -->

  <div class="flex min-h-screen">
    <div class="flex flex-row w-full">
      <div class='hidden lg:flex flex-col justify-between bg-yellow-500 lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg'>
        <div class="flex items-center justify-start space-x-3">
          <img src="images/icon/iconbg.png" class="w-8 h-8" alt="">
          <a href="#" class="font-medium text-xl">Thelema</a>
        </div>
        <div class='space-y-5'>
          <h1 class="lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold">
            Reset Password Akun Anda dan temukan pengalaman baru
          </h1>
          <p class="text-lg">Anda tidak memiliki akun?</p>
          <a href="{{ route('register.index') }}"
            class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">
            Buat akun di sini
          </a>
        </div>
        <p class="font-medium">Thelama ©2023</p>
      </div>
      <div class="flex flex-1 flex-col items-center justify-center px-10 relative">
        <!-- <div class="flex lg:hidden justify-between items-center w-full py-4">
          <div class="flex items-center justify-start space-x-3">
            <span class="bg-black rounded-full w-6 h-6"></span>
            <a href="#" class="font-medium text-lg">Brand</a>
          </div>
          <div class="flex items-center space-x-2">
            <span>Tidak Punya Akun? </span>
            <a href="{{ route('register.index') }}" class="underline font-medium text-yellow-500">
              Daftar Sekarang!
            </a>
          </div>
        </div> -->
        <div class="flex flex-1 flex-col  justify-center space-y-5 max-w-md">
          <div class="flex flex-col space-y-2 text-center">
            <h2 class="text-3xl md:text-4xl mb-2 font-bold">Reset Password</h2>
            <p class="text-md mb-4 md:text-xl">Input Email untuk melakukan reset password!</p>
          </div>

          @if (Session::has('message'))
          <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
            role="alert">
            <span class="font-medium">{{ Session::get('message') }} </span> success
          </div>
          @endif
          <form action="{{ route('forget.password.post') }}" method="POST">
            @csrf
            <div class="flex flex-col max-w-md space-y-5">
              <input type="text" id="email_address" name="email" required autofocus
                class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
              @if ($errors->has('email'))
              <span class="text-red-700">{{ $errors->first('email') }}</span>
              @endif
              <button type="submit"
                class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-black text-white">
                Send
              </button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>