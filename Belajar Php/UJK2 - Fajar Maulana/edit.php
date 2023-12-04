<?php
if (!isset($_GET["index"])) {
    header("Location: index.php");
    exit;
}

$index = $_GET["index"];

$getJSONFile = file_get_contents("koperasi.json");
$data = json_decode($getJSONFile);

$bar = $data[$index];

if (isset($_POST["submit"])) {
    $input = [
        "no_anggota" => $_POST["no_anggota"],
        "nama" => $_POST["nama"],
        "alamat" => $_POST["alamat"],
        "jenis_kelamin" => $_POST["jenis_kelamin"],
        "tempat_lahir" => $_POST["tempat_lahir"],
        "tanggal_lahir" => $_POST["tanggal_lahir"],
        "pekerjaan" => $_POST["pekerjaan"],
        "status" => $_POST["status"],
        "simpanan" => [
            "simpanan_wajib" => $_POST["simpanan_wajib"],
            "simpanan_sukarela" => $_POST["simpanan_sukarela"],
            "jumlah" => $_POST["jumlah"]
        ]
    ];

    $data[$index] = $input;

    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("koperasi.json", $data);

    header("Location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR CRUD JSON</title>
</head>
<body>
<form action="" method="post">
        <label for="no_anggota">No Anggota</label>
        <input type="text" name="no_anggota" id="no_anggota" value="<?= $bar->no_anggota ?>"><br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $bar->nama ?>"><br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="<?= $bar->alamat ?>"><br>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $bar->jenis_kelamin ?>"><br>
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $bar->tempat_lahir ?>"><br>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= $bar->tanggal_lahir ?>"><br>
        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" name="pekerjaan" id="pekerjaan" value="<?= $bar->pekerjaan ?>"><br>
        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="<?= $bar->status ?>"><br>
        <label for="simpanan_wajib">Simpanan Wajib</label>
        <input type="number" name="simpanan_wajib" id="simpanan_wajib" value="<?= $bar->simpanan_wajib ?>"><br>
        <label for="simpanan_sukarela">Simpanan Sukarela</label>
        <input type="number" name="simpanan_sukarela" id="simpanan_sukarela" value="<?= $bar->simpanan_sukarela ?>"><br>
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah" value="<?= $bar->jumlah ?>"><br>
       

        <button type="submit" name="submit">Tambah</button>
        <button type="reset" name="reset">Hapus</button>
    </form>
    <a href="index.php">Kembali ke Beranda</a>
</body>
</html>