<?php
/*
LATIHAN PHP
1. Buat fungsi untuk menentukan hari berdasarkan jumlah hari yang dihitung,
misal: hari ini rabu, maka 100 hari kemudian hari apa?
2. Translate hari tersebut ke dalam bahasa indonesia!

Clue:
1. Function => parameternya jumlah hari yang dihitung
2. build in function => date sama time
3. pake switch case => untuk translate nama hari
*/


function hitungHari($jumlah_hari) {
    
    $hari_ini = date("N"); 

    $hari_setelahnya = date("N", strtotime("+$jumlah_hari days"));

    function translateHari($dayNumber) {
        switch ($dayNumber) {
            case 1:
                return "Senin";
                break;
            case 2:
                return "Selasa";
                break;
            case 3:
                return "Rabu";
                break;
            case 4:
                return "Kamis";
                break;
            case 5:
                return "Jumat";
                break;
            case 6:
                return "Sabtu";
                
                break;
            case 7:
                return "Minggu";
                break;
            default:
                return "Hari tidak valid";
        }
    }

    $hari_ini_terjemahan = translateHari($hari_ini);
    $hari_setelahnya_terjemahan = translateHari($hari_setelahnya);

    $tanggal_setelahnya = date("d/m/Y", strtotime("+$jumlah_hari days"));
    
    echo "Hari ini adalah $hari_ini_terjemahan. $jumlah_hari hari kemudian, pada tanggal $tanggal_setelahnya, akan menjadi $hari_setelahnya_terjemahan.";
}

hitungHari(150);
?>