<?php
include 'config.php';
$conn=connectDB();

$sname=$_REQUEST["sname"];
//echo $tname;
//echo $numseats;

//exit();

$query = "INSERT INTO Stations (name) VALUES ('$sname')";
if ($conn->query($query) === TRUE) {
//    echo 'success';
    header("Location: ../profile.php", true, 301);
    exit();
} else {
    echo "Error: " . $query . " " . $conn->error;
}

?>