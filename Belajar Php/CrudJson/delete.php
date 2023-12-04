<?php
include 'function.php';

$nim = $_GET['nim'];
hapusData($nim, 'data.json');
header('Location: index.php');
exit;
?>