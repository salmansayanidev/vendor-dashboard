$(function () {
  $("#rental_module").DataTable({
    processing: true,
    language: {
      paginate: {
        previous: '<i class="fa-solid fa-angle-left"></i>',
        next: '<i class="fa-solid fa-angle-right"></i>',
      },
    },
    columns: [
      {
        data: "",
      },
      {
        data: "Room No",
      },
      {
        data: "Type",
      },
      {
        data: "AC/Non-AC",
      },
      {
        data: "Meal",
      },
      {
        data: "Bad Capicity",
      },
      {
        data: "Mobile",
      },
      {
        data: "Rent",
      },
      {
        data: "Actions",
      },
    ],
  });
});




const orderPopupWrap = document.querySelector(".rental-popup-wrap");

function bookingPopup() {
  orderPopupWrap.classList.add("active");
}

function bookingPopupClose() {
  orderPopupWrap.classList.remove("active");
}

function bookingPopupCan() {
  orderPopupWrap.classList.remove("active");
}
