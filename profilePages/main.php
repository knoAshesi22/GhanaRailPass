<h1 style="text-align: center">Welcome to Your Profile Page!</h1>
<br>

<?php

//echo $_SESSION['admin'];

?>

<?php
session_start();
include '../includes/config.php';

$conn=connectDB();
$uname=$_SESSION['username'];

$query = "SELECT * FROM Users WHERE username='$uname'";
$result = $conn->query($query);

while ($row_users = mysqli_fetch_array($result)){
    $fullname=$row_users['fullname'];
    $email=$row_users['email'];
    $dob=$row_users['dob'];
    $gender=$row_users['gender'];
    $credit=$row_users['creditno'];

}
?>

<div class="container py-5">
    <header class="text-center text-black">
        <h3 style="text-align: center;text-decoration: underline;">Your Details</h3>
        <!--                <h5 class="display-5">Details</h5>-->
    </header>
    <div class="row py-5">
        <div class="col-lg-10 mx-auto">
            <div class="card rounded shadow border-0">
                <div class="card-body p-5 bg-white rounded">
                    <div class="table-responsive">
                        <table id="example" style="width:100%" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>D.O.B.</th>
                                <th>Gender</th>
                                <th>Credit Card Number</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <?php
                                    echo $fullname;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $uname;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $email;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $dob;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $gender;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $credit;
//                                    ?>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
