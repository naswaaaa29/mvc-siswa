<?php
include('crudsiswa.php');
$nis = $_POST['NIS'];
$nama = $_POST['Nama'];
$jkel = $_POST['Jkel'];
$jurusan = $_POST['Jurusan'];

$hasil = ubahSiswa($nis,$nama,$jkel,$jurusan);

if($hasil > 0){
    header("location:bacasiswa2.php");
}else{
    echo "GAGAL MENMBAHKAN DATA!";
    header("location:tambahsiswa.php");
}
?>