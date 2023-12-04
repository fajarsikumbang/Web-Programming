<?php

// user defined function

// function nama_fungsi($a,$b,$c) {
    //  /instruksi
// }



function greeting($time = "Datang", $name = "Administrator") {
    return "Selamat $time, $name!";
}


function salam($time = "", $name = "") {
    if ($time == "" && $name == "") {
        return "Selamat Datang Administrator";
    } else {
        return "Selamat, $time $name";
    }
}

echo(salam("Sore","Fahri"))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo greeting("Pagi", "Widia"); ?></h1>
    <br>
    <h1></h1>
</body>
</html>