<?php
require_once "function.php";
$bukuList = loadJson("buku.json");

if (isset($_POST['submit'])) {
    addBuku($_POST);
    header("Location: index.php");
}

// Add Buku
function addBuku($post) {
    global $bukuList, $id, $buku;

    $bukuEdit = [
        "judul" => $post['judul'],
        "description" => $post['description'],
        "Penulis" => $post['Penulis'],
        "jmlHal" => $post['jmlHal'],
        "categorie" => $post['categorie'],
        "penerbit" => $post['penerbit'],
        "img" => "gktau"
    ];

    array_push($bukuList, $bukuEdit);
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
        <input type="text" name="judul" id="judul"><br>

        <label for="description">Deskripsi</label>
        <input type="text" name="description" id="description"><br>

        <label for="Penulis">Penulis</label>
        <input type="text" name="Penulis" id="Penulis"><br>
        
        <label for="jmlHal">Jumlah Halaman</label>
        <input type="number" name="jmlHal" id="jmlHal"><br>

        <label for="categorie">Ketagori</label>
        <input type="text" name="categorie" id="categorie"><br>

        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit"><br>

        <a href="./index.php" class="button primary">Cancel</a>
        <button type="submit" name="submit" class="button primary">Submit</button>
    </form>
</body>
</html>