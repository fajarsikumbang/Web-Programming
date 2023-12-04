<?php
$getJSONFile = file_get_contents("barang.json");
$barang = json_decode($getJSONFile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR PHP CRUD JSON</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
</head>
<body>
    <a href="tambah.php">Tambah Data</a> <br>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>

        <?php 
        $index = 0;
        foreach($barang as $brng) : ?>

        <tr>
            <td>
                <?= $brng->id_barang ?>
            </td>
            <td>
                <?= $brng->nama_barang ?>
            </td>
            <td>
                <?= $brng->jenis ?>
            </td>
            <td>
                <?= $brng->hrg_beli ?>
            </td>
            <td>
                <?= $brng->hrg_jual ?>
            </td>
            <td>
                <?= $brng->stok ?>
            </td>
            <td>
                <?= $brng->subtotal ?>
            </td>
            <td>
                <a href="edit.php?index=<?= $index ?>">Edit</a>
                <a href="delete.php?index=<?= $index ?>">Delete</a>
            </td>
        </tr>
        <?php
        $index++;
        endforeach; ?>
    </table>
</body>
</html>