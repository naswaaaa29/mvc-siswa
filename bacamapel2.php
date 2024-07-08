<?php
include('crudmp.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mata Pelajaran</title>
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

        td {
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

        .add-button {
            display: block;
            width: 100px;
            margin: 15px auto;
            padding: 10px;
            text-align: center;
            background-color: #4F6F52;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }

        .add-button1 {
            display: block;
            width: 120px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #4F6F52;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 125px;
        }

        .add-button:hover {
            background-color: #618264;
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
    </style>
</head>
<body>
    <h2>DAFTAR MATA PELAJARAN</h2>
    <?php
    $data = bacasemuamapel();
    if($data == null){
        echo "Record tidak ditemukan";
    } else {
    ?>
    <div class="links">
        <a href="tambahmapel.php" class="button tambah">Tambah</a>
        <a href="carimapel.php" class="button cari">Cari mapel</a>
        <a href='index.php' class="button menu">Menu Utama</a>
    </div>
    <table border=1>
        <tr>
            <td>Kode Mapel</td>
            <td>Nama Mapel</td>
            <td>Jumlah Jam</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php
        foreach($data as $mapel)
        {
            $kopel = $mapel['kodemapel'];
            $napel = $mapel['namamapel'];
            $jmljam = $mapel['jmljam'];
            echo "
            <tr>
                <td>$kopel</td>
                <td>$napel</td>
                <td>$jmljam</td>
                <td><a href='proseshapusmp.php?kodemapel=$kopel'>Hapus</a></td>
                <td><a href='ubahmapel.php?kodemapel=$kopel'>Edit</a></td>
            </tr>
            ";
        }
        ?>
    </table>
    <?php
    }
    ?>
</body>
</html>