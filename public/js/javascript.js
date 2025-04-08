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




