<?php
if (!isset($_SESSION['fullname']))
{
    header("Location: login.php");
    die();
}

?>