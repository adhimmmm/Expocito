    const slides = document.querySelectorAll('[data-carousel-item]');
    const nextBtn = document.querySelector('[data-carousel-next]');
    const prevBtn = document.querySelector('[data-carousel-prev]');
    let current = 0;

    const showSlide = (index) => {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('opacity-0');
                slide.classList.add('opacity-100', 'z-10');
            } else {
                slide.classList.remove('opacity-100', 'z-10');
                slide.classList.add('opacity-0');
            }
        });
    };

    nextBtn.addEventListener('click', () => {
        current = (current + 1) % slides.length;
        showSlide(current);
    });

    prevBtn.addEventListener('click', () => {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    });

    // Optional: auto slide every 5s
    setInterval(() => {
        current = (current + 1) % slides.length;
        showSlide(current);
    }, 5000);


