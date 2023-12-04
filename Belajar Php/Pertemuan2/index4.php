<?php
$angka = 20;

if ($angka > 10) {
    echo "batua banaa";
}

echo "<br>";

// if else
$password = "gadangbana";

if ($password == "gadangbana") {
    echo "Selamat Anda mendapat 250ribu!";
} else {
    echo "Anda Bayar saya 250ribu!";
}

echo "<br>";

// if else.. if else..
$nilai = 89;

if ($nilai >= 80) {
    echo "Nilai Anda: $nilai, Predikat Istimewa";
} else if ($nilai >= 70) {
    echo "Nilai Anda: $nilai, Predikat Bagus";
} else if ($nilai >= 60) {
    echo "Nilai Anda: $nilai, Predikat Cukup";
} else{
    echo "Nilai Anda: $nilai, Predikit Buruk";
}

echo "<br>";

// switch statement
$warnaPap = "orange";

switch ($warnaPap) {
    case "merah":
        echo "Anda pendukung MU!";
        break;
    case "biru":
        echo "Anda pendukung PERSIB";
        break;
    case "kuning":
        echo "Anda pendukung GOLKAR";
        break;
    case "orange":
        echo "Anda pendukung PRABU SILIWANGI";
        break;
    default:
        echo "Warna anda tidak valid";
        break;
}

?>

<?php
function displayTable() {
    $styleHitam = "style='background-color: black; color: white'";

    for ($i = 1; $i <= 5 ; $i++) { 
        echo("<tr>");

        for ($j = 1; $j <= 5; $j++) { 

            // Catur
            if (isEven($i + $j)) {
                echo("<td $styleHitam>$i, $j</td>");
            } else {
                echo("<td>$i, $j</td>");
            }
        }

        echo("</tr>");
    }
}

function isEven($angka) {
    return $angka % 2 == 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellpadding="25" border="1" cellspacing="0">
        <?php displayTable()?>
    </table>
</body>
</html>