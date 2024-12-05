// Smooth Scroll Implementation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            window.scrollTo({
                top: target.offsetTop,
                behavior: 'smooth',
            });
        }
    });
});

// For Toggle Button
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggle-btn");
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("main-content");

    toggleBtn.addEventListener("click", () => {
        sidebar.classList.toggle("show");
        toggleBtn.classList.toggle("show");
    });
});
