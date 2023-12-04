
<!-- 1. Tampilkan data yang ada di json ke dalam tabel -->
<!-- 2. Buat fungsi untuk menambahkan data ke json -->
<!-- 3. Buat fungsi untuk mengedit data di json -->
<!-- 4. Buat fungsi untuk menghapus data di json -->
<!-- 5. Buat fungsi untuk mengurut data di tabel -->

<?php
$getJSONFile = file_get_contents("buku.json");
$buku = json_decode($getJSONFile);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
        img{
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>
    <a href="tambah.php">Tambah Data</a> <br>


    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Penulis</th>
            <th>Jumlah Halaman</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Image</th>

        </tr>

        <?php
        $index = 0;
        foreach($buku as $bk) : ?>

        <tr>
            <td>
                <?= $bk->judul ?>
            </td>
            <td>
                <?= $bk->description ?>
            </td>
            <td>
                <?= $bk->jmlHal ?>
            </td>
            <td>
                <?= $bk->categorie ?>
            </td>
            <td>
                <?= $bk->penerbit ?>
            </td>
            <td>
                <img src="<?= $bk->img ?>" alt="">
            </td>
            <td>
                <a href="edit.php?index=<?= $index ?>">Edit</a>
                <a href="delete.php?index=<?= $index ?>">Hapus</a>
            </td>
        </tr>
        <?php
        $index++;
        endforeach; ?>

    </table>
</body>
</html>