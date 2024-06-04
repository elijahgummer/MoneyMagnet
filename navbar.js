document.addEventListener("DOMContentLoaded", function () {
    const icon = document.querySelector(".icon");
    const navbarList = document.querySelector(".navbar-list");

    icon.addEventListener("click", function () {
        navbarList.classList.toggle("show");
    });
});
