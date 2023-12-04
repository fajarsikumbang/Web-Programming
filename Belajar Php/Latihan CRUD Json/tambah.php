<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD JSON || Tambah Data</title>
</head>
<body>
    <form action="" method="post">
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim"> <br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama"> <br>
        <label for="fakultas">Fakultas : </label>
        <input type="text" name="fakultas" id="fakultas"> <br>
        <label for="prodi">Prodi : </label>
        <input type="text" name="prodi" id="prodi"> <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat"> <br>
        <label for="ipk">IPK</label>
        <input type="number" step="0.01" name="ipk" id="ipk"> <br>

        <button type="submit" name="submit">Tambah</button>
        <button type="reset" name="reset">Reset</button>
    </form>

    <a href="index.php">Kembali ke Beranda</a>

    <?php
    // 1. apakah tombol tambah sudah di tekan
if (isset($_POST["submit"])) {
    // 2. kita buka file json
    $getJSONFile = file_get_contents("mahasiswa.json");
     // 3. decode / pecah ke dalam array php
    $mahasiswa = json_decode($getJSONFile, true);

    // Memeriksa apakah semua input tidak kosong sebelum menyimpan ke JSON
    // 4. membuat assoc. array untuk menampung data POST
    $input = [
        "nim" => $_POST["nim"],
        "nama" => $_POST["nama"],
        "fakultas" => $_POST["fakultas"],
        "prodi" => $_POST["prodi"],
        "alamat" => $_POST["alamat"],
        "ipk" => $_POST["ipk"]
    ];

    // Memeriksa apakah ada input yang kosong
    $inputValues = array_values($input);
    $isEmpty = false;
    foreach ($inputValues as $value) {
        if (empty($value)) {
            $isEmpty = true;
            break;
        }
    }

    // 5. tambahkan $input ke dalam array data
    if (!$isEmpty) {
        $mahasiswa[] = $input;
        // 6. kembalikan lagi data ke json
        $data = json_encode($mahasiswa, JSON_PRETTY_PRINT);
        file_put_contents("mahasiswa.json", $data);
        // 7. arahkan kembali ke index.php
        header("Location: index.php");
        exit(); // Menghentikan eksekusi setelah redirect
    } else {
        echo "Masukkan data Mahasiswa dengan benar!";
    }
}
?>

</body>
</html>