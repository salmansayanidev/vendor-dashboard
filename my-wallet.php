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
                    <h1 class="section-main-title theme-color mb-0">My Wallet</h1>
                </div>
                <div class="col-12">
                    <div class="booking-charge-tabel-area">
                        <div class="section-sb-title-area">
                            <div class="">
                                <h2 class="section-sb-title">Wallet</h2>
                            </div>
                            <div class="">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle sec-inner-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="wallet-pay-show-area">
                            <span class="blance-here">Your available balance:</span>
                            <h2 class="show-blance">$123.00</h2>
                        </div>
                        <div class="table-parent">
                            <table class="datatables-ajax table-responsive table-stripe table" id="my_wallet">
                                <thead>
                                    <tr>
                                        <th>Sr.#</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Check-In</th>
                                        <th>Check-Out</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>London to New York</td>
                                        <td>New York</td>
                                        <td>15-03-2024</td>
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
                                        <td>2</td>
                                        <td>Rome to Australia</td>
                                        <td>Australia</td>
                                        <td>18-03-2024</td>
                                        <td>18-04-2024</td>
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
                                        <td>3</td>
                                        <td>USA to New Jersey</td>
                                        <td>Cash</td>
                                        <td>New Jersey</td>
                                        <td>20-03-2024</td>
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
                                        <td>1</td>
                                        <td>London to New York</td>
                                        <td>New York</td>
                                        <td>15-03-2024</td>
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
                                        <td>2</td>
                                        <td>Rome to Australia</td>
                                        <td>Australia</td>
                                        <td>18-03-2024</td>
                                        <td>18-04-2024</td>
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
                                        <td>3</td>
                                        <td>USA to New Jersey</td>
                                        <td>Cash</td>
                                        <td>New Jersey</td>
                                        <td>20-03-2024</td>
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
                                        <td>1</td>
                                        <td>London to New York</td>
                                        <td>New York</td>
                                        <td>15-03-2024</td>
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
                                        <td>2</td>
                                        <td>Rome to Australia</td>
                                        <td>Australia</td>
                                        <td>18-03-2024</td>
                                        <td>18-04-2024</td>
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
                                        <td>3</td>
                                        <td>USA to New Jersey</td>
                                        <td>Cash</td>
                                        <td>New Jersey</td>
                                        <td>20-03-2024</td>
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
        </div>
    </section>
</main>









<?php
    include "footer.php";
?>


<script>
    $(function () {

        $("#my_wallet").DataTable({
        processing: true,
        language: {
            paginate: {
            previous: '<i class="fa-solid fa-angle-left"></i>',
            next: '<i class="fa-solid fa-angle-right"></i>',
            },
        },
        columns: [
            {
                data: "Sr.#",
            },
            {
                data: "Title",
            },
            {
                data: "Location",
            },
            {
                data: "Check-In",
            },
            {
                data: "Check-Out",
            },
            {
                data: "Price",
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


