<?php
if (!isset($_GET["index"])) {
    header("Location: index.php");
    exit;
}

$index = $_GET["index"];

$getJSONFile = file_get_contents("buku.json");
$buku = json_decode($getJSONFile, true); // Tambahkan true untuk mendapatkan array assosiatif

$bar = $buku[$index];

if (isset($_POST["simpan"])) {
    $input = [
        "judul" => $_POST["judul"],
        "description" => $_POST["description"],
        "Penulis" => $_POST["Penulis"],
        "jmlHal" => $_POST["jmlHal"],
        "categorie" => $_POST["categorie"],
        "penerbit" => $_POST["penerbit"],
        "img" => $_POST["img"]
    ];

    $buku[$index] = $input;
    $data = json_encode($buku, JSON_PRETTY_PRINT);
    file_put_contents("buku.json", $data);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Perpustakaan</title>
</head>
<body>
    <form action="" method="post">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="<?= $bar['judul'] ?>"> <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="<?= $bar['description'] ?>"> <br>
        <label for="Penulis">Penulis</label>
        <input type="text" name="Penulis" id="Penulis" value="<?= $bar['Penulis'] ?>"> <br>
        <label for="jmlHal">Jumlah Halaman</label>
        <input type="number" name="jmlHal" id="jmlHal" value="<?= $bar['jmlHal'] ?>"> <br>
        <label for="categorie">Categorie</label>
        <input type="text" name="categorie" id="categorie" value="<?= $bar['categorie'] ?>"> <br>
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="<?= $bar['penerbit'] ?>"> <br>
        <label for="img">Images</label>
        <input type="text" name="img" id="img" value="<?= $bar['img'] ?>">

        <button type="submit" name="simpan">Simpan</button>
        <button type="reset" name="reset">Reset</button>
    </form>
    <a href="index.php">Kembali Ke Beranda</a>
</body>
</html>
