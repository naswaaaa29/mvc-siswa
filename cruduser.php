<?php
require_once 'koneksiakad.php';

function cariUserDariUsername($username){
    $koneksi = koneksiAkademik();
    $sql = "SELECT * FROM user WHERE Username='$username'";
    $hasil = mysqli_query($koneksi, $sql);
    $total = mysqli_num_rows($hasil);
    if(mysqli_num_rows($hasil) > 0)
    { 
    $baris = mysqli_fetch_assoc($hasil);
        $data['Username']=$baris['Username'];
        $data['Password']=$baris['Password'];
        $data['Nama']=$baris['Nama'];
        mysqli_close($koneksi);
        return $data;
    }
    mysqli_close($koneksi);
    return null;
}

function otentikasi($username, $password) {
    $dataUser = cariUserDariUsername($username);
    $passmd5 = md5($password);
    if ($dataUser && $passmd5 == $dataUser['Password']) {
        return true;
    }
    return false;
}

function bacaUser($sql) {
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['Username'] = $baris['Username'];
        $data[$i]['Password'] = $baris['Password'];
        $data[$i]['Nama'] = $baris['Nama'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function tambahUser($username, $password, $nama) {
    $koneksi = koneksiAkademik();
    $password = md5($password); // Encrypt password
    $sql = "INSERT INTO user (Username, Password, Nama) VALUES ('$username', '$password', '$nama')";
    $hasil = mysqli_query($koneksi, $sql) ? 1 : 0;
    mysqli_close($koneksi);
    return $hasil;
}

function hapusUser($username) {
    $koneksi = koneksiAkademik();
    $sql = "DELETE FROM user WHERE Username = '$username'";
    if (!mysqli_query($koneksi, $sql)) {
        die('Error: ' . mysqli_error($koneksi));
    }
    $hasil = mysqli_affected_rows($koneksi);
    mysqli_close($koneksi);
    return $hasil;
}

function ubahUser($username, $new_password, $new_nama) {
    $koneksi = koneksiAkademik();
    $new_password = $new_password; // Encrypt password
    $sql = "UPDATE user SET Password='$new_password', Nama='$new_nama' WHERE Username='$username'";
    $update = mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
    return $update;
}

function editUser($username, $password, $nama) {
    $koneksi = koneksiAkademik();
    $user_data = cariUserDariUsername($username);
    $password_db = $user_data['Password'];
    if ($password != $password_db) {
        $password = md5($password); // Encrypt new password
    }
    $sql = "UPDATE user SET Password='$password', Nama='$nama' WHERE Username='$username'";
    $hasil = mysqli_query($koneksi, $sql) ? 1 : 0;
    mysqli_close($koneksi);
    return $hasil;
}
?>