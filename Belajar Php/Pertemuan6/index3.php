<?php

// $_POST => method request yang mengirim data lewat form

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP METHOD POST</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">Masukkan Nama: </label>
        <input type="text" id="nama" name="nama"> <br>

        <input type="submit" name="kirim!" id="submit">
    </form>

    <?php if (isset($_POST["nama"])): ?>
    <h1>Guten Morgen, <?= $_POST["nama"] ?></h1>
    <?php endif ?>
    
</body>
</html>

    