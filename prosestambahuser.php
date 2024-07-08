<?php
include('cruduser.php');
$username=$_POST['Username'];
$password=$_POST['Password'];
$nama=$_POST['Nama'];

$user_exist = cariUserDariUsername($username); // Cek apakah username sudah ada
if ($user_exist) {
    header("location:gagaltambahuser.php"); // Redirect jika username sudah ada
    exit(); // Berhenti menjalankan skrip
}

$hasil = tambahUSer($username, $password, $nama);
if($hasil > 0){
    header("location:bacauser.php");
}else{
    echo "GAGAL MENMBAHKAN DATA!";
    header("location:tambahuser.php");
}
?>