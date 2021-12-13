<?php
include 'config.php';
$conn=connectDB();

$origin=$_REQUEST["origin"];
$dest=$_REQUEST["destination"];
$start=$_REQUEST["start"];
$end=$_REQUEST["end"];
$price=$_REQUEST["price"];
$train=$_REQUEST["train"];


$query = "INSERT INTO Trips (origin, destination, startTime, endTime, price, train) VALUES ('$origin','$dest','$start','$end','$price','$train')";
if ($conn->query($query) === TRUE) {
//    echo 'success';
    header("Location: ../profile.php", true, 301);
    exit();
} else {
    echo "Error: " . $query . " " . $conn->error;
}

?>