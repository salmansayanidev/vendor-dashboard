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
                    <h1 class="section-main-title theme-color mb-0">My Bookings</h1>
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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

<script>
    $(function () {

        $("#my_booking").DataTable({
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
                data: "Gender",
            },
            {
                data: "Mobile",
            },
            {
                data: "Emails",
            },
            {
                data: "Arrive",
            },
            {
                data: "Depart",
            },
            {
                data: "Room Type",
            },
            {
                data: "Payment",
            },
            {
                data: "Actions",
            },
        ],
        });
    });
</script>