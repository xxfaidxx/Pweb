function loadContent(url) {
    const container = document.getElementById("container-doc");

    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text();
        })
        .then((html) => {
            container.innerHTML = html;
        })
        .catch((error) => {
            container.innerHTML = `<p>Error loading content: ${error.message}</p>`;
        });
}
document.querySelectorAll(".tab").forEach((tab) => {
    tab.addEventListener("click", function () {
        document.querySelectorAll(".tab").forEach((t) => t.classList.remove("active"));

        this.classList.add("active");

        const url = this.getAttribute("data-url");
        if (url) {
            loadContent(url);
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const activeTab = document.querySelector(".tab.active");
    if (activeTab) {
        const url = activeTab.getAttribute("data-url");
        if (url) {
            loadContent(url);
        }
    }
});
