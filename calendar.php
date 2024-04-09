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


    function disableSpecificDates(dates) {
    dates.forEach(function (date) {
      var dateElements = $(".fc-day[data-date='" + date + "']");
      console.log(dateElements);
      dateElements.addClass("disabled");
    });
  }

  // Array of dates to disable (must match the format "mm/dd/yyyy")
  var disabledDates = ["02/20/2024", "02/25/2024", "02/27/2024"];
  disableSpecificDates(disabledDates);

//   const calendarTable = document.querySelector(".calendar-table tbody");
//   const observer = new MutationObserver(function (mutations) {
//     mutations.forEach(function (mutation) {
//       disableSpecificDates(disabledDates);
//       disablePastDates();
//     });
//   });



</script>

<script src="./assets/js/calender-global.js"></script>
<script src="./assets/js/calendar.js"></script>