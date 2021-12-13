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

$id=$_SESSION['userid'];
//exit();

$query = "INSERT INTO Users (username, fullname, password, email, gender, dob,creditno) VALUES ('$uname','$fname', MD5('$password'),'$email','$gender','$dob','$credit')";
$query = "UPDATE 
          SET username='$uname', fullname='$fname', password='$password', email='$email', gender='$gender', dob='$dob',creditno='$credit'
          WHERE userid='$id'";
if ($conn->query($query) === TRUE) {
    header("Location: profile.php", true, 301);
    exit();
} else {
    echo "Error: " . $query . " " . $conn->error;
}

?>