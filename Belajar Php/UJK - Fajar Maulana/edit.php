<?php
require_once "function.php";
$id = null;
$bukuList = loadJson("buku.json");

if (isset($_GET['index'])) {
    $data = loadBuku($_GET);
    $buku = $data[0];
    $id = $data[1];
} else {
    exit;
}

if (isset($_POST['simpan'])) {
    editBuku($_POST);
    header("Location: index.php");
}

// Load Buku
function loadBuku($get) {
    global $bukuList;

    $id = $_GET['index'];
    return [$bukuList[$id], $id];
}

// Edit Buku
function editBuku($post) {
    global $bukuList, $id, $buku;

    $bukuEdit = [
        "judul" => $post['judul'],
        "description" => $post['description'],
        "Penulis" => $post['Penulis'],
        "jmlHal" => $post['jmlHal'],
        "categorie" => $post['categorie'],
        "penerbit" => $post['penerbit'],
        "img" => $buku->img
    ];

    $bukuList[$id] = $bukuEdit;
    saveJson("buku.json", $bukuList);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Edit data</h2>
    <form action="" method="POST">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="<?= $buku->judul ?>"><br>

        <label for="description">Deskripsi</label>
        <input type="text" name="description" id="description" value="<?= $buku->description ?>"><br>

        <label for="Penulis">Penulis</label>
        <input type="text" name="Penulis" id="Penulis" value="<?= $buku->Penulis ?>"><br>
        
        <label for="jmlHal">Jumlah Halaman</label>
        <input type="number" name="jmlHal" id="jmlHal" value="<?= $buku->jmlHal ?>"><br>

        <label for="categorie">Ketagori</label>
        <input type="text" name="categorie" id="categorie" value="<?= $buku->categorie ?>"><br>

        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="<?= $buku->penerbit ?>"><br>

        <a href="./index.php" class="button primary">Cancel</a>
        <button type="submit" name="simpan" class="button primary">Simpan</button>
    </form>
</body>
</html>