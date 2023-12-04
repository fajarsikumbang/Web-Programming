<?php

// CRUD = CREATE, READ, UPDATE, DELETE
/*

Create = Menambahkan data ke dalam suatu penyimpanan
Read = Membaca / Menampilkan data yang ada di dalam penyimpanan
Update = Merubah data yang sudah ada
Delete = Menghapus data

*/

?>

<?php

// 1. membaca file json
$getJSONFile = file_get_contents("mahasiswa.json");

// 2. memecah json ke dalam array php
$mahasiswa = json_decode($getJSONFile);

// var_dump ($mahasiswa);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD JSON</title>
</head>
<body>

    <a href="tambah.php">Tambah Data</a> <br>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>IPK</th>
            <th>Aksi</th>
        </tr>

        <?php
        // inisialisasi awal index
        $index = 0;
        // tampilkan data dari json dengan foreach
        foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td>
                    <?= $mhs->nim ?>
                </td>
                <td>
                    <?= $mhs->nama ?>
                </td>
                <td>
                    <?= $mhs->fakultas ?>
                </td>
                <td>
                    <?= $mhs->prodi ?>
                </td>
                <td>
                    <?= $mhs->alamat ?>
                </td>
                <td>
                    <?= $mhs->ipk ?>
                </td>
                <td>
                    <a href="edit.php?index=<?= $index ?>">Edit</a>
                    <a href="delete.php?index=<?= $index ?>">Delete</a>
                </td>
            </tr>
        <?php 
        // increment index
        $index++;
        endforeach; ?>

    </table>
</body>
</html>