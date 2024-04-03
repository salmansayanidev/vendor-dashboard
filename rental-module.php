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
                    <h1 class="section-main-title theme-color mb-0">Rental Module</h1>
                </div>
                <div class="col-12">
                    <div class="booking-charge-tabel-area position-relative">
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
                            <table class="datatables-ajax table-responsive table-stripe table theme-tabel" id="rental_module">
                                <thead>
                                    <tr>
                                        <th><span class="box"></span></th>
                                        <th>Room No</th>
                                        <th>Type</th>
                                        <th>AC/Non-AC</th>
                                        <th>Meal</th>
                                        <th>Bad Capicity</th>
                                        <th>Mobile</th>
                                        <th>Rent</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>103</td>
                                        <td>Single</td>
                                        <td>AC</td>
                                        <td>Free Lunch</td>
                                        <td>1</td>
                                        <td>(123)456789</td>
                                        <td>30$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>101</td>
                                        <td>Double</td>
                                        <td>Non-AC</td>
                                        <td>Free Dinner</td>
                                        <td>3</td>
                                        <td>(123)456789</td>
                                        <td>25$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>123</td>
                                        <td>Apartment</td>
                                        <td>AC</td>
                                        <td>Free Juices</td>
                                        <td>2</td>
                                        <td>(123)456789</td>
                                        <td>45$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>103</td>
                                        <td>Single</td>
                                        <td>AC</td>
                                        <td>Free Lunch</td>
                                        <td>1</td>
                                        <td>(123)456789</td>
                                        <td>30$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>101</td>
                                        <td>Double</td>
                                        <td>Non-AC</td>
                                        <td>Free Dinner</td>
                                        <td>3</td>
                                        <td>(123)456789</td>
                                        <td>25$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>123</td>
                                        <td>Apartment</td>
                                        <td>AC</td>
                                        <td>Free Juices</td>
                                        <td>2</td>
                                        <td>(123)456789</td>
                                        <td>45$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>103</td>
                                        <td>Single</td>
                                        <td>AC</td>
                                        <td>Free Lunch</td>
                                        <td>1</td>
                                        <td>(123)456789</td>
                                        <td>30$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>101</td>
                                        <td>Double</td>
                                        <td>Non-AC</td>
                                        <td>Free Dinner</td>
                                        <td>3</td>
                                        <td>(123)456789</td>
                                        <td>25$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>123</td>
                                        <td>Apartment</td>
                                        <td>AC</td>
                                        <td>Free Juices</td>
                                        <td>2</td>
                                        <td>(123)456789</td>
                                        <td>45$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>123</td>
                                        <td>Apartment</td>
                                        <td>AC</td>
                                        <td>Free Juices</td>
                                        <td>2</td>
                                        <td>(123)456789</td>
                                        <td>45$</td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" onclick="bookingPopup()" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="rental-popup-wrap">
                            <div class="booking-popup-main">
                                <div class="popup-top">
                                    <div class="name-pro-area">
                                        <h4 class="name">Room Type</h4>
                                    </div>
                                    <div class="pop-cls-btn-area">
                                        <button type="button" onclick="bookingPopupClose()" class="pop-cls-btn"><i class="fa-solid fa-xmark"></i></button>
                                    </div>
                                </div>
                                <div class="popup-center">
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Room No</label>
                                        <div class="position-relative">
                                            <input class="pop-field-input mt-0" type="number" placeholder="103" name="" id="">
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
                                        <label class="pop-field-name">AC/Non-AC</label>
                                        <div class="position-relative">
                                            <select class="form-select pop-field-input" aria-label="Default select example">
                                                <option selected>AC</option>
                                                <option value="1">Non-AC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Meal</label>
                                        <div class="position-relative">
                                            <select class="form-select pop-field-input" aria-label="Default select example">
                                                <option selected>Free Launch</option>
                                                <option value="1">Free Dinner</option>
                                                <option value="1">Free Fruits</option>
                                                <option value="1">Free Snacks</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Capacity</label>
                                        <div class="position-relative">
                                            <input class="pop-field-input mt-0" type="number" placeholder="2" name="from" id="">
                                        </div>
                                    </div>
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Phone</label>
                                        <div class="position-relative">
                                            <input class="pop-field-input mt-0" type="number" placeholder="(123)45678" name="from" id="">
                                        </div>
                                    </div>
                                    <div class="popup-fields-area">
                                        <label class="pop-field-name">Rent</label>
                                        <div class="position-relative">
                                            <input class="pop-field-input mt-0" type="number" placeholder="30$" name="from" id="">
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

<script src="./assets/js/rental-modul.js"></script>