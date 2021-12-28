<?php
    include "session-control.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorular</title>
</head>
<body style="background-color: powderblue;">
<center>
<?php
include 'config.php';

$sql = "SELECT * FROM question";
$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);
?>

    <p align="right">
        <a href="logout.php">Çıkış Yap</a>
    </p>
    <p>
        <a href="q-insert-form.php"><strong> Soru Ekle</strong></a>
    </p>    <hr>
    <table style="background-color:	palegreen" border="1">
        <tr>
            <th>ID</th>
            <th>Soru</th>
            <th>Eklenme Tarihi</th>
            <th>İşlemler</th>
            <th>Ekleyen</th>
        </tr>
        <?php    
            $user_id = $_SESSION['user_id'];
            if($num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $q_id = $row['id'];
                    $sql2 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=1";
                    $result2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $like = $row2['count'];
                    
                    $sql3 = "SELECT COUNT(*) as count FROM dlikes WHERE q_id = $q_id AND type=1";
                    $result3 = mysqli_query($conn,$sql3);
                    $row3 = mysqli_fetch_assoc($result3);
                    $dlike= $row3['count'];
                    echo '<tr>';
                        echo "<td>$q_id</td>"; // 1. sütun
                        echo "<td>";    // 2. sütun
                            echo $row['q_name'];
                            echo" <br> ____________ <br>";
                            $sql3 = "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
                            $result3 = mysqli_query($conn,$sql3);
                            $num_rows3 = mysqli_num_rows($result3);
                            if($num_rows3 > 0){
                                echo "Beğen($like)";
                            }else{                                
                                echo "<a href='q-like.php?q_id=$q_id&user_id=$user_id'>Beğen</a>($like)";
                            }
                            echo " - ";
                            $sql4 = "SELECT * FROM dlikes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
                            $result4= mysqli_query($conn,$sql4);
                            $num_rows4 = mysqli_num_rows($result4);
                            if($num_rows4 > 0){
                                echo "Beğenme($dlike)";
                            }else{                                
                                echo "<a href='q-dlike.php?q_id=$q_id&user_id=$user_id'>Beğenme</a>($dlike)";
                            }


                        
                        echo "</td>";
                        echo "<td>".$row['q_date']."</td>"; // 3. sütun
                        echo '<td>'; // 4. sütun
                            echo '<a href="a-insert-form.php?id=' . $row['id'] . ' ">Cevapla</a>- ';
                            echo '<a href="q-update-form.php?id=' . $row['id'] . '">Düzenle</a> - ';
                            echo '<a href="q-delete-form.php?id=' . $row['id'] . '">Sil</a>-';
                            echo '<a href="q-wiev.php?id=' . $row['id'] . '"> Soruyu Görüntüle </a>';
                        
                        echo '</td>';
                        echo '<td>'.$row ['q_username']."</td>";

                    echo '</tr>';
                }
            }
            ?>
    </table>
</center>
</body>
</html>