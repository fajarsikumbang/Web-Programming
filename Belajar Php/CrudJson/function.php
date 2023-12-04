<?php
function tambahData($data, $file_path)
{
    // Periksa apakah bidang yang diperlukan tidak hanya diisi spasi
    if (empty(trim($data['nim'])) || empty(trim($data['nama'])) || empty(trim($data['alamat'])) || empty(trim($data['prodi'])) || empty(trim($data['fakultas']))) {
        echo "Semua bidang harus diisi.";
        return;
    }

    $mahasiswa = bacaData($file_path);
    $mahasiswa[] = $data;
    simpanData($mahasiswa, $file_path);
}

function updateData($nim, $data, $file_path)
{
    // Periksa apakah bidang yang diperlukan tidak hanya diisi spasi
    if (empty(trim($data['nama'])) || empty(trim($data['alamat'])) || empty(trim($data['prodi'])) || empty(trim($data['fakultas']))) {
        echo "Semua bidang harus diisi.";
        return;
    }

    $mahasiswa = bacaData($file_path);
    foreach ($mahasiswa as &$mhs) {
        if ($mhs['nim'] == $nim) {
            $mhs = array_merge($mhs, $data);
        }
    }
    simpanData($mahasiswa, $file_path);
}

function hapusData($nim, $file_path)
{
    $mahasiswa = bacaData($file_path);
    foreach ($mahasiswa as $key => $mhs) {
        if ($mhs['nim'] == $nim) {
            unset($mahasiswa[$key]);
        }
    }
    simpanData($mahasiswa, $file_path);
}

function bacaData($file_path)
{
    $data = file_get_contents($file_path);
    return json_decode($data, true) ?: [];
}

function simpanData($data, $file_path)
{
    file_put_contents($file_path, json_encode($data, JSON_PRETTY_PRINT));
}

function urutkanData($mahasiswa, $kolom)
{
    usort($mahasiswa, function ($a, $b) use ($kolom) {
        return strcmp($a[$kolom], $b[$kolom]);
    });

    return $mahasiswa;
}
?>