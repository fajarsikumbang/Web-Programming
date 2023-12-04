<!-- PR -->

<!-- 
1. Buatlah fungsi untuk menghitung umur seeorang berdasarkan tangga lahir
2. Format umur yaitu : "XX tahun, XX Bulan, XX Hari"
-->

<?php

function umur($tanggal_lahir) {

    $tanggal_hari = new DateTime();

    $tanggal = DateTime::createFromFormat('Y-m-d', $tanggal_lahir);

    $waktu = $tanggal->diff($tanggal_hari);

    $tahun = $waktu-> y;
    $bulan = $waktu-> m;
    $hari = $waktu-> d;

    $umur1 = "{$tahun} tahun, {$bulan} bulan, {$hari} hari";

    return $umur1;
}

$tanggal_lahir = "2001-05-27";
$umur2 = umur($tanggal_lahir);
echo "Umur anda saat ini adalah: " . $umur2;

?>