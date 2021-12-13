<?php
session_start();
include 'config.php';

$conn=connectDB();

if(isset($_POST['submit'])){
    $user_id=$_SESSION['userid'];
    $trip_id=$_POST['tripid'];

    $q1="INSERT INTO Orders (user_id, trip_id) VALUES ('$user_id','$trip_id')";

    if ($conn->query($q1) === TRUE){
        echo 'Success.';
    }else {
        echo "Error: " . $q1 . " " . $conn->error;
    }

}


?>