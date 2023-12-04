<?php
// Array Associative

$arr = [1, 2, 3, 4, 5];

$mhs = [
	[
	"nim" => "22416255201204",
	"nama" => "Akbar",
	"alamat" => "Cikampek",
	"prodi" => "Informatika"],
	[
	"nim" => "22416255201138",
	"nama" => "Fajar",
	"alamat" => "Telagasari",
	"prodi" => "Informatika"],
	[
	"nim" => "22416255201165",
	"nama" => "Bisma",
	"alamat" => "Isekai",
	"prodi" => "Informatika"],
	[
	"nim" => "22416255201152",
	"nama" => "Putra",
	"alamat" => "Purwasari",
	"prodi" => "Informatika"],
	[
	"nim" => "23416255201249",
	"nama" => "Fahri",
	"alamat" => "Telagasari",
	"prodi" => "Informatika"],
	[
	"nim" => "10115425",
	"nama" => "Alwan",
	"alamat" => "Johar",
	"prodi" => "Teknik Informatika"],

];

// echo $mhs[3] ["nama"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP | Associative Array</title>
  
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="1">
    	<tr>
    		<th>NIM</th>
    		<th>Nama</th>
    		<th>Alamat</th>
    		<th>Prodi</th>
    		<th>Aksi</th>
    	</tr>
    	<?php foreach ($mhs as $m) : ?>    		
    	<tr>
    		<td><?= $m["nim"] ?></td>
    		<td><?= $m["nama"] ?></td>
    		<td><?= $m["alamat"] ?></td>
    		<td><?= $m["prodi"] ?></td>
    		<td>
    			<button>Edit</button> | <button>Delete</button>
    		</td>
    	</tr>

    	<?php endforeach; ?>
    </table>
 </body>
</html>
aa












