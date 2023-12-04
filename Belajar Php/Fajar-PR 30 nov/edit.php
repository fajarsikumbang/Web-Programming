<?php
if (!isset($_GET["index"])) {
    header("Location: index.php");
    exit;
}

$index = $_GET["index"];

$getJSONFile = file_get_contents("barang.json");
$barang = json_decode($getJSONFile);

$bar = $barang[$index];

if (isset($_POST["simpan"])) {
    $input = [
        "id_barang" => $_POST["id_barang"],
        "nama_barang" => $_POST["nama_barang"],
        "jenis" => $_POST["jenis"],
        "hrg_beli" => $_POST["hrg_beli"],
        "hrg_jual" => $_POST["hrg_jual"],
        "stok" => $_POST["stok"],
        "subtotal" => $_POST["subtotal"]
    ];

    $barang[$index] = $input;

    $data = json_encode($barang, JSON_PRETTY_PRINT);
    file_put_contents("barang.json", $data);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR PHP CRUD JSON</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.cs
</head>
<body>
    <form action="" method="post">
        <label for="id_barang">Id Barang</label>
        <input type="text" name="id_barang" id="id_barang" value="<?= $bar->id_barang ?>"><br>
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" id="nama_barang" value="<?= $bar->nama_barang ?>"><br>
        <label for="jenis">Jenis</label>
        <input type="text" name="jenis" id="jenis" value="<?= $bar->jenis ?>"><br>
        <label for="hrg_beli">Harga Beli</label>
        <input type="number" name="hrg_beli" id="hrg_beli" value="<?= $bar->hrg_beli ?>"><br>
        <label for="hrg_jual">Harga Jual</label>
        <input type="number" name="hrg_jual" id="hrg_jual" value="<?= $bar->hrg_jual ?>"><br>
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" value="<?= $bar->stok ?>"><br>
        <label for="subtotal">Subtotal</label>
        <input type="number" name="subtotal" id="subtotal" value="<?= $bar->subtotal ?>"><br>

        <button type="submit" name="simpan">Simpan</button>
        <button type="reset" name="reset">Reset</button>
    </form>
    <a href="index.php">Kembali Ke Beranda</a>
</body>
</html>
