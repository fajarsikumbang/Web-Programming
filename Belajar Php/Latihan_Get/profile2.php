<?php

if (
    !isset($_GET["kode_barang"]) ||
    !isset($_GET["nama_produk"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["stock"])
) {
    header("Location: index2.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <style>
        .container {
            height: 90vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Details Barang</h1>
    <ul>
        <li>Kode Barang : <?= $_GET["kode_barang"] ?></li>
        <li>Nama Produk : <?= $_GET["nama_produk"] ?></li>
        <li>Harga : <?= $_GET["harga"] ?></li>
        <li>Stock : <?= $_GET["stock"] ?></li> 
    </ul>
    </div>
</body>
</html>