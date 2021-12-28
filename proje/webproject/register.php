<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['email'];



$sql = "INSERT INTO user(username, password, fullname, address, email);
        VALUES ('$username', '$password','$fullname', '$address','$email')";


mysqli_query($conn, $sql);
//header("Location:index.php");


mysqli_close($conn);
?>