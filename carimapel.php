<html>
<head>
    <title>Data Mapel</title>
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
    <h2>Data Mapel</h2>
    <form method="post">
        <h3>Masukkan Kode Mapel:</h3>
        <input type="text" name="kodemapel" placeholder="Masukkan Kode Mapel">
        <input type="submit" name="submit" value="Cari">
    </form>


    <?php
    include('crudmp.php');

    if (isset($_POST['submit'])) {
        $kodemapel = $_POST['kodemapel'];
        $data = cariMapelDariKodemapel($kodemapel);

        if ($data == null) {
            echo "Silahkan Masukan Kode Mapel";
        } else {
            echo "<h2>Daftar Siswa dengan Kode Mapel $kodemapel</h2>";
            foreach ($data as $mapel) {
                $kodemapel = $mapel['kodemapel'];
                $namamapel = $mapel['namamapel'];
                $jmljam = $mapel['jmljam'];
                echo"<table border='1'>
                <tr>
                    <th>Kode Mapel</th>
                    <th>Nama Mapel</th>
                    <th>Jumlah Jam</th>
                </tr>";
                echo "<tr>
                        <td>".$mapel['kodemapel']."</td>
                        <td>".$mapel['namamapel']."</td>
                        <td>".$mapel['jmljam']."</td>
                    </tr>";
                echo "</table>";
            }
        }
    }
    ?>
</body>
</html>