<?php
    include "session-control.php";
?>
<?php
include 'config.php';

$aname = $_POST['aname'];

$sql = "INSERT INTO answer (a_name) VALUES ('$aname')";

mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);
if($last_id > 0)
{
    echo "Cevap eklendi. " . $last_id;
    header("Location: answer.php");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>