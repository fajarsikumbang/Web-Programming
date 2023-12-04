<?php

if (!isset($_GET["index"])){
    //redirect ke halaman index.php
    header("location: index.php");
    exit;
}

// ambil index dari URL
$index = $_GET["index"];

// ambil data dari JSON
$getJSONFile = file_get_contents("mahasiswa.json");
$mahasiswa = json_decode($getJSONFile);

$bar = $mahasiswa[$index];

// cek apakah tombol simpan sudah ditekan
if (isset($_POST["simpan"])) {
    // membuat assoc. array untuk menampung data POST
        $input = [
            "nim" => $_POST["nim"],
            "nama" => $_POST["nama"],
            "fakultas" => $_POST["fakultas"],
            "prodi" => $_POST["prodi"],
            "alamat" => $_POST["alamat"],
            "ipk" => $_POST["ipk"]
        ];

        // update data yang dipilih
        $mahasiswa[$index] = $input;

        // kembalikan ke file JSON
        $data = json_encode($mahasiswa, JSON_PRETTY_PRINT);
        file_put_contents("mahasiswa.json", $data);

        // arahkan ke halaman index.php
        header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD JSON || Edit Data</title>
</head>
<body>
    <form action="" method="post">
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim"  value="<?= $bar->nim ?>"> <br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $bar->nama ?>"> <br>
        <label for="fakultas">Fakultas : </label>
        <input type="text" name="fakultas" id="fakultas" value="<?= $bar->fakultas ?>"> <br>
        <label for="prodi">Prodi : </label>
        <input type="text" name="prodi" id="prodi" value="<?= $bar->prodi ?>"> <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="<?= $bar->alamat ?>"> <br>
        <label for="ipk">IPK</label>
        <input type="number" step="0.01" name="ipk" id="ipk" value="<?= $bar->ipk ?>"> <br>

        <button type="submit" name="simpan">Simpan</button>
        <button type="reset" name="reset">Reset</button>
    </form>

    <a href="index.php">Kembali ke Beranda</a>
</body>
</html>