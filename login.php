<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <!-- Custom styles-path -->
    <link rel="stylesheet" href="css/sty12.css">

    <!-- Font Awesome kit script -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Google Fonts Open Sans-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/html-5.png">
</head>

<body style="background-image: url(css/plogin.jfif); background-size: cover;">
    <img class="wave" src="img/wave.svg">
    <div class="container">
        <?php
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
            $cek = mysqli_num_rows($data);
            if ($cek > 0) {
                $_SESSION['user'] = mysqli_fetch_array($data);
                echo ' <script> alert("Selamat Datang, Login Berhasil"); location.href="index.php";</script> ';
            } else {
                echo ' <script> alert("Username/Password yang anda masukan salah ! ")</script> ';
            }
        }

        ?>
        <div class="img">
            <img src="img/authentication.svg">
        </div>
        <div class="login-container">
            <form method="post">
                <h2>Masuk</h2>
                <p>Selamat Datang Kembali !</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" id="inputusername" type="text"  name="username">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-key"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" id="inputpassword" type="password" name="password" autocomplete="off" >
                    </div>
                </div>
                <button class="btn btn-outline-success" type="submit" name="login" value="login">LOGIN</button>
                <a class="forgot" href="forgotPassword.php">Lupa kata sandi Anda ?</a>
                <div class="others">
                    <hr>
                    <p>OU</p>
                    <hr>
                </div>
                <div class="account">
                    <p>Belum punya akun ?</p>
                    <a href="register.php">Daftar</a>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>