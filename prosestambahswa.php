<?php
include ('koneksi.php');
include('crudsiswa.php');
$nis=$_POST['NIS'];
$nama=$_POST['Nama'];
$jkel=$_POST['Jkel'];
$jurusan=$_POST['Jurusan'];

$sql = "SELECT * FROM siswa WHERE NIS = $nis";
$run = mysqli_query($koneksi, $sql);
$row = mysqli_num_rows($run);
if($row == 0){
    $hasil = tambahSiswa($nis,$nama,$jkel,$jurusan);
    if($hasil > 0){
        header("location:bacasiswa2.php");
    }else{
        echo "GAGAL MENMBAHKAN DATA!";
        header("location:tambahsiswa.php");
    }
}else{
    echo"NIS sudah digunakan";
}
?>