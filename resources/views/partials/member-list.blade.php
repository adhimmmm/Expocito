{{--  <main class="grid place-items-center min-h-screen bg-gradient-to-t from-blue-200 to-indigo-900 p-5">
    <div>
        <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-gray-200 mb-5">Made for you</h1>

        @forelse ($members as $member)
            <section class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- CARD -->
                <div class="bg-gray-900 shadow-lg rounded p-3">
                    <div class="group relative">
                        <img class="w-full md:w-72 block rounded"
                            src="https://upload.wikimedia.org/wikipedia/en/f/f1/Tycho_-_Epoch.jpg" alt="" />
                        <div
                            class="absolute bg-black rounded bg-opacity-0 group-hover:bg-opacity-60 w-full h-full top-0 flex items-center group-hover:opacity-100 transition justify-evenly">
                            <!-- Action buttons -->
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-white text-lg">{{ $member->name }}</h3>
                        <p class="text-gray-400">{{ $member->email }}</p>
                    </div>
                </div>
                <!-- END CARD -->
            </section>
        @empty
            <div class="text-center text-gray-500 dark:text-gray-400">
                Tidak ada data ditemukan.
            </div>
        @endforelse
    </div>
</main>  --}}

@forelse ($members as $member)
    <a href="#" class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300 bg-black ">
        {{-- Gambar --}}
        <img
            alt="{{ $member->nama }}"
            src="{{ asset('storage/' . $member->foto) }}"
            class="absolute inset-0 w-full h-full object-cover opacity-75 transition-opacity duration-300 group-hover:opacity-50"
        />

        {{-- Konten Atas --}}
        <div class="relative p-4 sm:p-6 lg:p-8 z-10">
            <p class="text-sm font-medium tracking-widest text-black uppercase">Nama :</p>
            <p class="text-xl font-bold text-white sm:text-2xl">{{ $member->nama }}</p>

            {{-- Konten yang Muncul Saat Hover --}}
            <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                    class="translate-y-8 opacity-0 transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100"
                >
                    <p class="text-sm text-white">
                        {{ $member->moto }}
                    </p>
                </div>
            </div>
        </div>
    </a>
@empty
    <div class="col-span-full text-center text-gray-500 dark:text-gray-400">
        Tidak ada data ditemukan.
    </div>
@endforelse

