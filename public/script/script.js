// Fungsi untuk memuat konten secara dinamis
function loadContent(url) {
    // Dapatkan elemen di mana konten akan dimuat
    const container = document.getElementById("container-doc");

    // Lakukan permintaan HTTP untuk mendapatkan konten dari URL
    fetch(url)
        .then((response) => {
            // Periksa apakah permintaan berhasil
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text();
        })
        .then((html) => {
            // Tampilkan konten di dalam container
            container.innerHTML = html;
        })
        .catch((error) => {
            // Tampilkan pesan error jika ada masalah
            container.innerHTML = `<p>Error loading content: ${error.message}</p>`;
        });
}

// Tambahkan event listener untuk tab
document.querySelectorAll(".tab").forEach((tab) => {
    tab.addEventListener("click", function () {
        // Hapus kelas 'active' dari semua tab
        document.querySelectorAll(".tab").forEach((t) => t.classList.remove("active"));
        
        // Tambahkan kelas 'active' pada tab yang diklik
        this.classList.add("active");

        // Ambil atribut data-url dan muat konten jika ada
        const url = this.getAttribute("data-url");
        if (url) {
            loadContent(url);
        }
    });
});

// Muat konten default untuk tab yang aktif saat halaman pertama kali dimuat
document.addEventListener("DOMContentLoaded", () => {
    const activeTab = document.querySelector(".tab.active");
    if (activeTab) {
        const url = activeTab.getAttribute("data-url");
        if (url) {
            loadContent(url);
        }
    }
});
