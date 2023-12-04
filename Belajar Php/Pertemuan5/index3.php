<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP | Array</title>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            margin-top: 180px;
        }

        li {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
            transition: all 500ms ease-in-out;
            background-color: aqua;
        }

        li:hover {
            transform: rotate(180deg) scale(1.0);
            border-radius: 25%;
            background-color: orange;
            box-shadow: 5px 5px 5px black;
        }
    </style>
</head>
<body>
    <?php 
    $mhs = [
        ["22416255201204","Akbar","Cikampek","Informatika"],
        ["22416255201138","Fajar","Telagasari","Informatika"],
        ["22416255201165","Bisma","Isekai","Informatika"],
        ["22416255201152","Putra","Purwasari","Informatika"],
        ["23416255201249","Fahri","Telagasari","Informatika"],
        ["22416255201166","Atilla","Klari","Informatika"],
        ["181063105015", "Haris", "Karaba", "Pend. Matematika"],
        ["10115425","Alwan","Johar","Teknik Informatika"]
    ];
    ?>
    <ul>
        <?php foreach ($mhs as $mahasiswa): ?>
            <li>
                <strong>NIM:</strong> <?php echo $mahasiswa[0]; ?><br>
                <strong>Nama:</strong> <?php echo $mahasiswa[1]; ?><br>
                <strong>Alamat:</strong> <?php echo $mahasiswa[2]; ?><br>
                <strong>Prodi:</strong> <?php echo $mahasiswa[3]; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>