<?php include('./components/header.php') ?>
<?php include('./components/navBar.php') ?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                <span class="login100-form-title-1">
                    Add User
                </span>
            </div>

            <form method="post" class="login100-form validate-form">
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Name</span>
                    <input class="input100" type="text" name="username" placeholder="Enter name">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Enter email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Enter Password">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Confirm Password">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100" type="password" name="cpassword" placeholder="Confirm Password">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input m-b-26" data-validate="Room No">
                    <span class="label-input100">ٌRoom No</span>
                    <input class="input100" type="text" name="room" placeholder="Room No">
                    <span class="focus-input100"></span>
                </div>
                
                
                <div class="wrap-input100 validate-input m-b-26" data-validate="Ext">
                    <span class="label-input100">ٌExt</span>
                    <input class="input100" type="text" name="ext" placeholder="Ext">
                    <span class="focus-input100"></span>
                </div>
                
            


                    <div class="wrap-input100 validate-input m-b-26" data-validate="Profile Picture">
                    <span class="label-input100">Profile Picture</span>
                    <input  class="input100" type="file" name="browse" id="fileToUpload">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Save
                    </button>

                    <button class="login100-form-btn">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

  <?php include('./components/footer.php') ?>
