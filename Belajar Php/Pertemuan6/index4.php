<?php

if (isset($_POST["nama"])) {
    // redirect
    header("Location: index3.php");
    exit();
}

?>
 <!-- #region -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP METHOD POST</title>
</head>
<body>
    <h1>Selamat Pagi, <?= $_POST["nama"] ?></h1>
</body>
</html>