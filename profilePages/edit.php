<?php
session_start()

?>

<div class="container py-5">
    <header class="text-center text-black">
        <h3 style="text-align: center;text-decoration: underline;">Your Details</h3>
        <!--                <h5 class="display-5">Details</h5>-->
    </header>

    <form id="signupform" class="form-su" name="form" method="post" action="signup_validate.php" enctype="multipart/form-data" onsubmit="return(validate());"  >
        <fieldset>
            <legend>Sign up to join the community!</legend>

            <div class="form-group">
                <input type="text" class="form-control" name="username" id="uname" placeholder="Enter your Username" required>
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="fullname" id="fname" placeholder="Enter your full name here" required>
            </div>


            <div class="form-group">
                <input type="text" class="form-control" pattern="\w+([\._-]\w+)*@\w+([\._-]\w+)*$" title="Enter a valid email address. E.g., bob.smith@gmail.com " name="email" id="email" placeholder="Enter your email address" required>
            </div>



            <div class="form-group">
                <input type="password" onchange="passcheck()" class="form-control" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$" title="Password must be at least 8 characters and contain 1 lowercase letter, 1 uppercase letter and 1 digit." name="password" id="pass" placeholder="Enter password" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="confirm" placeholder="Confirm password" required onchange="passcheck()">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="credit" id="credit" placeholder="Enter your credit card number here" required>
            </div>

            <div class="form-group">
                <label>Gender: </label>

                <select name="gender" id="gender">
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Date of Birth: </label>
                <input type="date" name="dob" id="dob" required>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-info btn-lg btn-block login-button">Register</button>
            </div>

        </fieldset>
    </form>

</div>
