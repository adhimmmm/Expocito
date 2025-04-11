//untuk Typewriter effect tulisan
const words = ["Selamat datang"];
let i = 0;
let j = 0;
let currentWord = false;
let isDeleting = "";
let speed = 200;

function type() {
    currentWord = words[i];

    if (isDeleting) {
        j--;
        speed = 50;
    } else {
        j++;
        speed = 100;
    }

    document.getElementById("expocito").textContent = currentWord.substring(
        0,
        j
    );

    if (!isDeleting && j === currentWord.length) {
        speed = 2000;
        isDeleting = true;
    } else if (isDeleting && j === 0) {
        isDeleting = false;
        i = (i + 1) % words.length;
        speed = 500;
    }

    setTimeout(type, speed);
}

type();




//fungsi button kiri kanan image
 document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll('[data-carousel-item]');
        const nextBtn = document.querySelector('[data-carousel-next]');
        const prevBtn = document.querySelector('[data-carousel-prev]');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('opacity-100', 'z-20');
                slide.classList.add('opacity-0', 'z-10');

                if (i === index) {
                    slide.classList.remove('opacity-0', 'z-10');
                    slide.classList.add('opacity-100', 'z-20');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlideFunc() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        if (prevBtn) prevBtn.addEventListener('click', prevSlideFunc);

        showSlide(currentSlide);

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove(
                    "transition-opacity",
                    "duration-1000",
                    "ease-in-out"
                );

                if (i === index) {
                    slide.classList.add("z-20");
                    setTimeout(() => {
                        slide.classList.remove("opacity-0");
                        slide.classList.add(
                            "opacity-100",
                            "transition-opacity",
                            "duration-1000",
                            "ease-in-out"
                        );
                    }, 50);
                } else {
                    slide.classList.remove("opacity-100");
                    slide.classList.add(
                        "opacity-0",
                        "transition-opacity",
                        "duration-1000",
                        "ease-in-out"
                    );
                    slide.classList.remove("z-20");
                    slide.classList.add("z-10");
                }
            });
        }

        // Auto-slide every 5 seconds
        setInterval(nextSlide, 5000);
 });


