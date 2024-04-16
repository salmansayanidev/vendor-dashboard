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
                    <h1 class="section-main-title theme-color mb-0">Payments Detail</h1>
                </div>
                <div class="col-12">
                    <div class="booking-charge-tabel-area position-relative">
                        <div class="section-sb-title-area">
                            <div class="">
                                <h2 class="section-sb-title">Payments Details</h2>
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
                        <div class="payment-detail-main-area">
                            <div class="payment-detail-inner left">
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

                                    <div class="flex-area">
                                        <div class="booking-detail-area">
                                            <label class="detail-title">My Commission:</label>
                                            <p class="booking-detail-text">$25</p>
                                        </div>
                                        <div class="booking-detail-area">
                                            <label class="detail-title">Total Amount:</label>
                                            <p class="booking-detail-text">$1250</p>
                                        </div>

                                        <div class="booking-detail-area">
                                            <label class="detail-title">Payment Method:</label>
                                            <p class="booking-detail-text">Paid through Cash</p>
                                        </div>
                                        <div class="booking-detail-area">
                                            <label class="detail-title">Driver’s Share:</label>
                                            <p class="booking-detail-text">$1230</p>
                                        </div>


                                        <div class="booking-detail-area">
                                            <label class="detail-title">Transaction I’d:</label>
                                            <p class="booking-detail-text">test@email.com</p>
                                        </div>
                                        <div class="booking-detail-area">
                                            <label class="detail-title">Paid to:</label>
                                            <p class="booking-detail-text">Driver Name</p>
                                        </div>
                                        <div class="booking-detail-area">
                                            <label class="detail-title">Date:</label>
                                            <p class="booking-detail-text">20-02-2024</p>
                                        </div>
                                        <div class="booking-detail-area">
                                            <label class="detail-title">Time:</label>
                                            <p class="booking-detail-text">13:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="payment-detail-inner">
                                <iframe class="payment-detail-map w-100" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14474.55390443057!2d67.0583856!3d24.9103104!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1712106990216!5m2!1sen!2s" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
