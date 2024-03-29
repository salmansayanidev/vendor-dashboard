<?php
    include "sidebar.php";
?>
<?php
    include "header.php";
?>


<main>
    <section class="welcome-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-main-title theme-color mb-0">My Profile</h1>
                </div>
                <div class="col-12">
                    <div class="profile-main-area">
                        <div class="section-sb-title-area mb-0">
                            <div class="">
                                <h2 class="section-sb-title">Profile</h2>
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
                        <form action="">
                            <div class="profile-inner-area"> 
                                <div class="profile-inner-left">
                                    <div class="profile-text-area">
                                        <div class="label-area">
                                            <label class="pro-detail-title">
                                                First Name
                                            </label>
                                        </div>
                                        <div class="input-area"> 
                                            <input type="text" placeholder="John" readonly name="" id="">
                                        </div>
                                    </div>

                                    <div class="profile-text-area">
                                        <div class="label-area">
                                            <label class="pro-detail-title">
                                                Last Name
                                            </label>
                                        </div>
                                        <div class="input-area"> 
                                            <input type="text" placeholder="Michael" readonly name="" id="">
                                        </div>
                                    </div>

                                    <div class="profile-text-area">
                                        <div class="label-area">
                                            <label class="pro-detail-title">
                                                Email Address
                                            </label>
                                        </div>
                                        <div class="input-area"> 
                                            <input type="email" placeholder="johnmichael99@gmail.com" readonly name="" id="">
                                        </div>
                                    </div>

                                    <div class="profile-text-area">
                                        <div class="label-area">
                                            <label class="pro-detail-title">
                                                Phone Number
                                            </label>
                                        </div>
                                        <div class="input-area"> 
                                            <input type="number" placeholder="+01 2345 67890" readonly name="" id="">
                                        </div>
                                    </div>

                                    <div class="profile-text-area">
                                        <div class="label-area">
                                            <label class="pro-detail-title">
                                                Date of Birth
                                            </label>
                                        </div>
                                        <div class="input-area"> 
                                            <input type="text" placeholder="03 Jun 1990" readonly name="" id="">
                                        </div>
                                    </div>

                                    <div class="profile-text-area">
                                        <div class="label-area">
                                            <label class="pro-detail-title">
                                                Address
                                            </label>
                                        </div>
                                        <div class="input-area"> 
                                            <input type="text" placeholder="8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A." readonly name="" id="">
                                        </div>
                                    </div>

                                    <div class="theme-btn-area">
                                        <div class="">
                                            <button type="button" class="theme-btn">Edit Profile</button>
                                        </div>
                                        <div class="save-cancel-area">
                                            <button type="button" class="theme-btn">Cancel</button>
                                            <button type="button" class="theme-btn">Save</button>    
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-inner-right">
                                    <div class="profile-pass-area">
                                        <div class="profile-picture-area text-center">
                                            <div class="upload-por-area text-center">
                                                <img id="img-preview" class="pro-picture" src="./assets/images/dash-profile-picture.png" alt="">
                                                <h3 class="pro-title">Change profile picture</h3>
                                                <input class="d-none" type="file" name="" id="change-pro" accept="image/*" onchange="readURL(this)">
                                                <label class="upload-pro-btn" for="change-pro">Upload a file</label>
                                            </div>
                                            <div class="change-password-area mt-5">
                                                <h3 class="pro-title mt-0">Password Reset</h3>
                                                <input class="password-input" placeholder="New Password*" type="password" name="" id="">
                                                <input class="password-input mb-0" placeholder="Confirm Password*" type="password" name="" id="">
                                            </div>
                                            <div class="mt-5">
                                                <button type="button" class="theme-btn">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    let noimage = "./assets/images/blank-pro-img.png";

    function readURL(input) {
        console.log(input.files);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $("#img-preview").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            $("#img-preview").attr("src", noimage);
        }
    }
</script>
