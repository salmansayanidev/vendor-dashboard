<div class="dash-right-side">
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-main">
                        <div class="header-search-area">
                            <div class="menu-btn-area">
                                <button class="menu-btn" type="button">
                                    <i class="fa-solid fa-bars"></i>
                                </button>
                                <button class="res-search-btn" type="button">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                            <div class="search-input-area">
                                <button class="search-pop-cls" type="button">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                                <input class="search-area mt-0" placeholder="Search" type="text" name="" id="">
                            </div>
                        </div>
                        <div class="header-right-side">
                            <div class="header-notify-area position-relative">
                                <span class="notification position-relative">
                                    <i class="fa-solid fa-bell"></i>
                                    <span class="notify-count">
                                        4
                                    </span>
                                </span>
                                <div class="notification-dropdownarea">
                                    <h1 class="notify-title">Notifications</h1>
                                    <div class="notification-list-area">
                                        <div class="notification-list"> 
                                            <div class="notification-img-area">
                                                <img class="notification-img" src="./assets/images/tabel-img-1.png" alt="">
                                            </div>
                                            <div class="notifi-name-area">
                                                <div class="notifi-name-inner">
                                                    <h3 class="notify-name">Amelia Deo</h3>
                                                    <span class="notify-date">10 mins</span>
                                                </div>
                                                <div class="">
                                                    <p class="notify-discrip">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-list"> 
                                            <div class="notification-img-area">
                                                <img class="notification-img" src="./assets/images/tabel-img-1.png" alt="">
                                            </div>
                                            <div class="notifi-name-area">
                                                <div class="notifi-name-inner">
                                                    <h3 class="notify-name">Amelia Deo</h3>
                                                    <span class="notify-date">10 mins</span>
                                                </div>
                                                <div class="">
                                                    <p class="notify-discrip">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-list"> 
                                            <div class="notification-img-area">
                                                <img class="notification-img" src="./assets/images/tabel-img-1.png" alt="">
                                            </div>
                                            <div class="notifi-name-area">
                                                <div class="notifi-name-inner">
                                                    <h3 class="notify-name">Amelia Deo</h3>
                                                    <span class="notify-date">10 mins</span>
                                                </div>
                                                <div class="">
                                                    <p class="notify-discrip">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-list"> 
                                            <div class="notification-img-area">
                                                <img class="notification-img" src="./assets/images/tabel-img-1.png" alt="">
                                            </div>
                                            <div class="notifi-name-area">
                                                <div class="notifi-name-inner">
                                                    <h3 class="notify-name">Amelia Deo</h3>
                                                    <span class="notify-date">10 mins</span>
                                                </div>
                                                <div class="">
                                                    <p class="notify-discrip">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle header-profile-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="header-por-img" src="./assets/images/header-pro-img.png" alt="">
                                        Amelia Deo
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Action</a></li>
                                        <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Another action</a></li>
                                        <li><a class="dropdown-item user-pro-drop" href="javascipt:void()">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <script>


        const notificationBtn = document.querySelector('.notification')
        const notificationArea = document.querySelector('.notification-dropdownarea')

        notificationBtn.addEventListener('click' , () => {
            notificationArea.classList.toggle('active')
        })

    </script>