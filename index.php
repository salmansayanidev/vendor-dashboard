<?php
include "sidebar.php";
?>
<?php
include "header.php";
?>


<main>
    <section class="welcome-section before">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-main-title">Hi, John Welcome Back!</h1>
                </div>

                <div class="col-12">
                    <nav class="breadcrumb-area" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item position-relative" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-12">
                    <div class="dash-result-area">

                        <div class="dash-result-inner">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="dash-result-icon-area bg-287DFA">
                                    <i class="bi bi-cart3"></i>
                                </div>
                                <div class="dash-result-text-area">
                                    <p class="dash-result-text">Total Booking</p>
                                    <span class="dash-result-count">44</span>
                                </div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100" style="height: 6px">
                                <div class="progress-bar bg-287DFA" style="width: 44%"></div>
                            </div>
                        </div>

                        <div class="dash-result-inner">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="dash-result-icon-area bg-28D5A7">
                                    <i class="fa-solid fa-hotel"></i>
                                </div>
                                <div class="dash-result-text-area">
                                    <p class="dash-result-text">Rooms Available</p>
                                    <span class="dash-result-count">15</span>
                                </div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="height: 6px">
                                <div class="progress-bar bg-28D5A7" style="width: 15%"></div>
                            </div>
                        </div>

                        <div class="dash-result-inner">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="dash-result-icon-area bg-F9B851">
                                    <i class="bi bi-airplane"></i>
                                </div>
                                <div class="dash-result-text-area">
                                    <p class="dash-result-text">New Customers</p>
                                    <span class="dash-result-count">32</span>
                                </div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="height: 6px">
                                <div class="progress-bar bg-F9B851" style="width: 32%"></div>
                            </div>
                        </div>

                        <div class="dash-result-inner">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="dash-result-icon-area bg-CC08E9">
                                    <i class="bi bi-car-front"></i>
                                </div>
                                <div class="dash-result-text-area">
                                    <p class="dash-result-text">Car Rental</p>
                                    <span class="dash-result-count">27</span>
                                </div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="height: 6px">
                                <div class="progress-bar bg-CC08E9" style="width: 27%"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="chart-area-main">
                    <div class="area-chart">
                        <div class="chart-area">
                            <div class="section-sb-title-area">
                                <div class="">
                                    <h2 class="section-sb-title">Total Sales</h2>
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
                            <div id="chart"></div>
                        </div>
                    </div>

                    <div class="pie-chart">
                        <div class="chart-area">
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
                            <div id="chartdiv"></div>
                            <div class="pie-chart-result">
                                <div class="pie-chart-result-inner">
                                    <div class="chart-result-left">
                                        <span class="circle"></span>
                                        <span class="booking-result-name">Apartments</span>
                                    </div>
                                    <div class="">
                                        <span class="booking-result-num">734</span>
                                    </div>
                                </div>
                                <div class="pie-chart-result-inner">
                                    <div class="chart-result-left">
                                        <span class="circle"></span>
                                        <span class="booking-result-name">Double</span>
                                    </div>
                                    <div class="">
                                        <span class="booking-result-num">256</span>
                                    </div>
                                </div>
                                <div class="pie-chart-result-inner">
                                    <div class="chart-result-left">
                                        <span class="circle"></span>
                                        <span class="booking-result-name">Single</span>
                                    </div>
                                    <div class="">
                                        <span class="booking-result-num">125</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <table class="datatables-ajax table-responsive table-stripe table theme-tabel" id="room-booking-charge">
                                <thead>
                                    <tr>
                                        <th><span class="box"></span></th>
                                        <th>Images</th>
                                        <th>Name</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Status</th>
                                        <th>Phone</th>
                                        <th>Room Type</th>
                                        <th>Documents</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>
                                            <img class="tabel-img img-fluid" src="./assets/images/tabel-img-1.png" alt="">
                                        </td>
                                        <td>
                                            Amelia Deo
                                        </td>
                                        <td>15-03-2024</td>
                                        <td>12-04-2024</td>
                                        <td>
                                            <span class="paid-status">
                                                Paid
                                            </span>
                                        </td>
                                        <td>(123)456789</td>
                                        <td>Single</td>
                                        <td>
                                            <button type="button" class="document-btn">
                                                <img class="img-fluid" src="./assets/images/document-btn-img.png" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td><img class="tabel-img img-fluid" src="./assets/images/tabel-img-2.png" alt=""></td>
                                        <td>Jens Brinkers</td>
                                        <td>18-03-2024</td>
                                        <td>14-04-2024</td>
                                        <td>
                                            <span class="unpaid-status">
                                                Unpaid
                                            </span>
                                        </td>
                                        <td>(123)456789</td>
                                        <td>Double</td>
                                        <td>
                                            <button type="button" class="document-btn">
                                                <img class="img-fluid" src="./assets/images/document-btn-img.png" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>
                                            <img class="tabel-img img-fluid" src="./assets/images/tabel-img-3.png" alt="">
                                        </td>
                                        <td>Mark Hey</td>
                                        <td>20-03-2024</td>
                                        <td>18-04-2024</td>
                                        <td>
                                            <span class="paid-status">
                                                Paid
                                            </span>
                                        </td>
                                        <td>(123)456789</td>
                                        <td>Apartment</td>
                                        <td>
                                            <button type="button" class="document-btn">
                                                <img class="img-fluid" src="./assets/images/document-btn-img.png" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>
                                            <img class="tabel-img img-fluid" src="./assets/images/tabel-img-4.png" alt="">
                                        </td>
                                        <td>Antoney Daviy</td>
                                        <td>22-03-2024</td>
                                        <td>20-04-2024</td>
                                        <td>
                                            <span class="unpaid-status">
                                                Unpaid
                                            </span>
                                        </td>
                                        <td>(123)45678</td>
                                        <td>Single</td>
                                        <td>
                                            <button type="button" class="document-btn">
                                                <img class="img-fluid" src="./assets/images/document-btn-img.png" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>
                                            <img class="tabel-img img-fluid" src="./assets/images/tabel-img-5.png" alt="">
                                        </td>
                                        <td>Alien Glichirks</td>
                                        <td>06-04-2024</td>
                                        <td>04-05-2024</td>
                                        <td>
                                            <span class="pending-status">
                                                Pending
                                            </span>
                                        </td>
                                        <td>(123)456789</td>
                                        <td>Single</td>
                                        <td>
                                            <button type="button" class="document-btn">
                                                <img class="img-fluid" src="./assets/images/document-btn-img.png" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>
                                            <img class="tabel-img img-fluid" src="./assets/images/tabel-img-6.png" alt="">
                                        </td>
                                        <td>Sue Wooderk</td>
                                        <td>11-04-2024</td>
                                        <td>10-05-2024</td>
                                        <td> 
                                            <span class="paid-status">
                                                Paid
                                            </span>
                                        </td>
                                        <td>(123)456789</td>
                                        <td>Double</td>
                                        <td>
                                            <button type="button" class="document-btn">
                                                <img class="img-fluid" src="./assets/images/document-btn-img.png" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="box"></span></td>
                                        <td>
                                            <img class="tabel-img img-fluid" src="./assets/images/tabel-img-7.png" alt="">
                                        </td>
                                        <td>Sue Wooderk</td>
                                        <td>11-04-2024</td>
                                        <td>10-05-2024</td>
                                        <td> 
                                            <span class="paid-status">
                                                Paid
                                            </span>
                                        </td>
                                        <td>(123)456789</td>
                                        <td>Double</td>
                                        <td>
                                            <button type="button" class="document-btn">
                                                <img class="img-fluid" src="./assets/images/document-btn-img.png" alt="">
                                            </button>
                                        </td>
                                        <td>
                                            <div class="action-btn-area">
                                                <button type="button" class="action-btn delete-btn">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button type="button" class="action-btn edit-btn">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
<script src="./assets/js/index.js"></script>




<script>
    $(function () {

        $("#room-booking-charge").DataTable({
        processing: true,
        language: {
            paginate: {
            previous: '<i class="fa-solid fa-angle-left"></i>',
            next: '<i class="fa-solid fa-angle-right"></i>',
            },
        },
        columns: [
            {
                data: "",
            },
            {
                data: "Image",
            },
            {
                data: "Name",
            },
            {
                data: "Check In",
            },
            {
                data: "Check Out",
            },
            {
                data: "Status",
            },
            {
                data: "Phone",
            },
            {
                data: "Room Type",
            },
            {
                data: "Documents",
            },
            {
                data: "Actions",
            },
        ],
        });
    });
</script>