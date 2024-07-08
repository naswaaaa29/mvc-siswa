<html>
<head>
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #AFD198;
        }

        h2, h3 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type='text'], input[type='submit'] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        input[type='submit'] {
            background-color: #4F6F52;
            color: #fff;
            cursor: pointer;
        }

        input[type='submit']:hover {
            background-color: #618264;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Siswa</h2>
    <form method="post">
        <h3>Masukkan NIS:</h3>
        <input type="text" name="NIS" placeholder="Masukkan NIS">
        <input type="submit" name="submit" value="Cari">
    </form>

    <?php
    include('crudsiswa.php');

    if (isset($_POST['submit'])) {
        $nis = $_POST['NIS'];
        $data = cariSiswaDariNis($nis);

        if ($data == null) {
            echo "Silahkan Masukan NIS";
        } else {
            echo "<h2>Daftar Siswa dengan Nis $nis</h2>";
            foreach ($data as $siswa) {
                $nis = $siswa['NIS'];
                $nama = $siswa['Nama'];
                $jkel = $siswa['Jkel'];
                $jurusan = $siswa['Jurusan'];
                echo"<table border='1'>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                </tr>";
                echo "<tr>
                        <td>".$siswa['NIS']."</td>
                        <td>".$siswa['Nama']."</td>
                        <td>".$siswa['Jkel']."</td>
                        <td>".$siswa['Jurusan']."</td>
                    </tr>";
                echo "</table>";
            }
        }
    }
    ?>
</body>
</html>