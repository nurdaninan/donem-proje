<?php
include 'session-control.php';
if (!isset($_SESSION['kullanici_adi'])){
    
}
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8"/>
        <title>Sorular</title>
    </head>
    <body style="background-color:powderblue ;">
        <?php
            $q_id = $_GET['id'];
            include 'config.php';
            $sql= "SELECT * FROM questions WHERE id = $q_id";

            $result =mysqli_query($conn,$sql);
            echo $result;
            $num_rows = mysqli_num_rows($result);
            if($num_rows> 0){
                $row = mysqli_fetch_assoc($result);
                $q_name = $row['soru'];
                echo $row ;
                echo $q_name;
            }

            //answer tablosu

            $asql= "SELECT * FROM answer";
            $aresult= mysqli_query($conn,$asql);
            $anum_rows = mysqli_num_rows($aresult);
        ?>

        <a>Soru ve Cevap</a>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <?php
        if(isset($_SESSION['kullanici_adi'])){
            echo '<p>' . $_SESSION['kullanici_adi'] . '</p>';
            echo '<li ><a href="index.php">Anasayfa</a></li>';
            echo '<li ><a href="sorular.php">Sorular</a></li>';
            echo '<li ><a href="#">'. $_SESSION['kullanici_adi'] .'</a></li>';
            echo '<li ><a href=logout.php">Çıkış Yap</a></li>';

        }
        
        ?>
    </ul>

    <!--soru alanı-->
    <h2><?php echo $row ["baslik"];?></h2>
    <p><?php echo "<b>Tarih:</b>".$row["date"];?></p>

    <p ><?php echo "<b>Soran: </b>".$row['kullanici_adi']; ?></p>                   
    <p ><?php echo $q_name; ?></p>

    <br>

    <button type="button">Beğen</button>
    <button type="button">Beğenme</button>

    <br>

    <form action="a-control.php" method="POST">
        <label><b>Cevabınızı Buraya Yazın:</b></label>
        <textarea rows="3"></textarea><br>
        <button type="submit">Gönder</button>
    </form>

    <br>
    <h2>Cevaplar</h2>
    <?php
        if($anum_rows > 0){
            while($arow =mysqli_fetch_assoc($aresult)){
        
    ?>
    <p><?php echo "<b>Cevaplayan:</b>". $arrow['kullanici_adi']; ?></p>
    <p><?php echo "<b>Tarih:</b>". $arrow['date'];?></p>
    <p><?php echo $arow ['cevap']; ?></p>

    <button type="button">Beğen</button>

    <button type="button">Beğenme</button>

    <br>
<?php }}
?>




    </body>
</html>