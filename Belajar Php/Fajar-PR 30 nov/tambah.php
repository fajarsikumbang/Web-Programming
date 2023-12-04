<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR PHP CRUD JSON</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.cs">
</head>
<body>

    

    <form action="" method="post">
        <label for="id_barang">Id Barang</label>
        <input type="text" name="id_barang" id="id_barang"><br>
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" id="nama_barang"><br>
        <label for="jenis">Jenis</label>
        <input type="text" name="jenis" id="jenis"><br>
        <label for="Hrg_beli">Harga Beli</label>
        <input type="number" name="hrg_beli" id="hrg_beli"><br>
        <label for="hrg_jual">Harga Jual</label>
        <input type="number" name="hrg_jual" id="hrg_jual"><br>
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok"><br>
        <label for="subtotal">Subtotal</label>
        <input type="number" name="subtotal" id="subtotal"><br>

        <button type="submit" name="submit">Tambah</button>
        <button type="reset" name="reset">Reset</button>
    </form>
    <a href="index.php">Kembali Ke Beranda</a>


    <?php

    if(isset($_POST["submit"])) {
        $getJSONFile = file_get_contents("barang.json");

        $barang = json_decode($getJSONFile, true);


        $input = [
            "id_barang" => $_POST["id_barang"],
            "nama_barang" => $_POST["nama_barang"],
            "jenis" => $_POST["jenis"],
            "hrg_beli" => $_POST["hrg_beli"],
            "hrg_jual" => $_POST["hrg_jual"],
            "stok" => $_POST["stok"],
            "subtotal" => $_POST["subtotal"]
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
            $barang[] = $input;

            $data = json_encode($barang, JSON_PRETTY_PRINT);
            file_put_contents("barang.json", $data);

            header("Location: index.php");
            exit();
        } else {
            echo "error! semua input harus diisi";
        }
    }
    ?>
</body>
</html>