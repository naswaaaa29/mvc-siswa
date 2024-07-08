<?php
require_once 'koneksiakad.php';
function bacaSiswa($sql)
{
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil) >=0)
    { 
        while ($baris = mysqli_fetch_assoc($hasil))
        {
            $data[] = array(
                'NIS' => $baris['NIS'],
                'Nama' => $baris['Nama'], 
                'Jkel' => $baris['Jkel'],
                'Jurusan' => $baris['Jurusan'],
            );
        }
    }
    mysqli_close($koneksi);
    return $data;
}

Function bacaSemuaSiswa(){
    $sql = "select * from siswa";
    return bacaSiswa($sql);
}
Function bacaSeluruhSiswa($sql){
    $baca = bacaSiswa("");
    return $baca;
}
Function bacaSiswaPerJurusan($jurusan){
    $sql = "SELECT * FROM siswa WHERE Jurusan = '$jurusan' ";
    return bacaSiswa($sql);
}
Function cariSiswaDariNis($nis){
    $sql = "SELECT * FROM siswa WHERE NIS = '$nis' ";
    return bacaSiswa($sql);
}

function hapusSiswa($nis){
    $koneksi = koneksiakademik();
    $sql = "delete from siswa where NIS = '$nis'";
    if(!mysqli_query($koneksi,$sql))
    die('Error:'.mysqli_error());
    $hasil= mysqli_affected_rows($koneksi);
    Mysqli_close($koneksi);
    return $hasil;
}

function tambahSiswa($nis,$nama,$jkel,$jurusan){
    $koneksi = koneksiakademik();
    $sql = "insert into siswa values ('$nis','$nama','$jkel','$jurusan')";
    $hasil=0;
    if(mysqli_query($koneksi,$sql))
    $hasil=1;
    Mysqli_close($koneksi);
    return $hasil;
}

Function ubahSiswa($nis, $nama, $jkel, $jurusan){
    $koneksi = koneksiakademik();
    $sql = "UPDATE siswa set Nama ='$nama', Jkel ='$jkel', Jurusan = '$jurusan' WHERE NIS = '$nis' ";

    if(mysqli_query($koneksi, $sql)){
        $hasil = true;
    }else{
        $hasil = "EROR mengubah record..".mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    return $hasil;
}
?>