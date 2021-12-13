<?php

function connect(){

    $host = "localhost";
    $username = "root";
    $pass = "root";
    $dbname = "railpassv2";


    $conn = new mysqli($host,$username,$pass,$dbname);

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
    else{
//        echo 'success too';
        return $conn;
    }
//    if($conn === false){
//        die("ERROR: Could not connect. " . mysqli_connect_error());
//    }
//    else{
//        echo 'hello';
//        return $conn;
//    }


}
//connect();

?>