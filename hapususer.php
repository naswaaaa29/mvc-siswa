<?php
include('cruduser.php');
$Username = $_GET['Username'];
$hasil = hapususer($Username);
if($hasil > 0){
    header("location:bacauser.php");
}else{
    header("location:gagalhapususer.php");
}
?>