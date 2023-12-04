<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN PHP GET</title>
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
    <h1>DAFTAR BARANG</h1>

    <table border="1" cellspasing="0" cellpadding="10">
        <?php include("assoc_prod.php"); ?>
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Aksi</th>
        </th>
        <?php 
        $i = 1;
        foreach($products as $pdc) : 
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $pdc["nama_produk"] ?></td>
            <td>
                <a href="profile2.php?kode_barang=<?= $pdc["kode_barang"] ?>&nama_produk=<?= $pdc["nama_produk"] ?>&harga=<?= $pdc["harga"] ?>&stock=<?= $pdc["stock"] ?>">Detail Barang</a>
            </td>
        </th>
        <?php 
            $i++;
        endforeach; 
        ?>
    </table>
    </div>
</body>
</html>