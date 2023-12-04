<?php

// error_reporting(0);
// session_start();
// if (isset($_POST["submit"])) {
//     $user = $_POST["username"];
//     $pass = $_POST["password"];

//     $expected_user = "fajar";
//     $expected_pass = "234";

//     if ($user == $expected_user && $pass == $expected_pass) {
//         session_start();
//         $_SESSION['berhasil'] = true;
//         header("location:dalem_login.php");
//         exit;
//     } else {
//         $salah = "<p style='color:red; text-align:center;'>Username dan password salah</p>";
//     }
// }   

// cek apakah tombol sign in sudah di tekan
if (isset($_POST["submit"])) {
// apakah user name sama password sudah benar
    if ($_POST["username"] == "fajar" &&
        $_POST["password"] == "234"
        ) {
            // jika benar maka pindah ke halaman dalem_login.php
            header("Location: dalem_login.php");
            exit();
        } else {
            // jika salah makan muncul pesan error
            $error = true;
        }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="formlogin">
            <div class="foto"><img src=""><h1>Login</h1></div>
            <?php if (isset($error)) : ?>
            <p class="msg-error">Username / Password Salah!</p>
            <?php endif; ?>
            <form action="" method="post">
                <input type="text" placeholder="username" name="username"><br>
                <input type="password" placeholder="password" name="password"><br>
                <button type="submit" name="submit">Sign In</button>
            </form>
<div class="lupa">
    <a href="#"><span>Lupa Password ? </span></a>
    <a href="#"><span>Register ?</span></a>

</div>
        </div>
    </div>
</body>
</html>