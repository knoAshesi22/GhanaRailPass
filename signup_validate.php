<?php
include 'includes/config.php';

$conn=connectDB();

$fname=$_REQUEST["fullname"];
$uname=$_REQUEST["username"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$gender=$_REQUEST["gender"];
$dob=$_REQUEST["dob"];
$credit=$_REQUEST["credit"];


//exit();

$query = "INSERT INTO Users (username, fullname, password, email, gender, dob,creditno) VALUES ('$uname','$fname', MD5('$password'),'$email','$gender','$dob','$credit')";
if ($conn->query($query) === TRUE) {
    header("Location: login.php", true, 301);
    exit();
} else {
    echo "Error: " . $query . " " . $conn->error;
}

?>