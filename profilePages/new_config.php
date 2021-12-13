<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'railpassv3');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function connectDB(){
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    else{
//        echo 'success';
        return $conn;
    }
}

?>