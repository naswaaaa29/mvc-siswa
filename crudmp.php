<?php
include 'koneksiakad.php';

function bacaMapel($sql)
{
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil) >=0)
    { 
        while ($baris = mysqli_fetch_assoc($hasil))
        {
            $data[] = array(
                'kodemapel' => $baris['kodemapel'],
                'namamapel' => $baris['namamapel'], 
                'jmljam' => $baris['jmljam'],
            );
        }
    }
    mysqli_close($koneksi);
    return $data;
}

function bacasemuamapel(){
    $sql = "SELECT * FROM mapel";
    return bacaMapel($sql);
}


function tambahMapel($kopel,$napel,$jmljam){
    $koneksi = koneksiakademik();
    $sql = "insert into mapel values ('$kopel','$napel','$jmljam')";
    $hasil=0;
    if(mysqli_query($koneksi,$sql))
    $hasil=1;
    Mysqli_close($koneksi);
    return $hasil;
}

function hapusMapel($kopel){
    $koneksi = koneksiakademik();
    $sql = "delete from mapel where kodemapel = '$kopel'";
    if(!mysqli_query($koneksi,$sql))
    die('Error:'.mysqli_error());
    $hasil= mysqli_affected_rows($koneksi);
    Mysqli_close($koneksi);
    return $hasil;
}

function ubahMapel($kopel, $napel, $jmljam){
    $koneksi = koneksiakademik();
    $sql = "update mapel set namamapel = '$napel', jmljam = '$jmljam' where kodemapel = '$kopel'";
    if(!mysqli_query($koneksi,$sql))
    // $hasil = 1;
    die('Error:'.mysqli_error());
    $hasil= mysqli_affected_rows($koneksi);
    Mysqli_close($koneksi);
    return $hasil;
}

Function cariMapelDariKodemapel($kodemapel){
    $sql = "SELECT * FROM mapel WHERE Kodemapel = '$kodemapel' ";
    return bacaMapel($sql);
}


?>