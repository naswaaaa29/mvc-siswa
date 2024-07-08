<?php
session_start();
include 'cruduser.php';
$username = $_POST['Username'];
$password = $_POST['Password'];

if(otentikasi($username, $password)){
    //set variable session
    $_SESSION['Username'] = $username;
    $dataUser = array(); //deklarasi array
    $dataUser = cariUserDariUsername($username);
    $_SESSION['login'] = true;
    $_SESSION['namauser'] = $dataUser['Nama'];
    header("location:index.php");
}else{
    header("location:login.php?error");
}
?>