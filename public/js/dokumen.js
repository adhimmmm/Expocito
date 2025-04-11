//function untuk button view di halaman document
    document.addEventListener('DOMContentLoaded', function () {
        const viewButtons = document.querySelectorAll('.viewButton');
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeModal = document.getElementById('closeModal');

        viewButtons.forEach(button => {
            button.addEventListener('click', function () {
                const imageSrc = this.getAttribute('data-image');
                modalImage.src = imageSrc;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });

        closeModal.addEventListener('click', function () {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            modalImage.src = '';
        });

        // Tambahkan opsi untuk klik luar gambar menutup modal
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
                modalImage.src = '';
            }
        });
    });

