<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GET</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>

    <table border="1" cellspasing="0" cellpadding="10">
        <?php include("assoc_mhs.php"); ?>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Aksi</th>
        </th>
        <?php 
        $i = 1;
        foreach($mahasiswa as $mhs) : 
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $mhs["nama"] ?></td>
            <td>
                <a href="profile.php?nim=<?= $mhs["nim"] ?>&nama=<?= $mhs["nama"] ?>&alamat=<?= $mhs["alamat"] ?>&prodi=<?= $mhs["prodi"] ?>">Lihat Profile</a>
            </td>
        </th>
        <?php 
            $i++;
        endforeach; 
        ?>
    </table>
</body>
</html>