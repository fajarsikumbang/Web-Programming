<?php

if (!isset($_GET["index"])){
    //redirect ke halaman index.php
    header("location: index.php");
    exit;
}

// ambil indexnya
$index = $_GET["index"];

// buka file json
$getJSONFile = file_get_contents("mahasiswa.json");
$mahasiswa = json_decode($getJSONFile, true);

// hapus data dari array tanpa mempengaruhi indeks
array_splice($mahasiswa, $index, 1);

// reset indeks array
$mahasiswa = array_values($mahasiswa);

// kembali lagi ke file json
$data = json_encode($mahasiswa, JSON_PRETTY_PRINT);
file_put_contents("mahasiswa.json", $data);

header("Location: index.php");
?>
