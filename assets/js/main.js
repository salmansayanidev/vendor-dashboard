const menuOpenBtn = document.querySelector(".menu-btn");
const sideBar = document.querySelector(".dash-left-sidebar");
const menuClsBtn = document.querySelector(".menu-cls-btn");

menuOpenBtn.addEventListener("click", () => {
  sideBar.classList.add("active");
});

menuClsBtn.addEventListener("click", () => {
  sideBar.classList.remove("active");
});


const searchPopup = document.querySelector('.search-input-area')
const seaPopOpen = document.querySelector('.res-search-btn')
const seaPopCls = document.querySelector('.search-pop-cls')

seaPopOpen?.addEventListener('click' , () => {
  searchPopup.classList.add('active')
})

seaPopCls?.addEventListener('click' , () => {
  searchPopup.classList.remove('active')
})