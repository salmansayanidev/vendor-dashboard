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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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
                                                <button type="button" class="action-btn edit-btn">
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

        $("#rental_module").DataTable({
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
                data: "Room No",
            },
            {
                data: "Type",
            },
            {
                data: "AC/Non-AC",
            },
            {
                data: "Meal",
            },
            {
                data: "Bad Capicity",
            },
            {
                data: "Mobile",
            },
            {
                data: "Rent",
            },
            {
                data: "Actions",
            },
        ],
        });
    });
</script>