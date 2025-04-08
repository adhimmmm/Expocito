<!-- Main modal -->
@props(['open', 'data'])

<div x-show="{{ $open }}" x-cloak x-transition.opacity.300ms tabindex="-1" aria-hidden="true"
    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 md:inset-0 h-modal md:h-full">
    <div @click.away="{{ $open }} = false" class="relative p-6 w-[70%] h-[100%]  mt-[45px] max-h-[800px]  bg-white rounded-lg shadow-lg">
        <!-- Modal content -->
        <div class="relative h-[95%] p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">
                    Edit Profil
                </h3>
                <button type="button" @click="{{ $open }} = false"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <form action="{{ route('admin.edit', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2" x-data="{
                    imageUrl: '/storage/{{ $data->foto }}',
                    previewImage(event) {
                        const file = event.target.files[0];
                        if (file) {
                            this.imageUrl = URL.createObjectURL(file);
                        }
                    }
                }">
                    <!-- Kolom Kiri: Form -->
                    <div>
                        <div class="mb-4">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="nama"
                            value="{{ $data->nama }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan Nama" required>
                        </div>

                        <div class="mb-4">
                            <label for="kampus"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kampus</label>
                            <input type="text" name="kampus" id="kampus"
                            value="{{ $data->kampus }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan Kampus" required>
                        </div>

                        <div class="mb-4">
                            <label for="moto"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Moto</label>
                            <input type="text" name="moto" id="moto"
                            value="{{ $data->moto }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan Moto" required>
                        </div>

                        <div class="mb-4">
                            <label for="foto"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                            <input type="file" name="foto" id="foto" accept="image/*" @change="previewImage"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>

                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin mengedit data ini?')"
                            class="text-white w-full mt-2 py-2 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm text-center
                    dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Edit
                        </button>
                    </div>

                    <!-- Kolom Kanan: Preview Gambar -->
                    <div
                        class="flex items-center justify-center shadow-md mt-8 ml-2 w-full h-[550px] rounded-lg border-2 border-gray-300 overflow-hidden">
                        <img :src="imageUrl" alt="" class="object-cover w-full h-full">
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
