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
                    <h1 class="section-main-title theme-color mb-0">Booking</h1>
                </div>
                <div class="col-12">
                    <div class="booking-charge-tabel-area position-relative">
                        <div class="section-sb-title-area">
                            <div class="">
                                <h2 class="section-sb-title">Booking</h2>
                            </div>
                            <div class="">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle sec-inner-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                        <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                        <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="booking-detail-map-area">
                            <iframe class="bookin-map w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14474.55390443057!2d67.05838564999999!3d24.9103104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1712094792907!5m2!1sen!2s" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="user-driver-booking">
                            <div class="user-driver-booking-inner">
                                <div class="booking-user-detail-main">
                                    <div class="booking-user-top-area">
                                        <div class="">
                                            <img class="img-fluid booking-detail-img" src="./assets/images/booking-detail-img.png" alt="">
                                        </div>
                                        <div class="">
                                            <h4 class="book-detail-name">User Name</h4>
                                            <div class="">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-user-btm-area">
                                        <h5 class="section-sb-title mt-4">Trip Details :</h5>

                                        <div class="booking-detail-area">
                                            <label class="detail-title">Pick Up Location:</label>
                                            <p class="booking-detail-text">A-15 Main Dian Street, Chicago</p>
                                        </div>
                                        <div class="booking-detail-area">
                                            <label class="detail-title">Drop Off Location:</label>
                                            <p class="booking-detail-text">C31 Neon Club Street, Chicago</p>
                                        </div>

                                        <div class="flex-area">
                                            <div class="booking-detail-area">
                                                <label class="detail-title">Time:</label>
                                                <p class="booking-detail-text">12:00</p>
                                            </div>
                                            <div class="booking-detail-area">
                                                <label class="detail-title">Date:</label>
                                                <p class="booking-detail-text">20-02-2024</p>
                                            </div>
                                            <div class="booking-detail-area">
                                                <label class="detail-title">Amount:</label>
                                                <p class="booking-detail-text">$1250</p>
                                            </div>
                                            <div class="booking-detail-area">
                                                <label class="detail-title">Payment Method:</label>
                                                <p class="booking-detail-text">Paid through Cash</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="user-driver-booking-inner">
                                <div class="booking-user-detail-main">
                                    <div class="booking-user-top-area mb-45px">
                                        <div class="">
                                            <img class="img-fluid booking-detail-img" src="./assets/images/booking-detail-img.png" alt="">
                                        </div>
                                        <div class="">
                                            <h4 class="book-detail-name">Driver Name</h4>
                                            <div class="">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-user-btm-area">

                                        <div class="booking-detail-area">
                                            <label class="detail-title">Phone No:</label>
                                            <p class="booking-detail-text">(123)456789</p>
                                        </div>
                                        <div class="booking-detail-area">
                                            <label class="detail-title">E-mail:</label>
                                            <p class="booking-detail-text">test@email.com</p>
                                        </div>

                                        <div class="booking-detail-area">
                                            <label class="detail-title">No of Trips:</label>
                                            <p class="booking-detail-text">545</p>
                                        </div>
                                        <div class="booking-detail-area">
                                            <label class="detail-title">Rating:</label>
                                            <p class="booking-detail-text">Lorem Ipsum is a dummy Text Generate from google for printing and typesetting industry has been use from here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>






<?php
    include "footer.php";
?>



