<?php
// 1. Built-in Function -> Fungsi yang sudah dibuat oleh PHP
// 2. User Defined Function -> Fungsi yang dibuat oleh kita sebagai developer

// date, time, mktime, strtotime

// date() -> tanggal
// date_default_timezone_set("Asia/Jakarta");
// echo date('l, d F o, H:i:s e');

// time
// echo time()
// detik yang berlalu sejak 1 januari 1970, ditetapkan sebagai awal waktu dari komputer kesepakatan para ilmuan

// mktime -> membuat waktu kita sendiri
// echo mktime(0,0,0,5,27,2001);

// strtotime -> mengubah string menjadi tanggal
echo strtotime("27 May 2001");

echo "<br>";
// date_parse => memecah tanggal
print_r(date_parse("2023-11-22"));

?>