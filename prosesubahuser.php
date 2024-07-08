<?php
include "cruduser.php";
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Nama = $_POST['Nama'];

$hasil = ubahuser($Username, $Password, $Nama);

    if($hasil > 0){
        header ("location:bacauser.php");
    } else {
        echo "GAGAL MENMBAHKAN DATA!";
        header("location:bacauser.php");   
    }
?>