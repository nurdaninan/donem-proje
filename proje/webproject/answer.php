<?php
include 'config.php';

$sql = "SELECT * FROM answer";
$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);
?>
    