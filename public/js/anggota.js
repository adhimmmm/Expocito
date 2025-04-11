document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const cardContainer = document.getElementById("cardContainer");
    const paginationLinks = document.getElementById("paginationLinks");

    searchInput.addEventListener("keyup", function () {
        const query = this.value;

        fetch(`/anggota?search=${encodeURIComponent(query)}`, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((res) => res.json())
            .then((data) => {
                cardContainer.innerHTML = data.html;
                paginationLinks.innerHTML = data.pagination;
            })
            .catch((err) => {
                console.error("AJAX error:", err);
            });
    });
});
