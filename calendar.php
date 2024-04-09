<?php
include "sidebar.php";
?>
<?php
include "header.php";
?>


<main>
    <section class="welcome-section position-relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-main-title theme-color mb-0">Calendar</h1>
                </div>
                <div class="col-12">
                    <div class="booking-charge-tabel-area">
                        <div class="section-sb-title-area">
                            <div class="">
                                <h2 class="section-sb-title">Calendar</h2>
                            </div>
                            <div class="">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle sec-inner-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="calender-popup-wrap">
            <div class="calender-popup-main">
                <div class="popup-top">
                    <div class="name-pro-area">
                        <h4 class="name">Booking</h4>
                    </div>
                    <div class="pop-cls-btn-area">
                        <button type="button" onclick="bookingPopupClose()" class="pop-cls-btn"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                </div>
                <div class="popup-center">
                    <div class="popup-fields-area w-100">
                        <div class="position-relative">
                            <input class="pop-field-input mt-0" type="text" placeholder="Title *" name="" id="">
                        </div>
                    </div>
                    <div class="popup-fields-area w-100">
                        <div class="position-relative">
                            <input class="pop-field-input mt-0" type="text" placeholder="Category *" name="" id="">
                        </div>
                    </div>
                    <div class="popup-fields-area">
                        <label class="pop-field-name">Arrive Date</label>
                        <div class="position-relative">
                            <input class="pop-field-input mt-0" type="text" placeholder="15-03-2024" readonly name="from" id="">
                            <i class="fa-solid fa-calendar-days field-icon"></i>
                        </div>
                    </div>
                    <div class="popup-fields-area">
                        <label class="pop-field-name">Depart Date</label>
                        <div class="position-relative">
                            <input class="pop-field-input mt-0" type="text" placeholder="12-04-2024" readonly name="to" id="">
                            <i class="fa-solid fa-calendar-days field-icon"></i>
                        </div>
                    </div>
                    <div class="popup-fields-area w-100">
                        <div class="position-relative">
                            <textarea class="pop-field-input mt-0" placeholder="Event Details" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="popup-btm">
                    <button class="theme-btn save" type="button">Save</button>
                    <button class="theme-btn cancel" onclick="bookingPopupCan()" type="button">Cancel</button>
                </div>
            </div>
        </div>
    </section>
</main>





<?php
include "footer.php";
?>

<script>
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


    const orderPopupWrap = document.querySelector(".calender-popup-wrap");


    function bookingPopupCan() {
        orderPopupWrap.classList.remove("active");
    }

    function bookingPopupClose() {
        orderPopupWrap.classList.remove("active");
    }


    document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

  var defaultDates = [
    "2024-01-03",
    "2024-01-13",
    "2024-01-18",
    "2024-01-29"
  ];

  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
    },
    initialDate: "2024-01-12",
    navLinks: true, // can click day/week names to navigate views
    businessHours: true, // display business hours
    editable: false,
    selectable: true,
    events: [
      {
        title: "Booked",
        start: "2024-01-03T13:00:00",
        constraint: "businessHours",
        color: "#000",
      },
      {
        title: "Booked",
        start: "2024-01-13T11:00:00",
        constraint: "availableForMeeting", // defined below
        color: "#257e4a",
      },
      {
        title: "Booked",
        start: "2024-01-18",
      },
      {
        title: "Booked",
        start: "2024-01-29T20:00:00",
      }
    ],
 

 dayCellDidMount: function (info) {
  var date = info.date.toISOString().slice(0, 10);
  if (defaultDates.includes(date)) {
    var nextDay = new Date(info.date);
    nextDay.setDate(nextDay.getDate()); // Calculate the next day
    var nextDayISO = nextDay.toISOString().slice(0, 10);
    var nextDayEl = document.querySelector('[data-date="' + nextDayISO + '"]');
    if (nextDayEl) {
      nextDayEl.classList.add('booked');
      nextDayEl.addEventListener('click', function() {
       $('.calender-popup-wrap').addClass("active")
      });
    }
  }
}


  });

  calendar.render();
});
;



</script>

<script src="./assets/js/calender-global.js"></script>
<script src="./assets/js/calendar.js"></script>