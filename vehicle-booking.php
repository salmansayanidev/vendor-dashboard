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
                    <h1 class="section-main-title theme-color mb-0">Vehicle Bookings</h1>
                </div>
                <div class="col-12">
                    <div class="booking-charge-tabel-area">
                        <div class="section-sb-title-area">
                            <div class="">
                                <h2 class="section-sb-title">Room Booking Charge</h2>
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
                        <div class="table-parent">
                            <table class="datatables-ajax table-responsive table-stripe table theme-tabel" id="my_booking">
                                <thead>
                                    <tr>
                                        <th><span class="box"></span></th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
                                        <th>Emails</th>
                                        <th>Arrive</th>
                                        <th>Depart</th>
                                        <th>Room Type</th>
                                        <th>Payment</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-1.png" alt=""></td>
                                        <td>Amelia Deo</td>
                                        <td>Female</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>15-03-2024</td>
                                        <td>12-04-2024</td>
                                        <td>Single</td>
                                        <td><span class="paid-status">Paid</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-2.png" alt=""></td>
                                        <td>Jens Brinkers</td>
                                        <td>Female</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>18-03-2024</td>
                                        <td>14-04-2024</td>
                                        <td>Double</td>
                                        <td><span class="unpaid-status">Unpaid</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-3.png" alt=""></td>
                                        <td>Mark Hey</td>
                                        <td>Male</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>20-03-2024</td>
                                        <td>18-04-2024</td>
                                        <td>Apartment</td>
                                        <td><span class="pending-status">Pending</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-1.png" alt=""></td>
                                        <td>Amelia Deo</td>
                                        <td>Female</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>15-03-2024</td>
                                        <td>12-04-2024</td>
                                        <td>Single</td>
                                        <td><span class="paid-status">Paid</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-2.png" alt=""></td>
                                        <td>Jens Brinkers</td>
                                        <td>Female</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>18-03-2024</td>
                                        <td>14-04-2024</td>
                                        <td>Double</td>
                                        <td><span class="unpaid-status">Unpaid</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-3.png" alt=""></td>
                                        <td>Mark Hey</td>
                                        <td>Male</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>20-03-2024</td>
                                        <td>18-04-2024</td>
                                        <td>Apartment</td>
                                        <td><span class="pending-status">Pending</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-1.png" alt=""></td>
                                        <td>Amelia Deo</td>
                                        <td>Female</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>15-03-2024</td>
                                        <td>12-04-2024</td>
                                        <td>Single</td>
                                        <td><span class="paid-status">Paid</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-2.png" alt=""></td>
                                        <td>Jens Brinkers</td>
                                        <td>Female</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>18-03-2024</td>
                                        <td>14-04-2024</td>
                                        <td>Double</td>
                                        <td><span class="unpaid-status">Unpaid</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-3.png" alt=""></td>
                                        <td>Mark Hey</td>
                                        <td>Male</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>20-03-2024</td>
                                        <td>18-04-2024</td>
                                        <td>Apartment</td>
                                        <td><span class="pending-status">Pending</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-1.png" alt=""></td>
                                        <td>Amelia Deo</td>
                                        <td>Female</td>
                                        <td>(123)456789</td>
                                        <td>test@email.com</td>
                                        <td>15-03-2024</td>
                                        <td>12-04-2024</td>
                                        <td>Single</td>
                                        <td><span class="paid-status">Paid</span></td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button"  onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="booking-popup-wrap">
                            <div class="booking-popup-main">
                                <div class="popup-top">
                                    <div class="name-pro-area">
                                        <img class="img-fluid pop-pro-img" src="./assets/images/pop-pro-img.png" alt="">
                                        <h4 class="name">Amelia Deo</h4>
                                    </div>
                                    <div class="pop-cls-btn-area">
                                        <button type="button" onclick="bookingPopupClose()" class="pop-cls-btn"><i class="fa-solid fa-xmark"></i></button>
                                    </div>
                                </div>
                                <div class="popup-center">
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Name</label>
                                        <div class="position-relative">
                                            <input class="pop-field-input mt-0" type="text" placeholder="Amelia Deo" name="" id="">
                                            <i class="fa-solid fa-user-nurse field-icon"></i>
                                        </div>
                                    </div>
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Gender</label>
                                        <div class="position-relative">
                                            <select class="form-select pop-field-input" aria-label="Default select example">
                                                <option selected>Female</option>
                                                <option value="1">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Mobile</label>
                                        <div class="position-relative">
                                            <input class="pop-field-input mt-0" type="number" placeholder="1234567890" name="" id="">
                                            <i class="fa-solid fa-phone field-icon"></i>
                                        </div>
                                    </div>
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Email</label>
                                        <div class="position-relative">
                                            <input class="pop-field-input mt-0" type="email" placeholder="test@email.com" name="" id="">
                                            <i class="fa-solid fa-envelope field-icon"></i>
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
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Room Type</label>
                                        <div class="position-relative">
                                            <select class="form-select pop-field-input" aria-label="Default select example">
                                                <option selected>Single</option>
                                                <option value="1">Double</option>
                                                <option value="2">Apartment</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Payments</label>
                                        <div class="position-relative">
                                            <select class="form-select pop-field-input" aria-label="Default select example">
                                                <option selected>Paid</option>
                                                <option value="1">Unpaid</option>
                                                <option value="2">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-btm">
                                    <button class="theme-btn save" type="button">Save</button>
                                    <button class="theme-btn cancel" onclick="bookingPopupCan()" type="button">Cancel</button>
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

<script src="./assets/js/vehicle-booking.js"></script>


