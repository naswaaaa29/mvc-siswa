<?php
Function koneksiAkademik(){
$host = "localhost";
$username = "root";
$password = "";
$database = "akademik";
//menciptakan koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);
//cek koneksi
if(!$koneksi){
    die("koneksi Gagal!!" . mysqli_connect_error());
}
return $koneksi;
}
?>