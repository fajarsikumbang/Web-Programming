<?php
require_once "function.php";
$bukuList = loadJson("buku.json");
$dataBuku = $bukuList;

if (isset($_GET['sort'])) {
    $prop = $_GET['sort'];

    // Urutkan
    $tesss = sortArrayAt($prop, $bukuList);
    foreach ($tesss as $ind => $tes) {
        # code...
        print($ind . ". " . $tes->judul . " ---- " . $tes->Penulis);
        echo("<br>");
    }   
}

function sortArrayAt($prop, $dataList) {
    function compareBy_judul($a, $b) {
        return strcmp($a->judul, $b->judul);
    }
    function compareBy_Penulis($a, $b) {
        return strcmp($a->Penulis, $b->Penulis);
    }

    // Sort
    usort($dataList, "compareBy_$prop");
    return $dataList;
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
    <a href="./add.php" class="button primary">Tambah</a>
    <a href="./index.php?sort=judul" class="button primary">Urutkan Judul</a>
    <a href="./index.php?sort=Penulis" class="button primary">Urutkan Penulis</a>
    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Penulis</th>
            <th>Jumlah Halaman</th>
            <th>Ketagori</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>

        <?php
        // Loop
        foreach ($dataBuku as $index => $buku) :?>
            <tr>
                <td><?= $index + 1 ?> </td>
                <td><?= $buku->judul ?></td>
                <td class="image"><img src="<?= $buku->img ?>" alt=""></td>
                <td><?= $buku->description ?></td>
                <td><?= $buku->Penulis ?></td>
                <td><?= $buku->jmlHal ?></td>
                <td><?= $buku->categorie ?></td>
                <td><?= $buku->penerbit ?></td>
                <td class="action">
                    <a href="./edit.php?index=<?= $index ?>"  class="button warning">Edit</a>
                    <a href="./delete.php?index=<?= $index ?>" class="button danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>