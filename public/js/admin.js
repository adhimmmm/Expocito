document.getElementById("searchInput").addEventListener("input", function () {
    const query = this.value;
    const url = `{{ route('admin.index') }}?search=${encodeURIComponent(
        query
    )}`;

    fetch(url, {
        headers: {
            "X-Requested-With": "XMLHttpRequest",
        },
    })
        .then((res) => res.text())
        .then((html) => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, "text/html");
            const newTable = doc.querySelector("#dataContainer");
            document.querySelector("#dataContainer").innerHTML =
                newTable.innerHTML;
        });
});
