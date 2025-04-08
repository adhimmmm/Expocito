<!DOCTYPE html>
<html lang="en">

<x-head>Halaman Anggota</x-head>

<body>

    <x-header-nav></x-header-nav>

    <div class="mt-[90px]"></div>

    <section class="py-20 px-4 bg-white">
        <div class="container mx-auto max-w-7xl">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2
                    class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Meet Our Talented Team</h2>
                <div class="h-1 w-20 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6 rounded-full">
                </div>
                <p class="text-gray-600 text-lg">We,re a dynamic group of individuals who are passionate about what
                    we do and dedicated to delivering the best results for our clients.</p>
            </div>


            {{-- BAGIAN PENCARIAN --}}
            <div class="relative bg-white shadow-lg mb-5 dark:bg-gray-800 sm:rounded-lg">
                <div class="p-4">
                    <div class="flex items-center justify-between space-x-4">
                        {{-- INPUT PENCARIAN --}}
                        <div class="w-full">
                            <label for="searchInput" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="searchInput"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50
                    focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Cari berdasarkan nama..." value="{{ request('search') }}">
                            </div>
                        </div>

                        {{-- TOMBOL CARI (optional, tapi tidak dibutuhkan untuk live search) --}}
                        {{-- <div class="flex-shrink-0">
                <button type="submit" class="...">Cari</button>
            </div> --}}
                    </div>
                </div>
            </div>

            {{-- BAGIAN KARTU --}}
            <section class="max-w-screen-2xl mx-auto px-4 py-8 space-y-5">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6" id="cardContainer">
                    @include('partials.member-list', ['members' => $members])
                </div>
                <div>
                    {{ $members->links() }}
                </div>
            </section>

        </div>
    </section>
    {{--  untuk footer  --}}
    <x-footer></x-footer>

    <x-scriptJs></x-scriptJs>

</body>

</html>
