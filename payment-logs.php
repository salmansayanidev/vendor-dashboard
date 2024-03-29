<?php
    include "sidebar.php";
?>
<?php
    include "header.php";
?>



<main>
    <section class="welcome-section">
        <div class="row">
            <div class="col-12">
                <h1 class="section-main-title theme-color mb-0">Payment Logs</h1>
            </div>
            <div class="col-12">
                    <div class="booking-charge-tabel-area">
                        <div class="section-sb-title-area">
                            <div class="">
                                <h2 class="section-sb-title">Show Entries</h2>
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
                            <table class="datatables-ajax table-responsive table-stripe table" id="payment_logs">
                                <thead>
                                    <tr>
                                        <th>Trip I’d</th>
                                        <th>User Name</th>
                                        <th>Payment Method</th>
                                        <th>Total Amount</th>
                                        <th>My Commission</th>
                                        <th>Driver’s Share</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AB-101</td>
                                        <td>Amelia Deo</td>
                                        <td>Card</td>
                                        <td>$125</td>
                                        <td>$25</td>
                                        <td>$15</td>
                                        <td><span class="paid-status">Paid</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AB-102</td>
                                        <td>Jens Brinkers</td>
                                        <td>Card</td>
                                        <td>$135</td>
                                        <td>$35</td>
                                        <td>$15</td>
                                        <td><span class="unpaid-status">Unpaid</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AB-103</td>
                                        <td>Mark Hey</td>
                                        <td>Cash</td>
                                        <td>$130</td>
                                        <td>$30</td>
                                        <td>$10</td>
                                        <td><span class="pending-status">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AB-101</td>
                                        <td>Amelia Deo</td>
                                        <td>Card</td>
                                        <td>$125</td>
                                        <td>$25</td>
                                        <td>$15</td>
                                        <td><span class="paid-status">Paid</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AB-102</td>
                                        <td>Jens Brinkers</td>
                                        <td>Card</td>
                                        <td>$135</td>
                                        <td>$35</td>
                                        <td>$15</td>
                                        <td><span class="unpaid-status">Unpaid</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AB-103</td>
                                        <td>Mark Hey</td>
                                        <td>Cash</td>
                                        <td>$130</td>
                                        <td>$30</td>
                                        <td>$10</td>
                                        <td><span class="pending-status">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AB-101</td>
                                        <td>Amelia Deo</td>
                                        <td>Card</td>
                                        <td>$125</td>
                                        <td>$25</td>
                                        <td>$15</td>
                                        <td><span class="paid-status">Paid</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AB-102</td>
                                        <td>Jens Brinkers</td>
                                        <td>Card</td>
                                        <td>$135</td>
                                        <td>$35</td>
                                        <td>$15</td>
                                        <td><span class="unpaid-status">Unpaid</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AB-103</td>
                                        <td>Mark Hey</td>
                                        <td>Cash</td>
                                        <td>$130</td>
                                        <td>$30</td>
                                        <td>$10</td>
                                        <td><span class="pending-status">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle contact-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                                    <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                                </ul>
                                            </div>      
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

        $("#payment_logs").DataTable({
        processing: true,
        language: {
            paginate: {
            previous: '<i class="fa-solid fa-angle-left"></i>',
            next: '<i class="fa-solid fa-angle-right"></i>',
            },
        },
        columns: [
            {
                data: "Trip I’d",
            },
            {
                data: "User Name",
            },
            {
                data: "Payment Method",
            },
            {
                data: "Total Amount",
            },
            {
                data: "My Commission",
            },
            {
                data: "Driver’s Share",
            },
            {
                data: "Status",
            },
            {
                data: "Actions",
            },
        ],
        });
    });
</script>