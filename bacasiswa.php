<?php
include("koneksi.php");
echo "<br><br>";
$sql = "select * from siswa";
$hasil = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($hasil)>0){
    while($baris=mysqli_fetch_assoc($hasil)){
        $nis = $baris['NIS'];
        $nama = $baris['Nama'];
        echo "NIS : $nis, Nama : $nama <br>";}
} else {echo "Tidak ada record";}
?>