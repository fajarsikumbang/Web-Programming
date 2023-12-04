<?php
// perulangan : for, while, do while, foreach

for ($i = 0; $i < 10; $i++) {
    echo "Widia Cantikk <br>";
}

echo "<br>";

$s = "";

for ($i = 1; $i <= 10; $i++) {
    for ($j = $i; $j < 10; $j++){
        $s .= " ";
    }

    for ($k = 1; $k <= $i; $k++){
        $s .= "* ";
    }
    $s .= "<br>";
}
echo $s;

echo "<br>";

// while ...
$i = 20;
while ($i > 0) {
    echo $i . "<br>";
    $i--;
}

echo "<br>";

// do while
$i = 0;
do {
    echo "Widia-Sama <br>";
    $i++;
} while ($i < 10);

?>