<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thelema-Marketplace Tour & Travel</title>
          <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/icon/iconbg.png"
        />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav class="bg-white shadow">
        @include('landing.layouts.includes.navbar')
    </nav>

    <main>@yield('content')</main>

    <footer class=" bg-white text-black-100 body-font">
        @include('landing.layouts.includes.footer')
    </footer>

</body>
</html>