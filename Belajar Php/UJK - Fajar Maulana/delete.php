<?php
require_once "function.php";
$bukuList = loadJson("buku.json");

if (isset($_GET['index'])) {
    deleteBuku($_GET['index']);
    header("Location: index.php");
}

// Hapus Buku
function deleteBuku($id) {
    global $bukuList;
    $id = intval($id);

    // delete
    unset($bukuList[$id]);
    $bukuList = array_values($bukuList);

    saveJson("buku.json", $bukuList);
}
?>