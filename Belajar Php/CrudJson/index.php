<?php
include 'function.php';

$mahasiswa = bacaData('data.json');

if (isset($_GET['sort'])) {
    $kolomSort = $_GET['sort'];
    $mahasiswa = urutkanData($mahasiswa, $kolomSort);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css" integrity="sha512-GL7EM8Lf8kU23I3kTio2kRWt8YRDVIQcSZjRVtVRfk05kB/QvkyafuTC94Ev0X6qk7Z0r5s06c1lsP1p/ezDYw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="tambah.php" class="tambah"><i class="ri-add-line"></i>Tambah Data</a>
    <table cellspacing="0">
        <tr>
            <th>No.</th>
            <th><a href="?sort=nim">NIM</a></th>
            <th><a href="?sort=nama">Nama</a></th>
            <th><a href="?sort=alamat">Alamat</a></th>
            <th><a href="?sort=prodi">Prodi</a></th>
            <th><a href="?sort=fakultas">Fakultas</a></th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswa as $index => $mhs): ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['alamat']; ?></td>
                <td><?= $mhs['prodi']; ?></td>
                <td><?= $mhs['fakultas']; ?></td>
                <td>
                    <a href="update.php?nim=<?= $mhs['nim']; ?>">Update</a>
                    <a href="delete.php?nim=<?= $mhs['nim']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>