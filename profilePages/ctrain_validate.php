<?php
include 'config.php';
$conn=connectDB();

$tname=$_REQUEST["tname"];
$numseats=$_REQUEST["numseats"];
echo $tname;
echo $numseats;

//exit();

$query = "INSERT INTO Trains (name, availableSeats) VALUES ('$tname','$numseats')";
if ($conn->query($query) === TRUE) {
//    echo 'success';
    header("Location: ../profile.php", true, 301);
    exit();
} else {
    echo "Error: " . $query . " " . $conn->error;
}

?>