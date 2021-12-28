<!DOCTYPE html>
<html lang="en">
<?php
    include "session-control.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cevap Ekle</title>
</head>
<body>
    <form action="a-insert.php" method="post">
        <table>
            <tr>
                <td>Cevap:</td>
                <td><input type="text" name="aname"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Cevabı Ekle"></td>
            </tr>
        </table>
    </form>
</body>
</html>