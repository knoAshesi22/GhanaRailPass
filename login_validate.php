<?php
session_start()
?>


<?php
include 'includes/config.php';

$conn=connectDB();

$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$password2=md5($password);



if($stmt = $conn->prepare('SELECT userid, fullname, admin FROM Users WHERE username = ? and password = ?')){
    $stmt->bind_param('ss', $username, $password2);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0) {
//        $stmt->bind_result($fname,$mname,$lname);
//        while ($stmt->fetch()) {
//            $fullname=$fname." ".$mname." ".$lname;
//        }

        $stmt->bind_result( $id, $fname, $admin);
        while ($stmt->fetch()) {
            $fullname=$fname;
            $_SESSION['admin']=$admin;

        }

        $query="SELECT * FROM Users WHERE username='$username'";
        $result = $conn->query($query);
        $count=0;
        while ($row_users = mysqli_fetch_array($result)){
            $count=$count+1;

        }

//        echo 'correct details';
        $_SESSION['userid']=$id;
        $_SESSION['username']=$username;
        $_SESSION['fullname']=$fullname;

//        echo $_SESSION['fullname'];
//        echo $_SESSION['username'];

        header('location:profile.php');
    }
    else{
        $error='Incorrect username and/or password!';
        $_SESSION['message'] = $error;
        echo 'incorrect details';
//        header('location: signup.php');
    }

}




?>