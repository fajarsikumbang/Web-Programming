<!DOCTYPE html>
<html>
<head>
    <title>Styling Output PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .hewan-info {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-bottom: 10px;
        }

        .hewan-info p {
            margin: 5px 0;
        }

        .hewan-info:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<?php 

class Hewan {
    public $nama;
    public $jenis;
    public $suara;

    public function __construct($nama, $jenis, $suara) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->suara = $suara;
    }

    public function bersuara() {
        echo "<div class='hewan-info'>";
        echo "<p><strong>Hewan {$this->jenis} bernama {$this->nama}</strong></p>";
        echo "<p>Bersuara: {$this->suara}</p>";
        echo "</div>";
    }
}

// Contoh penggunaan
$hewan1 = new Hewan("Romeo", "Kucing", "Meow");
$hewan2 = new Hewan("Juliet", "Anjing", "Guk Guk");

$hewan1->bersuara();
$hewan2->bersuara();

?>

</body>
</html>
