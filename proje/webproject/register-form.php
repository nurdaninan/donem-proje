<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
</head>
<body>
        <center>
    <form action="register.php" method="POST">
        <register>
        
        <label>Kullanıcı adı:</label>
        <input name="username" type="text" placeholder="Kullanıcı adı">
        <br>
        <label>Bir şifre oluşturun:</label>
        <input name="sifre" type="password" placeholder="Şifre">
        <br>
        <label>Adınız ve Soyadınız:</label>
        <input name="fullname" type="text" placeholder="Adınız ve Soyadınız">
        <br>
        <label>Adres bilgileriniz:</label>
        <input name="address" type="text" placeholder="Adres">
        <br>
        <label>E-mail:</label>
        <input name="email" type="text" placeholder="E-mail">
        <br>
        <button type="submit">Kayıt Ol</button>
        </center>
        <br><hr><br>

        <p>Zaten bir hesabınız var mı?<a href="login.php">Giriş Yapın</a></p>


    </form>
    
</body>
</html>