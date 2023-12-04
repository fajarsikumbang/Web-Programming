<?php
function sortData($data) {
    $length = count($data);
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < ($length - 1 - $i); $j++) {
            if ($data[$j]->no_anggota > $data[$j + 1]->no_anggota) {
                $temp = $data[$j];
                $data[$j] = $data[$j + 1];
                $data[$j + 1] = $temp;
            }
        }
    }
    return $data;
}

// Memanggil fungsi untuk mengurutkan data sebelum ditampilkan
$getJSONFile = file_get_contents("koperasi.json");
$data = json_decode($getJSONFile);

$data = sortData($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOPERASI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="tambah.php" class="tambah">Tambah Data</a><br>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Pekerjaan</th>
            <th>Status</th>
            <th>Simpanan wajib</th>
            <th>Simpanan Sukarela</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>

        <?php 
        $index = 0;
        foreach($data as $dta) : ?>

        <tr>
            <td><?= $dta->no_anggota ?></td>
            <td><?= $dta->nama ?></td>
            <td><?= $dta->alamat ?></td>
            <td><?= $dta->jenis_kelamin ?></td>
            <td><?= $dta->tempat_lahir ?></td>
            <td><?= $dta->tanggal_lahir ?></td>
            <td><?= $dta->pekerjaan ?></td>
            <td><?= $dta->status ?></td>
            <td><?= $dta->simpanan->simpanan_wajib ?></td>
            <td><?= $dta->simpanan->simpanan_sukarela ?></td>
            <td><?= $dta->simpanan->jumlah ?></td>
            <td>
                <a href="edit.php?index=<?= $index ?>" class="ini">Edit</a>
                <a href="delete.php?index=<?= $index ?>" class="ini">Delete</a>
            </td>
        </tr>
        <?php
        $index++;
        endforeach; ?>

    </table>
</body>
</html>
