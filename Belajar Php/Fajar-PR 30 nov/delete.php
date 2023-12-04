<?php

if (!isset($_GET["index"])){

    header("Location: index.php");
    exit;
}

$index = $_GET["index"];

$getJSONFile = file_get_contents("barang.json");
$barang = json_decode($getJSONFile, true);

array_splice($barang, $index, 1);

$barang = array_values($barang);

$data = json_encode($barang, JSON_PRETTY_PRINT);
file_put_contents("barang.json", $data);

header("Location: index.php");

?>