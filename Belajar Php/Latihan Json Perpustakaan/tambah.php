<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <form action="" method="post">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul"> <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description"> <br>
        <label for="Penulis">Penulis</label>
        <input type="text" name="Penulis" id="Penulis"> <br>
        <label for="jmlHal">Jumlah Halaman</label>
        <input type="number" name="jmlHal" id="jmlHal"> <br>
        <label for="categorie">Categorie</label>
        <input type="text" name="categorie" id="categorie"> <br>
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit"> <br>
        <label for="img">Images</label>
        <input type="text" name="img" id="img">

        <button type="submit" name="simpan">Simpan</button>
        <button type="reset" name="reset">Reset</button>
    </form>
    <a href="index.php">Kembali Ke Beranda</a>

    <?php

    if(isset($_POST["submit"])) {
        $getJSONFile = file_get_contents("barang.json");

        $barang = json_decode($getJSONFile, true); 

        $input = [
        "judul" => $_POST["judul"],
        "description" => $_POST["description"],
        "Penulis" => $_POST["Penulis"],
        "jmlHal" => $_POST["jmlHal"],
        "categorie" => $_POST["categorie"],
        "penerbit" => $_POST["penerbit"],
        "img" => $_POST["img"]
    ];

        $inputValues = array_values($input);
        $isEmpty = false;
        foreach ($inputValues as $value) {
            if (empty($value)) {
                $isEmpty = true;
                break;
            }

        }

        if (!$isEmpty) {
            $buku[] = $input;

            $data = json_encode($buku, JSON_PRETTY_PRINT);
            file_put_contents("buku.json", $data);

            header("Location: index.php");
            exit();
        } else {
            echo "error! tolong input jenis buku";
        }
    }
    ?>
</body>
</html>