<?php
include('crudmp.php');
$kopel=$_POST['kodemapel'];
$napel=$_POST['namamapel'];
$jmljam=$_POST['jmljam'];


$hasil = tambahMapel($kopel,$napel,$jmljam);
if($hasil > 0){
    header("location:bacamapel2.php");
}else{
    echo "GAGAL MENMBAHKAN DATA!";
    header("location:tambahsiswa.php");
}
?>