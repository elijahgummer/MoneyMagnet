const navbar = document.querySelector("nav");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");

menuBtn.onclick = () => {
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
};

cancelBtn.onclick = () => {
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
};