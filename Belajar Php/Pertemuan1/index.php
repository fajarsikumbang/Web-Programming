<?php
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// echo "Hello World";

// operator aritmatika

// $x = 10;
// $y = 20;
// echo $x * $y;

// operator untuk menggabungkan string
// $nama_depan = "Fajar";
// $nama_belakang = "Kusumah";

// echo "<h1>" . $nama_depan . " " . $nama_belakang . "</h1>";

// operator aasignment : +=, -=, *=, /=, %=, .=
// $angka = 5;

// $angka += 7;

// $angka = $angka + 7

// echo $angka;

// operator perbandingan : >, <, >=, <=, ==, !=
var_dump(10 != 20);
var_dump(20 > 6);

// operator logika : &&, ||, !
var_dump(!true);

$angka2 = 100;
var_dump($angka2 < 200 && $angka2 % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Selamat Datang, <?php
    
    $nama = "Akbar Chan";
    echo $nama;
    
    ?></h1>

    <?php echo "<h2>Welcome to my Website</h2>" ?>

    <?php print_r("<p>Holla</p>") ?>

    <?php var_dump("Calderioz")?>

    <?php var_dump(472835)?>
</body>
</html>