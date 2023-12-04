<?php
include 'function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $data = [
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'prodi' => $_POST['prodi'],
        'fakultas' => $_POST['fakultas']
    ];

    updateData($nim, $data, 'data.json');
    header('Location: index.php');
    exit;
}

$nim = $_GET['nim'];
$mahasiswa = bacaData('data.json');
$dataToUpdate = null;

foreach ($mahasiswa as $mhs) {
    if ($mhs['nim'] == $nim) {
        $dataToUpdate = $mhs;
        break;
    }
}

if (!$dataToUpdate) {
    echo 'Data tidak ditemukan.';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Update Data Mahasiswa</h2>
    <form method="post" action="">
        <input type="hidden" name="nim" value="<?= $dataToUpdate['nim']; ?>">
        Nama: <input type="text" name="nama" value="<?= $dataToUpdate['nama']; ?>" required><br>
        Alamat: <input type="text" name="alamat" value="<?= $dataToUpdate['alamat']; ?>" required><br>
        Prodi: <input type="text" name="prodi" value="<?= $dataToUpdate['prodi']; ?>" required><br>
        Fakultas: <input type="text" name="fakultas" value="<?= $dataToUpdate['fakultas']; ?>" required><br>
        <button type="submit">Update Data</button>
        <input type="reset" value="Reset Form" class="reset">
        <a href="index.php">Kembali ke beranda</a>
    </form>
</body>
</html>