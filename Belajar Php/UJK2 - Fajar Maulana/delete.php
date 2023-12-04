<?php

function deleteDataInKoperasi($index)
{
    $getJSONFile = file_get_contents("koperasi.json");
    $koperasi = json_decode($getJSONFile, true);

    array_splice($koperasi, $index, 1);

    $koperasi = array_values($koperasi);

    $data = json_encode($koperasi, JSON_PRETTY_PRINT);
    file_put_contents("koperasi.json", $data);
}

if (!isset($_GET["index"])) {
    header("Location: index.php");
    exit;
}

$index = $_GET["index"];

deleteDataInKoperasi($index);

header("Location: index.php");
?>