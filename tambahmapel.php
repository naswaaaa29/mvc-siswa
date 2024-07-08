<?php include('crudmp.php'); ?>
<html>
<head>
    <title>Tambah Data Mapel</title>
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

        form {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        table tr td {
            padding: 10px;
        }

        input[type='text'], input[type='radio'], input[type='submit'], button {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        input[type='submit'], button {
            background-color: #4F6F52;
            color: #fff;
            cursor: pointer;
        }

        input[type='submit']:hover, button:hover {
            background-color: #618264;
        }

        button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4F6F52;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }

        button a:hover {
            text-decoration: underline;
        }
    </style>
    <!-- <script>
        // Fungsi untuk memeriksa apakah input hanya terdiri dari huruf
        function validateInput(input) {
            var letters = /^[A-Za-z]+$/;
            if(input.match(letters)) {
                return true;
            } else {
                alert("Input harus terdiri dari huruf saja!");
                return false;
            }
        }
    </script> -->
</head>
<body>
    <h2>Tambah Data Mapel</h2>
    <form method='post' action='prosestambahmp.php' onsubmit="return validateInput(this.namamapel.value)">
        <table>
            <tr><td>Kode Mapel</td><td>:</td><td><input type='text' name='kodemapel'></td></tr>
            <tr><td>Nama Mapel</td><td>:</td><td><input type='text' name='namamapel'></td></tr>
            <tr><td>Jumlah Jam</td><td>:</td><td><input type='number' name='jmljam'></td></tr>            
            <tr>
                <td><input type='submit' value='Tambah'>
                <button><a href="bacamapel2.php">Back</a></button></td>
            </tr>
        </table>
    </form>
</body>
</html>