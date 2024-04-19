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
                    <h1 class="section-main-title theme-color mb-0">Add Bookings</h1>
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
                        <div class="col-12">
                            <div id="" class=" mt-2">
                                <div class="progress mb-4" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!-- <div class="step-container d-flex justify-content-between">
                                    <div class="step-circle" onclick="displayStep(1)">1</div>
                                    <div class="step-circle" onclick="displayStep(2)">2</div>
                                </div> -->
                                <form id="multi-step-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-1 animate__fadeInRight">
                                                <!-- Step 1 form fields here -->
                                                <div class="add-hotel-area">
                                                    <h2 class="step-form-title">What type of place do you have?</h2>
                                                    <div class="place-radio-main">

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="home">
                                                            <label class="place-label" for="home">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-1.svg" alt="">
                                                                <span class="place-name">House</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Apartment">
                                                            <label class="place-label" for="Apartment">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-2.svg" alt="">
                                                                <span class="place-name">Apartment</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Barn">
                                                            <label class="place-label" for="Barn">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-3.svg" alt="">
                                                                <span class="place-name">Barn</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Bed-breakfast">
                                                            <label class="place-label" for="Bed-breakfast">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-4.svg" alt="">
                                                                <span class="place-name">Bed & breakfast</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Boat">
                                                            <label class="place-label" for="Boat">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-5.svg" alt="">
                                                                <span class="place-name">Boat</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Cabin">
                                                            <label class="place-label" for="Cabin">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-6.svg" alt="">
                                                                <span class="place-name">Cabin</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Camper-RV">
                                                            <label class="place-label" for="Camper-RV">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-7.svg" alt="">
                                                                <span class="place-name">Camper/RV</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Casa-particular">
                                                            <label class="place-label" for="Casa-particular">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-8.svg" alt="">
                                                                <span class="place-name">Casa particular</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Castle">
                                                            <label class="place-label" for="Castle">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-9.svg" alt="">
                                                                <span class="place-name">Castle</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Cave">
                                                            <label class="place-label" for="Cave">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-10.svg" alt="">
                                                                <span class="place-name">Cave</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Container">
                                                            <label class="place-label" for="Container">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-11.svg" alt="">
                                                                <span class="place-name">Container</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Cycladic-home">
                                                            <label class="place-label" for="Cycladic-home">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-12.svg" alt="">
                                                                <span class="place-name">Cycladic home</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Dammuso">
                                                            <label class="place-label" for="Dammuso">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-13.svg" alt="">
                                                                <span class="place-name">Dammuso</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Dome">
                                                            <label class="place-label" for="Dome">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-14.svg" alt="">
                                                                <span class="place-name">Dome</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Earth-home">
                                                            <label class="place-label" for="Earth-home">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-15.svg" alt="">
                                                                <span class="place-name">Earth home</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Farm">
                                                            <label class="place-label" for="Farm">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-16.svg" alt="">
                                                                <span class="place-name">Farm</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Guesthouse">
                                                            <label class="place-label" for="Guesthouse">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-17.svg" alt="">
                                                                <span class="place-name">Guesthouse</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Hotel">
                                                            <label class="place-label" for="Hotel">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-18.svg" alt="">
                                                                <span class="place-name">Hotel</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Houseboat">
                                                            <label class="place-label" for="Houseboat">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-19.svg" alt="">
                                                                <span class="place-name">Houseboat</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Kezhan">
                                                            <label class="place-label" for="Kezhan">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-20.svg" alt="">
                                                                <span class="place-name">Kezhan</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Minsu">
                                                            <label class="place-label" for="Minsu">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-21.svg" alt="">
                                                                <span class="place-name">Minsu</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Riad">
                                                            <label class="place-label" for="Riad">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-22.svg" alt="">
                                                                <span class="place-name">Riad</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Ryokan">
                                                            <label class="place-label" for="Ryokan">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-23.svg" alt="">
                                                                <span class="place-name">Ryokan</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Shepherd-hut">
                                                            <label class="place-label" for="Shepherd-hut">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-24.svg" alt="">
                                                                <span class="place-name">Shepherd’s hut</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Tent">
                                                            <label class="place-label" for="Tent">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-25.svg" alt="">
                                                                <span class="place-name">Tent</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Tiny-home">
                                                            <label class="place-label" for="Tiny-home">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-26.svg" alt="">
                                                                <span class="place-name">Tiny home</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Tower">
                                                            <label class="place-label" for="Tower">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-27.svg" alt="">
                                                                <span class="place-name">Tower</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Treehouse">
                                                            <label class="place-label" for="Treehouse">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-28.svg" alt="">
                                                                <span class="place-name">Treehouse</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Trullo">
                                                            <label class="place-label" for="Trullo">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-29.svg" alt="">
                                                                <span class="place-name">Trullo</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Windmill">
                                                            <label class="place-label" for="Windmill">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-30.svg" alt="">
                                                                <span class="place-name">Windmill</span>
                                                            </label>
                                                        </div>

                                                        <div class="place-radio-area">
                                                            <input class="place-input" type="radio" name="place" id="Yurt">
                                                            <label class="place-label" for="Yurt">
                                                                <img class="img-fluid place-img" src="./assets/images/place-img-31.svg" alt="">
                                                                <span class="place-name">Yurt</span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary next-step">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-2">
                                                <!-- Step 2 form fields here -->
                                                <div class="add-hotel-area">
                                                    <h2 class="step-form-title">Basic Info</h2>
                                                    <div class="form-field-area">
                                                        <input class="form-input" type="text" placeholder="Room /Place Name" name="" id="">
                                                    </div>
                                                    <div class="form-field-area">
                                                        <textarea class="form-input" name="" id="" placeholder="Description" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary prev-step">Previous</button>
                                                    <button type="button" class="theme-btn btn btn-primary next-step">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-3">
                                                <!-- Step 3 form fields here -->
                                                <h2 class="step-form-title">What will the guests have?</h2>
                                                <div class="guest-have-main">

                                                    <div class="guest-have-area">
                                                        <input class="guest-have-input" type="radio" name="guest-have" id="entire-place">
                                                        <label class="guest-have-label" for="entire-place">
                                                            <div class="guest-have-inner">
                                                                <h3 class="guest-have-title">An entire place</h3>
                                                                <p class="guest-have-para">Guests have the whole place to themselves.</p>
                                                            </div>
                                                            <div class="guest-have-inner">
                                                                <img class="guest-have-img img-fluid" src="./assets/images/guest-have-img-1.svg" alt="">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="guest-have-area">
                                                        <input class="guest-have-input" type="radio" name="guest-have" id="a-room">
                                                        <label class="guest-have-label" for="a-room">
                                                            <div class="guest-have-inner">
                                                                <h3 class="guest-have-title">A room</h3>
                                                                <p class="guest-have-para">Guests have their own room in a home, plus access to shared spaces.</p>
                                                            </div>
                                                            <div class="guest-have-inner">
                                                                <img class="guest-have-img img-fluid" src="./assets/images/guest-have-img-2.svg" alt="">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="guest-have-area">
                                                        <input class="guest-have-input" type="radio" name="guest-have" id="shared-room">
                                                        <label class="guest-have-label" for="shared-room">
                                                            <div class="guest-have-inner">
                                                                <h3 class="guest-have-title">A shared room</h3>
                                                                <p class="guest-have-para">Guests sleep in a room or common area that may be shared with you or others.</p>
                                                            </div>
                                                            <div class="guest-have-inner">
                                                                <img class="guest-have-img img-fluid" src="./assets/images/guest-have-img-3.svg" alt="">
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary prev-step">Previous</button>
                                                    <button type="button" class="theme-btn btn btn-primary next-step">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-4">
                                                <!-- Step 4 form fields here -->
                                                <h2 class="step-form-title">Where's your place located?</h2>
                                                <div class="location-main">
                                                    <div class="map-area position-relative">
                                                        <iframe class="form-map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193596.0106908701!2d-74.14482897134818!3d40.69737043484594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1712266320720!5m2!1sen!2s" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        <div class="location-input-area">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                            <input class="location-input" placeholder="Where's your place located?" type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                    <h2 class="form-sb-title">Address</h2>

                                                    <div class="location-fields-area">
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="Street Address" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="Country" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="State" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="city" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="zipcode" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary prev-step">Previous</button>
                                                    <button type="button" class="theme-btn btn btn-primary next-step">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-5">
                                                <!-- Step 5 form fields here -->
                                                <h2 class="step-form-title">How many people can stay here?</h2>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-lg-10">
                                                        <div class="people-count-main">

                                                            <div class="people-count-area">
                                                                <div>
                                                                    <h4 class="people-count-title">Guests</h4>
                                                                </div>
                                                                <div class="counter-area">
                                                                    <button type="button" class="decrement count-btn">
                                                                        <i class="fa-solid fa-minus"></i>
                                                                    </button>
                                                                    <input class="count count-input" placeholder="0" value="0" name="" />
                                                                    <button type="button" class="increment count-btn">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="people-count-area">
                                                                <div>
                                                                    <h4 class="people-count-title">Bedrooms</h4>
                                                                </div>
                                                                <div class="counter-area">
                                                                    <button type="button" class="decrement count-btn">
                                                                        <i class="fa-solid fa-minus"></i>
                                                                    </button>
                                                                    <input class="count count-input" placeholder="0" value="0" name="" />
                                                                    <button type="button" class="increment count-btn">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="people-count-area">
                                                                <div>
                                                                    <h4 class="people-count-title">Beds</h4>
                                                                </div>
                                                                <div class="counter-area">
                                                                    <button type="button" class="decrement count-btn">
                                                                        <i class="fa-solid fa-minus"></i>
                                                                    </button>
                                                                    <input class="count count-input" placeholder="0" value="0" name="" />
                                                                    <button type="button" class="increment count-btn">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="people-count-area">
                                                                <div>
                                                                    <h4 class="people-count-title">Bathrooms</h4>
                                                                </div>
                                                                <div class="counter-area">
                                                                    <button type="button" class="decrement count-btn">
                                                                        <i class="fa-solid fa-minus"></i>
                                                                    </button>
                                                                    <input class="count count-input" placeholder="0" value="0" name="" />
                                                                    <button type="button" class="increment count-btn">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary prev-step">Previous</button>
                                                    <button type="button" class="theme-btn btn btn-primary next-step">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-6">
                                                <!-- Step 6 form fields here -->
                                                <h2 class="step-form-title">SPACIFICATION</h2>
                                                <div class="specicification-area">
                                                    <h2 class="form-sb-title text-start">Features</h2>

                                                    <div class="features-main">

                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="fearture" id="wifi">
                                                            <label class="features-label" for="wifi">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-1.svg" alt="">
                                                                <span class="place-name">Wifi</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="fearture" id="TV">
                                                            <label class="features-label" for="TV">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-2.svg" alt="">
                                                                <span class="place-name">TV</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="fearture" id="Kitchen">
                                                            <label class="features-label" for="Kitchen">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-3.svg" alt="">
                                                                <span class="place-name">Kitchen</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="fearture" id="Washer">
                                                            <label class="features-label" for="Washer">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-4.svg" alt="">
                                                                <span class="place-name">Washer</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="fearture" id="Free-parking">
                                                            <label class="features-label" for="Free-parking">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-5.svg" alt="">
                                                                <span class="place-name">Free parking on premises</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="fearture" id="air-conditioner">
                                                            <label class="features-label" for="air-conditioner">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-6.svg" alt="">
                                                                <span class="place-name">Air Conditioner</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="fearture" id="Paid-parking">
                                                            <label class="features-label" for="Paid-parking">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-7.svg" alt="">
                                                                <span class="place-name">Paid parking on premises</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="fearture" id="Dedicated-Workspace">
                                                            <label class="features-label" for="Dedicated-Workspace">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-8.svg" alt="">
                                                                <span class="place-name">Dedicated Workspace</span>
                                                            </label>
                                                        </div>

                                                    </div>

                                                    <h2 class="form-sb-title text-start">Special Features</h2>

                                                    <div class="features-main">

                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Pool">
                                                            <label class="features-label" for="Pool">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-9.svg" alt="">
                                                                <span class="place-name">Pool</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Hot-Tub">
                                                            <label class="features-label" for="Hot-Tub">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-10.svg" alt="">
                                                                <span class="place-name">Hot Tub</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Fire-Pit">
                                                            <label class="features-label" for="Fire-Pit">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-11.svg" alt="">
                                                                <span class="place-name">Fire Pit</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Gym">
                                                            <label class="features-label" for="Gym">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-12.svg" alt="">
                                                                <span class="place-name">Gym</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Patio">
                                                            <label class="features-label" for="Patio">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-13.svg" alt="">
                                                                <span class="place-name">Patio</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="BBQ-grill">
                                                            <label class="features-label" for="BBQ-grill">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-14.svg" alt="">
                                                                <span class="place-name">BBQ grill</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Outdoor-dining-area">
                                                            <label class="features-label" for="Outdoor-dining-area">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-15.svg" alt="">
                                                                <span class="place-name">Outdoor dining area</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Pool-table">
                                                            <label class="features-label" for="Pool-table">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-16.svg" alt="">
                                                                <span class="place-name">Pool table</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Indoor-fireplace">
                                                            <label class="features-label" for="Indoor-fireplace">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-17.svg" alt="">
                                                                <span class="place-name">Indoor fireplace</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Lake-access">
                                                            <label class="features-label" for="Lake-access">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-18.svg" alt="">
                                                                <span class="place-name">Lake access</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Beach-access">
                                                            <label class="features-label" for="Beach-access">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-19.svg" alt="">
                                                                <span class="place-name">Beach access</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Ski-in_Ski-out">
                                                            <label class="features-label" for="Ski-in_Ski-out">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-20.svg" alt="">
                                                                <span class="place-name">Ski in/Ski out</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="special-fearture" id="Outdoor-shower">
                                                            <label class="features-label" for="Outdoor-shower">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-21.svg" alt="">
                                                                <span class="place-name">Outdoor shower</span>
                                                            </label>
                                                        </div>

                                                    </div>

                                                    <h2 class="form-sb-title text-start">Do you have any of these safety items?</h2>

                                                    <div class="features-main">

                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="safety-items" id="Smook-alarm">
                                                            <label class="features-label" for="Smook-alarm">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-22.svg" alt="">
                                                                <span class="place-name">Smook alarm</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="safety-items" id="First-aid-kit">
                                                            <label class="features-label" for="First-aid-kit">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-23.svg" alt="">
                                                                <span class="place-name">First aid kit</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="safety-items" id="Fire-extinguisher">
                                                            <label class="features-label" for="Fire-extinguisher">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-24.svg" alt="">
                                                                <span class="place-name">Fire extinguisher</span>
                                                            </label>
                                                        </div>
                                                        <div class="features-check-area">
                                                            <input class="features-input" type="checkbox" name="safety-items" id="Carbon-monoxide-alarm">
                                                            <label class="features-label" for="Carbon-monoxide-alarm">
                                                                <img class="img-fluid place-img" src="./assets/images/feature-img-25.svg" alt="">
                                                                <span class="place-name">Carbon monoxide alarm</span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary prev-step">Previous</button>
                                                    <button type="button" class="theme-btn btn btn-primary next-step">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-7">
                                                <!-- Step 7 form fields here -->
                                                <h2 class="step-form-title">PRICE</h2>

                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-7">
                                                        <div class="pricing-area">
                                                            <div class="price-area">
                                                                <div class="position-relative">
                                                                    <input class="price-input" type="number" name="" value="" id="guess-price" placeholder="$1000">
                                                                </div>
                                                            </div>
                                                            <div class="guest-price-tax-area">
                                                                <button class="guest-price-tax guess-price-tax" type="button">Guest price before taxes
                                                                    <i class="fa-solid fa-angle-down"></i>
                                                                </button>
                                                            </div>
                                                            <div class="pricing-area-inner">
                                                                <div class="show-price-area">
                                                                    <div class="show-price-inner">
                                                                        <span>Base Price</span>
                                                                        <span class="guess-price">$500</span>
                                                                    </div>
                                                                    <div class="show-price-inner">
                                                                        <span>Guest Sevice Fee</span>
                                                                        <span class="guess-service-price">$100</span>
                                                                    </div>
                                                                    <div class="show-price-inner">
                                                                        <span>Guest Price After Taxes</span>
                                                                        <span class="guest-price-after-tax">$100</span>
                                                                    </div>
                                                                </div>
                                                                <div class="show-price-area">
                                                                    <div class="show-price-inner">
                                                                        <span>Plat Form Charge 20 %</span>
                                                                        <span class="platform-service-charge">$100</span>
                                                                    </div>
                                                                </div>
                                                                <div class="show-price-area">
                                                                    <div class="show-price-inner">
                                                                        <span>You Earn 80 %</span>
                                                                        <span class="user-earn">$100</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cop-similis-area">
                                                            <button type="button" class="cop-similis">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                                Compare similar listings
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary prev-step">Previous</button>
                                                    <button type="button" class="theme-btn btn btn-primary next-step">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-8">
                                                <!-- Step 8 form fields here -->
                                                <h2 class="step-form-title">Add Discounts</h2>

                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-9 col-lg-8">

                                                        <div class="add-discount">
                                                            <input class="add-discount-input" type="checkbox" name="discount" id="For-24-Hours">
                                                            <label class="add-discount-label" for="For-24-Hours">
                                                                <div class="para-input dscount">
                                                                    <div class="percnt-no-area">
                                                                        <span class="percnt-no">10 %</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <h2 class="discount-title">For 24 Hours</h2>
                                                                        <p class="discount-para">Guest have the whole place to themselves for 24 Hours </p>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <i class="fa-solid fa-percent"></i>
                                                                </div>
                                                            </label>
                                                        </div>

                                                        <div class="add-discount">
                                                            <input class="add-discount-input" type="checkbox" name="discount" id="For-7-Days">
                                                            <label class="add-discount-label" for="For-7-Days">
                                                                <div class="para-input dscount">
                                                                    <div class="percnt-no-area">
                                                                        <span class="percnt-no">15 %</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <h2 class="discount-title">For 7 Days</h2>
                                                                        <p class="discount-para">Guest have the whole place to themselves for 7 days </p>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <i class="fa-solid fa-percent"></i>
                                                                </div>
                                                            </label>
                                                        </div>

                                                        <div class="add-discount">
                                                            <input class="add-discount-input" type="checkbox" name="discount" id="For-30-Days">
                                                            <label class="add-discount-label" for="For-30-Days">
                                                                <div class="para-input dscount">
                                                                    <div class="percnt-no-area">
                                                                        <span class="percnt-no">20 %</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <h2 class="discount-title">For 30 Days</h2>
                                                                        <p class="discount-para">Guest have the whole place to themselves for 30 days</p>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <i class="fa-solid fa-percent"></i>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary prev-step">Previous</button>
                                                    <button type="button" class="theme-btn btn btn-primary next-step">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step step-9">
                                                <!-- Step 9 form fields here -->
                                                <h2 class="step-form-title">Upload Images</h2>

                                                <div data-image-uploader data-image-uploader-file-type-regex="(\.jpg|\.jpeg|\.png)$" data-image-uploader-max-file-size="8" class="form__field form__load-img">
                                                    <div class="load__img-wrap">
                                                        <div class="load__img-content" data-image-uploader-drop-area>
                                                            <div class="content__wrapper" data-image-uploader-content>
                                                                <button type="button" class="blue--btn theme-btn">Upload File</button>
                                                                <span class="drag-para">/</span>
                                                                <svg viewBox="0 0 17 17" width="25" height="25" fill="#2b3282">
                                                                    <path d="M14.917 7.611H11.25v5.333h-5.5V7.611H2.083L8.5.5l6.417 7.111Zm-13.75 7.111h14.666V16.5H1.167v-1.778Z" fill="#2b3282" />
                                                                </svg>
                                                                <p class="drag-para">Drag your files here</p>
                                                                <div class="upload__TipIcon">
                                                                    <span>
                                                                        <svg viewBox="0 0 17 17" width="25" height="25" fill="#2b3282" xmlns="http://www.w3.org/2000/svg">
                                                                            <g clip-path="url(#a)">
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 1.955a6.545 6.545 0 1 0 0 13.09 6.545 6.545 0 0 0 0-13.09ZM.5 8.5a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm8-3.636c.402 0 .727.325.727.727V8.5a.727.727 0 0 1-1.454 0V5.59c0-.4.325-.726.727-.726Zm0 5.818a.727.727 0 0 0 0 1.454h.007a.727.727 0 0 0 0-1.454H8.5Z" fill="#2b3282" />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="a">
                                                                                    <path fill="#fff" transform="translate(.5 .5)" d="M0 0h16v16H0z" />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                    </span>
                                                                    <!-- <div class="upload__Tooltip">
                                                                        <ul>
                                                                            <li>- Images must be in JPG, JPEG and PNG format.</li>
                                                                            <li>- File size must be 10 MB or less.</li>
                                                                            <li>- Maximum 3 images.</li>
                                                                            <li>- Image must be at least 100 pixels tall.</li>
                                                                            <li>- Image must be at least 100 pixels wide.</li>
                                                                        </ul>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                            <input type="file" enctype="multipart/form-data" accept=".png, .jpg, .jpeg" multiple style="display: none;">
                                                        </div>
                                                    </div>
                                                    <!-- <ul class="validation-summary-errors error__msg margin--top-16 hidden" id="errorMessage" data-image-uploader-errors>
                                                        <li>* Images must be in JPG, JPEG and PNG format.</li>
                                                        <li>* File size must be 10 MB or less.</li>
                                                        <li>* Maximum 3 images.</li>
                                                        <li>* Image must be at least 100 pixels tall.</li>
                                                        <li>* Image must be at least 100 pixels wide.</li>
                                                    </ul> -->
                                                    <div class="upload__thumbnails hidden" data-thumbnails-container>
                                                        <div>
                                                            <div>
                                                                <!-- <span>Uploaded files</span> -->
                                                                <div class="imgs__wrapper">
                                                                    <div class="item__imgs" data-image-preview-container>
                                                                        <template data-image-preview>
                                                                            <div class="item__wrapper" data-image-preview-element>
                                                                                <div class="remove__img">
                                                                                    <button class="remove__icon" data-removal-button>
                                                                                        <svg viewBox="0 0 12 12" width="10" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M12 1.2 10.8 0 6 4.8 1.2 0 0 1.2 4.8 6 0 10.8 1.2 12 6 7.2l4.8 4.8 1.2-1.2L7.2 6 12 1.2Z" fill="#4B4B4B" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="review__img">
                                                                                    <picture>
                                                                                        <img class="multiple-preview-images" />
                                                                                    </picture>
                                                                                </div>
                                                                            </div>
                                                                        </template>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-btn-area">
                                                    <button type="button" class="theme-btn btn btn-primary prev-step">Previous</button>
                                                    <button type="button" class="theme-btn btn btn-primary release-pop-btn">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="release-liability-popup">
                                        <h2 class="step-form-title">Release of Liability Agreement</h2>
                                        <div class="popup-top">
                                            <p class="release-para">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                        </div>
                                        <h3 class="form-sb-title text-start">Release of Liability</h3>
                                        <div class="popup-bottom">
                                            <div class="form-field-area">
                                                <input class="form-input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date" name="" id="">
                                            </div>
                                            <div class="form-field-area">
                                                <input class="form-input" type="text" placeholder="Name of Renter" name="" id="">
                                            </div>
                                            <div class="form-field-area">
                                                <input class="form-input" type="text" placeholder="Address of Renter" name="" id="">
                                            </div>
                                            <div class="form-field-area">
                                                <input class="form-input" type="text" placeholder="vendor signature" name="" id="e_signature">
                                            </div>
                                            <p class="release-para" id="sign"></p>
                                        </div>
                                        <div class="form-btn-area">
                                            <button type="submit" class="theme-btn thnk-pop-btn btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                    <div class="thankyou-popup-wrap">
                                        <div class="thankyou-popup-inner">
                                            <span class="right-icon-area">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            <h1 class="thankyou-title">Thank You</h1>
                                            <a class="view-listing-link" href="vehicles.php">View Listing</a>
                                        </div>
                                    </div>
                                </form>
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


<script src="./assets/js/add-hotel.js"></script>
