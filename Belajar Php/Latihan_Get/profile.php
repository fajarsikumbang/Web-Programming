<?php

// cek apakah ada data di $_GET

if (
    !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["alamat"]) ||
    !isset($_GET["prodi"])
) {
    // redirect ke halaman index.php
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
</head>
<body>
    <h1>Profile Mahasiswa</h1>
    <ul>
        <li>Nim : <?= $_GET["nim"] ?></li>
        <li>Nama : <?= $_GET["nama"] ?></li>
        <li>Alamat : <?= $_GET["alamat"] ?></li>
        <li>Prodi : <?= $_GET["prodi"] ?></li> 
    </ul>
    
</body>
</html>