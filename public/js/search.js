document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const cardContainer = document.getElementById("cardContainer");

    searchInput.addEventListener("input", function () {
        let query = this.value;

        fetch(`/anggota?search=${encodeURIComponent(query)}`, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((response) => response.text())
            .then((data) => {
                cardContainer.innerHTML = data;
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });
});
