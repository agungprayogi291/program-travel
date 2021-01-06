<?php
require 'config.php';
$nama = $_GET['name'];
mysqli_query($conn,"DELETE FROM produk WHERE nama_produk = '$nama'");
header("Location:admin.php")
?>