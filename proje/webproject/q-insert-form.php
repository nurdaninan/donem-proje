<!DOCTYPE html>
<html lang="en">
<?php
    include "session-control.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
</head>
<body style="background-color: #D7CCC8;">
    <center>
    <form action="q-insert.php" method="post">
        <table>
            <tr>
                <td>Soru:</td>
                <td><input type="text" name="qname"></td>
            </tr>
            <tr>
                <td></td>
                <td><input style="background-color:	A400" type="submit" value="Ekle"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>