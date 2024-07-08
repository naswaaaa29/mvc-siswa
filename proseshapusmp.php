<?php
include('crudmp.php');
$kopel=$_GET['kodemapel'];
$hasil = hapusMapel($kopel);

if($hasil > 0){
    header("location:bacamapel2.php");
}else{
    echo "GAGAL MENGHAPUS DATA!";
    header("location:gagaltambah.php");
}
?>