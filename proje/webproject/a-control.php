<?php
include 'session_control.php';
include "config.php";
?>

<?php
$aname = $_POST['answer'];
$username = $_SESSION['username'];

$sqlid = "SELECT id FROM user WHERE username = '". $username. "'";

$results = mysqli_query($conn, $sqlid);

$id = mysqli_fetch_array($results);

$sql = "INSERT INTO answer (`a_name`,`username`) VALUES ('$aname','$username');";

$result = mysqli_query($conn, $sql);
header("Location:questions.php");

?>