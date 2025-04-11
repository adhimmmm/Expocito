<!DOCTYPE html>
<html lang="en" class=" scroll-smooth">

<x-head>Halaman Anggota</x-head>

<body>

    <x-header-nav></x-header-nav>

    <section  class="flex items-center justify-center text-center mt-[150px] w-full">
        <div class="max-w-screen-xl px-4" id="anggotastart">
            <div class="mx-auto">
                <h1 class=" mb-6 text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl xl:text-6xl">
                    Squad Expocito: Kenalan dengan Para Anggota Kelas Keren Ini!
                </h1>
                <p class="max-w-3xl mx-auto mb-6 font-light text-gray-700 lg:mb-10 md:text-lg lg:text-xl">
                    Halo, teman-teman! 🌟 Selamat datang di halaman spesial kita, tempat kamu bisa mengenal lebih dekat
                    para anggota kelas Expocito ! Di sini, setiap orang punya cerita unik, bakat tersendiri, dan
                    semangat yang luar biasa. Kami percaya bahwa kebersamaan adalah kunci kesuksesan, dan itulah yang
                    membuat kelas ini begitu istimewa.
                </p>
            </div>
        </div>
    </section>

    {{-- BAGIAN PENCARIAN --}}
    <div class="relative max-w-screen-xl mx-auto bg-gray-200 shadow-lg mb-5 dark:bg-gray-800 sm:rounded-lg">
        <div class="p-4">
            <div class="flex items-center justify-between space-x-4">
                {{-- INPUT PENCARIAN --}}
                <div class="w-full">
                    <label for="searchInput" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="searchInput"
                            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50
                    focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Cari berdasarkan nama..." value="{{ request('search') }}" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=" w-full py-8 space-y-5 bg-bwhite">
        <div class="mx-auto max-w-screen-2xl">
            {{-- BAGIAN KARTU --}}
            <section class="max-w-screen-2xl mx-auto px-4 py-8 space-y-5 bg-white">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6" id="cardContainer">
                    {{-- Ini akan di-replace lewat AJAX --}}
                    @include('partials.member-list', ['members' => $members])
                </div>
                <div id="paginationLinks">
                    {{ $members->links() }}
                </div>
            </section>
        </div>
    </section>
    {{--  untuk footer  --}}
    <x-footer></x-footer>

    <script src="{{ asset('js/anggota.js') }}"></script>

</body>

</html>
