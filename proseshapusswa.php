<?php
include('crudsiswa.php');
$nis=$_GET['nis'];
$hasil = hapusSiswa($nis);

if($hasil > 0){
    header("location:bacasiswa2.php");
}else{
    echo "GAGAL MENGHAPUS DATA!";
    header("location:gagaltambah.php");
}
?>