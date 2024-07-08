<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "akademik";
$koneksi = mysqli_connect($host, $username, $password, $database);
if($koneksi) echo "Berhasil koneksi";
else echo "Gagal koneksi";
?>