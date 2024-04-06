$(function () {
  $("#my_booking").DataTable({
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
        data: "Image",
      },
      {
        data: "Name",
      },
      {
        data: "Gender",
      },
      {
        data: "Mobile",
      },
      {
        data: "Emails",
      },
      {
        data: "Arrive",
      },
      {
        data: "Depart",
      },
      {
        data: "Room Type",
      },
      {
        data: "Payment",
      },
      {
        data: "Actions",
      },
    ],
  });
});







$('input[name="from"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true,
  // autoUpdateInput: true,
  locale: {
    cancelLabel: "Clear",
  },
});
$('input[name="to"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true,
  // autoUpdateInput: true,
  locale: {
    cancelLabel: "Clear",
  },
});











const orderPopupWrap = document.querySelector(".booking-popup-wrap");

function bookingPopup() {
  orderPopupWrap.classList.add("active");
}

function bookingPopupClose() {
  orderPopupWrap.classList.remove("active");
}

function bookingPopupCan() {
  orderPopupWrap.classList.remove("active");
}
