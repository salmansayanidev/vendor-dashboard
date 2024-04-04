<?php
    include "sidebar.php";
?>
<?php
    include "header.php";
?>


<main>
    <section class="welcome-section ">
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
    </section>
</main>





<?php
    include "footer.php";
?>


<script src="./assets/js/calender-global.js"></script>
<script src="./assets/js/calendar.js"></script>



