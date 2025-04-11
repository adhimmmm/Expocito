@forelse ($members as $member)
    <a href="#" class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300 w-full max-w-sm mx-auto bg-white">
        <img alt="{{ $member->nama }}" src="{{ asset('storage/' . $member->foto) }}"
            class="w-full h-auto object-cover transition-opacity duration-300 group-hover:opacity-100" />
        <div class="absolute inset-0 flex flex-col justify-end p-4 bg-black/60 backdrop-blur-sm text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-lg font-bold">{{ $member->nama }}</p>
            <p class="text-sm mt-1">{{ $member->moto }}</p>
        </div>
    </a>
@empty
    <div class="col-span-full text-center text-gray-500 dark:text-gray-400">
        Tidak ada data ditemukan.
    </div>
@endforelse
