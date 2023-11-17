<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];

// Menyimpan data ke database
$sql = "INSERT INTO nama_tabel (nama, email) VALUES ('$nama', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
