<nav class="bg-white border-gray-200 pt-6 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="{{ route('home.index') }}" class="flex items-center">
            <img src="images/icon/iconbg.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">THELEMA</span>
        </a>
        <div class="flex items-center">
            @if(Auth::check() && Auth::user()->role == 'User')
                <p class="mr-3 text-sm font-medium text-gray-900 dark:text-white hover:underline">{{ Auth::wisatawan()->nama }}</p>
            @else
            @endif
            <!-- <a href="#" class="mr-3 text-sm font-medium text-gray-500 dark:text-white hover:underline">Jamal</a> -->
            <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 " src="images/icon/profile.png" alt="user photo">
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 dark:text-white">HAPPYY</span>
                <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">happy@gmail.com</span>
                </div>
                <ul class="py-1" aria-labelledby="user-menu-button">
                <!-- <li>
                    <a href="{{ route('user.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                </li> -->
                <li>
                    <a href="{{ route('user.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                </li>
                <li>
                    <a href="{{ route('pesanan.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Pesanan Saya</a>
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
                    <a href="{{ route('mitra.index') }}" class="text-white dark:text-white hover:underline">Daftar Mitra</a>
                </li>
            </ul>
        </div>
    </div>
</nav>