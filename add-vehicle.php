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
                                                <h2 class="step-form-title">Basic Info</h2>
                                                <div class="vehicle-basic-info-area">
                                                    <div class="form-field-area">
                                                        <input class="form-input" type="text" placeholder="Enter your title of listing" name="" id="">
                                                    </div>
                                                    <div class="flex-area">
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="Car Make" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="Car Model" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="month" placeholder="year" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="license Number" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="Plate Number" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="text" placeholder="Enter your vechicle's mileage" name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="form-field-area">
                                                        <textarea class="form-input" name="" id="" placeholder="Enter Your vehicle Description" cols="30" rows="10"></textarea>
                                                    </div>
                                                    <div class="form-field-area">
                                                        <textarea class="form-input" name="" id="" placeholder="Importants Notes" cols="30" rows="10"></textarea>
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
                                                <!-- Step 1 form fields here -->
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
                                            <div class="step step-3">
                                                <!-- Step 1 form fields here -->
                                                <h2 class="step-form-title">Specifications</h2>

                                                <div class="vehicle-specification-area">
                                                    <div class="flex-area">
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="number" placeholder="Enter No of Doors" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="number" placeholder="Enter No of Seats" name="" id="">
                                                        </div>
                                                    </div>
                                                    <h2 class="veh-spec-title text-start">Vehicle Type</h2>

                                                    <div class="vehicle-type">
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Vehicle-Type" id="SUV">
                                                            <label class="vehicle-type-label" for="SUV">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-1.png" alt="">
                                                                <span class="place-name">SUV</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Vehicle-Type" id="Hatchback">
                                                            <label class="vehicle-type-label" for="Hatchback">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-2.png" alt="">
                                                                <span class="place-name">Hatchback</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Vehicle-Type" id="Sedan">
                                                            <label class="vehicle-type-label" for="Sedan">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-3.png" alt="">
                                                                <span class="place-name">Sedan</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Vehicle-Type" id="Coupe">
                                                            <label class="vehicle-type-label" for="Coupe">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-4.png" alt="">
                                                                <span class="place-name">Coupe</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Vehicle-Type" id="Convertible">
                                                            <label class="vehicle-type-label" for="Convertible">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-5.png" alt="">
                                                                <span class="place-name">Convertible</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Vehicle-Type" id="Pickup-Truck">
                                                            <label class="vehicle-type-label" for="Pickup-Truck">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-6.png" alt="">
                                                                <span class="place-name">Pickup Truck</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Vehicle-Type" id="Station-Vegan">
                                                            <label class="vehicle-type-label" for="Station-Vegan">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-7.png" alt="">
                                                                <span class="place-name">Station Vegan</span>
                                                            </label>
                                                        </div>
                                                        
                                                    </div>

                                                    <h2 class="veh-spec-title text-start">Powertrain</h2>
                                                    
                                                    <div class="vehicle-type">
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Powertrain" id="Diesel">
                                                            <label class="vehicle-type-label" for="Diesel">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-8.png" alt="">
                                                                <span class="place-name">Diesel</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Powertrain" id="Gas">
                                                            <label class="vehicle-type-label" for="Gas">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-9.png" alt="">
                                                                <span class="place-name">Gas</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Powertrain" id="Electric">
                                                            <label class="vehicle-type-label" for="Electric">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-10.png" alt="">
                                                                <span class="place-name">Electric</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Powertrain" id="Hybrid">
                                                            <label class="vehicle-type-label" for="Hybrid">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-11.png" alt="">
                                                                <span class="place-name">Hybrid</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <h2 class="veh-spec-title text-start">Transmission</h2>

                                                    <div class="vehicle-type">
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Transmission" id="Manual">
                                                            <label class="vehicle-type-label" for="Manual">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-12.png" alt="">
                                                                <span class="place-name">Manual</span>
                                                            </label>
                                                        </div>
                                                        <div class="vehicle-type-area">
                                                            <input class="vehicle-type-input" type="radio" name="Transmission" id="Automatic">
                                                            <label class="vehicle-type-label" for="Automatic">
                                                                <img class="img-fluid veh-type-img" src="./assets/images/vehicle-type-img-13.png" alt="">
                                                                <span class="place-name">Automatic</span>
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
                                            <div class="step step-4">
                                                <!-- Step 1 form fields here -->
                                                <h2 class="step-form-title">Features</h2>

                                                <div class="vehicle-features-main">

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="All-Wheel-Drive">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">All-Wheel Drive</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="All-Wheel-Drive">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="AUX-Input">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">AUX Input</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="AUX-Input">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="Backup-Camera">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">Backup Camera</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="Backup-Camera">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="Blind-Spot-Warning">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">Blind Spot Warning</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="Blind-Spot-Warning">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="Bluetooth">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">Bluetooth</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="Bluetooth">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="GPS">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">GPS</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="GPS">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="Heated-Seats">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">Heated Seats</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="Heated-Seats">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="Keyless-Entry">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">Keyless Entry</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="Keyless-Entry">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="Long-Term-Car">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">Long-Term Car</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="Long-Term-Car">
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="vehicle-feature-area">
                                                        <label class="vehicle-feature-label" for="USB-Input">
                                                            <div class="">
                                                                <img class="img-fluid" src="./assets/images/veh-feature-img.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <span class="place-name">USB Input</span>
                                                            </div>
                                                            <div class="">
                                                                <input class="vehicle-feature-input" type="checkbox" name="Vehicle-features" id="USB-Input">
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
                                            <div class="step step-5">
                                                <!-- Step 1 form fields here -->
                                                <h2 class="step-form-title">Pricing</h2>

                                                <h2 class="veh-spec-title text-start">Pricing Per Mile</h2>
                                                
                                                <div class="vehicle-pricing-area">
                                                    <div class="flex-area">
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="number" placeholder="Price per mile" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="number" placeholder="Miles Allowed per day" name="" id="">
                                                        </div>
                                                        <div class="form-field-area">
                                                            <input class="form-input" type="number" placeholder="Additional Miles Charge" name="" id="">
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
                                                <!-- Step 1 form fields here -->
                                                <h2 class="step-form-title">Add Discounts</h2>
                                                
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-9 col-lg-8">

                                                        <div class="add-discount">
                                                            <input class="add-discount-input" type="checkbox" name="vehicle-discount" id="For-24-Hours">
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
                                                            <input class="add-discount-input" type="checkbox" name="vehicle-discount" id="For-7-Days">
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
                                                            <input class="add-discount-input" type="checkbox" name="vehicle-discount" id="For-30-Days">
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
                                            <div class="step step-7">
                                                <!-- Step 1 form fields here -->
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
                                            <button type="submit" class="theme-btn btn btn-success">Submit</button>
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


<script src="./assets/js/add-vehicle.js"></script>
