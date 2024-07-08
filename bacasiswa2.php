<?php
    session_start();
    include('crudsiswa.php');
?>
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #AFD198;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #AFC8AD;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 10px;
            text-align: center;
            background-color: #4F6F52;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #618264;
        }

        .button-container {
            text-align: center;
        }
        
        .links{
            margin-left: 750px;
            margin-top: 30px;
        }

        .user-info{
            margin-left: 150px;
        }

    </style>

    <div class="container">
        <h2>Data Siswa</h2>
        <div class="user-info">
            <?php
            if (isset($_SESSION['namauser'])) {
                echo "User : " . $_SESSION['namauser'] . "<br><br>";
            } else {
                echo "User tidak dikenal. <br><br>";
            }

            $sql = "SELECT * FROM siswa";
            $data = bacaSiswa($sql);
            if ($data == null) {
                echo "Record tidak ditemukan";
            }
            ?>
        </div>

    <div class="links">
        <a href="tambahsiswa.php" class="button tambah">Tambah</a>
        <a href="carisiswa.php" class="button cari">Cari siswa</a>
        <a href='index.php' class="button menu">Menu Utama</a>
    </div>
<table border=1>
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th colspan="2">Aksi</th>
    </tr>
<?php
foreach ($data as $siswa){
    $nis = $siswa['NIS'];
    $nama = $siswa['Nama'];
    $jkel = $siswa['Jkel'];
    $jurusan = $siswa['Jurusan'];
    echo "
    <tr>
    <td>$nis</td>
    <td>$nama</td>
    <td>$jkel</td>
    <td>$jurusan</td>
    <td><a href='proseshapusswa.php?nis=$nis'>Hapus</a></td>
    <td><a href='ubahsiswa.php?nis=$nis'>Edit</a></td>
    </tr>
    ";
}

?>
</table>
</body>
</html>