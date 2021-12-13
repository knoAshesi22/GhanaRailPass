<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
include 'includes/header.php';
?>


<form id="signupform" class="form-su" name="form" method="post" action="login_validate.php" enctype="multipart/form-data" onsubmit="return(validate());"  >
    <fieldset>
        <legend>Login to access your profile!</legend>

        <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" required>
        </div>

        <div class="form-group">
            <input type="password" onchange="passcheck()" class="form-control" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$" title="Password must be at least 8 characters and contain 1 lowercase letter, 1 uppercase letter and 1 digit." name="password" id="pass" placeholder="Enter password" required>
        </div>


        <div class="form-group ">
            <button type="submit" class="btn btn-info btn-lg btn-block login-button">Sign in</button>
        </div>

    </fieldset>
</form>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
