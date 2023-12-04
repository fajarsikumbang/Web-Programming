<?php

// variabel Scope --> Lingkup Variabel

// Varuabel Local => Variabel yg bisa di akses di bagian blok pemrograman tertentu.
// Variabel Global => Variabel yang bisa di akses dimana saja.

// Variabel Static => Variabel yang nilainya tetap.

$angka = 10;

static $PHI = 3.14;

function printAngka(){
    global $angka;
    echo $angka;
}

printAngka();

// echo $angka;

?>