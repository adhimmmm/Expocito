<!DOCTYPE html>
<html lang="en">
<x-head>Halaman Dokumentasi</x-head>

<body>

    <x-header-nav></x-header-nav>


    <div class="mt-[120px]"></div>


    <section class="flex items-center justify-center text-center  w-full">
        <div class="max-w-screen-2xl px-4">
            <div class="mx-auto">
                <h1
                    class=" mb-6 text-4xl font-extrabold tracking-tight leading-none text-blue-900 md:text-5xl xl:text-6xl">
                    Temukan lebih banyak kenangan kami disini
                </h1>
                <p class="max-w-3xl mx-auto mb-6 font-light text-gray-700 lg:mb-10 md:text-lg lg:text-xl">
                    "Setiap foto, setiap momen, dan setiap cerita yang kami bagi di sini adalah bagian dari perjalanan
                    kami yang penuh warna. Mari menjelajahi bersama kenangan-kenangan yang membentuk hari-hari berharga
                    kami—karena di balik setiap detail, ada makna dan kehangatan yang ingin kami bagikan denganmu."
                </p>
            </div>
        </div>
    </section>



    <div class="max-w-screen-2xl mx-auto w-full  space-y-10">
        <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[28rem] md:h-[36rem]">
                <div class="absolute inset-0 opacity-100 transition-opacity duration-700 ease-in-out"
                    data-carousel-item>
                    <img src="{{ asset('img/galery/DSC02003.jpg') }}" class="object-cover w-full h-full" alt="Slide 1">
                </div>
                <div class="absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/galery/DSC02108.jpg') }}" class="object-cover w-full h-full" alt="Slide 2">
                </div>
                <div class="absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/galery/DSC02164.jpg') }}" class="object-cover w-full h-full" alt="Slide 3">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-prev>
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button type="button"
                class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-next>
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <div class="max-w-screen-2xl mx-auto mt-12 px-4 text-start">
            <div class="w-full mx-auto">
                <h1 class="text-4xl font-bold mt-2 mb-6">"Potret Masa SMA: Saat-Saat Penuh Warna dalam Bingkai Kenangan"
                </h1>
                <p class="leading-relaxed">Ada sesuatu yang istimewa dari foto masa SMA—senyum polos, tawa renyah, dan
                    tatapan penuh mimpi yang terbingkai dalam satu potret sederhana. Waktu itu mungkin terasa biasa saja
                    saat kita menjalani hari-hari di sekolah, namun kini, setiap detail kecilnya menjadi begitu
                    berharga. Di balik pose kaku atau seragam yang sama, tersimpan jejak langkah kita yang dulu masih
                    belajar, bermimpi, dan berani mencoba. Itulah kenangan yang selalu layak untuk dikenang dan
                    dirindukan.
                </p>
                <div class="mt-5">
                    <a class="inline-block py-4 px-8 leading-none text-white bg-slate-800 hover:bg-pink-600 rounded shadow text-sm font-bold"
                        href="/signup">Sign-up for free</a>
                </div>
            </div>
        </div>
    </div>


    <x-footer></x-footer>

    <x-scriptJs></x-scriptJs>
</body>

</html>
