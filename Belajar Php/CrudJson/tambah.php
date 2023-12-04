<?php
include 'function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'prodi' => $_POST['prodi'],
        'fakultas' => $_POST['fakultas']
    ];

    tambahData($data, 'data.json');
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="post" action="">
        NIM: <input type="number" name="nim" required><br>
        Nama: <input type="text" name="nama" required><br>
        Alamat: <input type="text" name="alamat" required><br>
        Prodi: <input type="text" name="prodi" required><br>
        Fakultas: <input type="text" name="fakultas" required><br>
        <button type="submit">Tambah Data</button>
        <input type="reset" value="Reset Form" class="reset">
        <a href="index.php">Kembali ke beranda</a>
    </form>
</body>
</html>