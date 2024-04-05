const menuOpenBtn = document.querySelector(".menu-btn");
const sideBar = document.querySelector(".dash-left-sidebar");
const menuClsBtn = document.querySelector(".menu-cls-btn");

menuOpenBtn.addEventListener("click", () => {
  sideBar.classList.add("active");
});

menuClsBtn.addEventListener("click", () => {
  sideBar.classList.remove("active");
});
