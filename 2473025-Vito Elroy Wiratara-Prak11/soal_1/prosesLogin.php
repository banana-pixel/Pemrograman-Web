<!DOCTYPE html>
<html>
    <head>
        <title>2473025 - Vito Elroy Wiratara</title>
    </head>
    <body>
        <?php
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == "admin" && $password == "admin"){
                echo "<h2>Login berhasil!</h2>";
                echo "<h2>Selamat datang, <span style='color:blue; font-size:35px;'>admin</span>.</h2>";
            } else {
                echo "<h2 style='color:black;'>Username : $username <span style='color:red;'>Tidak Terdaftar!</span></h2>";
            }
        ?>
        
        <br>
        
        <a href="login.php">
            <span style="color: purple;">kembali ke halaman login</span>
        </a>
    </body>
</html>
