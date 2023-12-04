<?php
// Membaca File json
function loadJson($path) {
    $ftext = file_get_contents($path);
    return json_decode($ftext);
}

// Menyimpan File JSON
function saveJson($path, $data) {
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($path, $data);
}
?>