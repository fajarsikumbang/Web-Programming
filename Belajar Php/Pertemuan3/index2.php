<?php

// strlen, strcmp, explode, implode, dll.

// strlen -> mengetahui panjang string
echo strlen("Hello World");
echo "<br>";

// str_word_count -> menghitung jumlah kata
echo str_word_count("dek indak ado raso picayo den turuik adiak ka ranah minang, iyo juo kato urang. sungguah sungguah denai indak manyangko di tinggakan batinggilah.");
echo "<br>";

// strcmp -> membandingkan dua buah string
$kata1 = "Widia";
$kata2 = "WIDIA";

if (strcasecmp($kata1, $kata2) !== 0) {
    echo "$kata1 tidak sama dengan $kata2";
} else {
    echo "$kata1 sama dengan $kata2";
}
echo "<br>";

// substr -> mengambil sebagian karakter kata
echo substr("Pantek", 2, 5);
echo "<br>";

// explode = memecah string jadi array
print_r(explode(",","Widia, Fajar, Imel", 0));


?>