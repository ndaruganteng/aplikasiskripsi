<nav class="bg-white border-gray-200 pt-6 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="{{ route('home.index') }}" class="flex items-center">
            <img src="images/icon/iconbg.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">THELEMA</span>
        </a>
        <div class="flex items-center">
            @if(auth()->user()->role == "user")
                <p class="mr-3 text-sm font-medium text-gray-500 dark:text-white hover:underline">{{ Auth::User()->nama }}</p>
            @endif
            <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 " src="images/icon/profile.png" alt="user photo">
                
            </button>
            <div class="ml-4">
                <a href="{{ route('cart.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1V2m6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5H16Z"/></svg>
                </a>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                </div>
                <ul class="py-1" aria-labelledby="user-menu-button">
                <!-- <li>
                    <a href="{{ route('user.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                </li> -->
                <li>
                    <a href="{{ route('pesanan.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Pesanan Saya</a>
                </li>
                <li>
                    <a href="{{ route('cart.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keranjang</a>
                </li>
                <li>
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<nav class="bg-yellow-500 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
        <div class="flex items-center">
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                <li>
                    <a href="{{ route('home.index') }}" class="text-white dark:text-white hover:underline" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('tour.index') }}" class="text-white dark:text-white hover:underline">Tour</a>
                </li>
                <li>
                    <a href="{{ route('tambahmitra.index') }}" class="text-white dark:text-white hover:underline">Daftar Mitra</a>
                </li>
            </ul>
        </div>
    </div>
</nav>