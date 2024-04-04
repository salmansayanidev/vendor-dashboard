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
                                                    <h2 class="step-form-title">Basic Info</h2>
                                                    <div class="form-field-area">
                                                        <input class="form-input" type="text" placeholder="Room Rent" name="" id="">
                                                    </div>
                                                    <div class="form-field-area">
                                                        <input class="form-input" type="text" placeholder="Per Day Rent" name="" id="">
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
                                                <!-- Step 9 form fields here -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <h3 class="form-title">Account Security</h3>
                                                        <p class="form-para center pad-r">These questions help us keep your account secure.</p>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="">
                                                                    <p class="yes-no-label mb-3">Select a primary security question</p>
                                                                </div>
                                                                <div class="form-question-area mb-4">
                                                                    <div class="mb-3 form-question-input-area">
                                                                        <input class="yes-no-input" type="radio" name="pri-security-ques" id="pri-security-ques-1">
                                                                        <label class="yes-no-label" for="pri-security-ques-1">What was the name of your elementary school?</label>
                                                                    </div>
                                                                    <div class="mb-3 form-question-input-area">
                                                                        <input class="yes-no-input" type="radio" name="pri-security-ques" id="pri-security-ques-2">
                                                                        <label class="yes-no-label" for="pri-security-ques-2">What was the name of your favorite childhood friend?</label>
                                                                    </div>
                                                                    <div class="mb-3 form-question-input-area">
                                                                        <input class="yes-no-input" type="radio" name="pri-security-ques" id="pri-security-ques-3">
                                                                        <label class="yes-no-label" for="pri-security-ques-3">What was the name of your childhood pet?</label>
                                                                    </div>
                                                                    <span class="required-span"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="yes-no-label mb-3">
                                                                    Primary security answer
                                                                </label>
                                                                <div class="forms-fields-area mb-5">
                                                                    <div class="did-floating-label-content did-error-input step-form-field-area">
                                                                        <i class="fa-solid fa-envelope"></i>
                                                                        <input class="form-input did-floating-input" type="text" placeholder="Primary security answer">
                                                                        <label class="did-floating-label">Primary security answer</label>
                                                                    </div>
                                                                    <span class="required-span"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="">
                                                                    <p class="yes-no-label mb-3">Select a backup security question</p>
                                                                </div>
                                                                <div class="form-question-area mb-4">
                                                                    <div class="mb-3 form-question-input-area">
                                                                        <input class="yes-no-input" type="radio" name="back-security-ques" id="back-security-ques-1">
                                                                        <label class="yes-no-label" for="back-security-ques-1">What street did you live on in third grade?</label>
                                                                    </div>
                                                                    <div class="mb-3 form-question-input-area">
                                                                        <input class="yes-no-input" type="radio" name="back-security-ques" id="back-security-ques-2">
                                                                        <label class="yes-no-label" for="back-security-ques-2">What is your oldest sibling's birth month?</label>
                                                                    </div>
                                                                    <div class="mb-3 form-question-input-area">
                                                                        <input class="yes-no-input" type="radio" name="back-security-ques" id="back-security-ques-3">
                                                                        <label class="yes-no-label" for="back-security-ques-3">In what city did your parents meet?</label>
                                                                    </div>
                                                                    <span class="required-span"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="yes-no-label mb-3">
                                                                    Backup security answer
                                                                </label>
                                                                <div class="forms-fields-area mb-4">
                                                                    <div class="did-floating-label-content did-error-input step-form-field-area">
                                                                        <i class="fa-solid fa-envelope"></i>
                                                                        <input class="form-input did-floating-input" type="text" placeholder="Backup security answer">
                                                                        <label class="did-floating-label">Backup security answer</label>
                                                                    </div>
                                                                    <span class="required-span"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-question-area mb-4">
                                                                    <div class="mb-4 form-question-input-area">
                                                                        <input class="yes-no-input" type="checkbox" name="agreed-terms" id="agreed-terms">
                                                                        <label class="form-para text-black" for="agreed-terms">By checking this box, you acknowledge and agree that you have read and agreed to the terms below.</label>
                                                                    </div>
                                                                    <span class="required-span"></span>
                                                                    <p class="form-para">Betterment's <a href="#">privacy policy</a> and <a href="#">customer agreements</a>, which include the Brokerage Agreement, Advisory Agreement, consent to electronic delivery of documents and written communications, and other important agreements. You also acknowledge that you have received a copy of our <a href="#">Form CRS relationship summary</a> and <a href="#">Form ADV brochure.</a> Your advisory agreement contains a predispute arbitration clause highlighted in paragraph 34 on page 38. Your brokerage agreement contains a predispute arbitration clause highlighted in paragraph 37 on page 81.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="field1" class="form-label">Field 1:</label>
                                                    <input type="text" class="form-control" id="" name="field1">
                                                </div> -->
                                                <div class="form-btn-area">
                                                    <!-- <button type="button" class="btn btn-primary prev-step">Previous</button> -->
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
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


