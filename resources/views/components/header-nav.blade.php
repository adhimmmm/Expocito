<header>
    <nav id="navbar"
        class=" fixed top-0 left-0 w-full h-auto shadow-md bg-opacity-0 bg-white backdrop-blur-sm border-gray-200 px-4 lg:px-6 py-5 z-50 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-2xl">
            <a href="#tentangKami" class="flex items-center">
                <img src="{{ asset('img/logo/expocito.jpeg') }}" class="mr-3 sm:h-9 h-[200px] w-full rounded-md"
                    alt="Expocito Logo" />
                <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white">Expocito</span>
            </a>
            <div class="flex items-center lg:order-2">
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-semibold lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ Request::is('/') ? '#tentangKami' : '/' }}"
                            class="block py-2 pr-4 pl-3 text-2xl
                        {{ Request::is('/') ? ' lg:text-primary-600  hover:text-primary-900 duration-100' : 'text-gray-700 hover:text-primary-900 ' }} dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ Request::is('anggota') ? '#anggotastart' : 'anggota' }}"
                            class="block py-2 pr-4 pl-3 text-2xl
                        {{ Request::is('anggota') ? ' lg:text-primary-600  hover:text-primary-900 duration-100'  : 'text-gray-700 hover:text-primary-900 ' }} dark:text-white"
                            aria-current="page">Anggota</a>
                    </li>
                    <li>
                        <a href="{{ route('dokumentasi') }}"
                            class="block py-2 pr-4 pl-3 text-2xl
                        {{ Request::is('dokumentasi') ? ' lg:text-primary-600  hover:text-primary-900 duration-100'  : 'text-gray-700 hover:text-primary-900 ' }} dark:text-white"
                            aria-current="page">Dokumentasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
