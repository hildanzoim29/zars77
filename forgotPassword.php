<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemulihan Akun</title>
    <!-- Custom styles-path -->
    <link rel="stylesheet" href="css/sty12.css">

    <!-- Font Awesome kit script -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Google Fonts Open Sans-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/html-5.png">
</head>

<body>
    <img class="wave" src="img/wave.svg">
    <div class="container">
        <div class="img">
            <img src="img/personalization.svg">
        </div>
        <div class="login-container">
            <form action="index.php">
                <h2>Mengambil Akun</h2>
                <p>Masukan email anda pada kolom di bawah</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>E-mail</h5>
                        <input class="input" type="email">
                    </div>
                </div>
                <input type="submit" class="btn" value="Mengirim">
                <div class="account">
                    <p>Apakah Anda ingat kata sandi Anda ?</p>
                    <a href="login.php">Memasuki</a>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>