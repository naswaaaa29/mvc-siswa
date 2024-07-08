<?php include('crudsiswa.php'); ?>
<html>
    <head><title>Tambah Data Siswa</title>
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

        .button-menu {
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
            margin-left: 930px;
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
    <body><h2>Tambah Data Siswa</h2>
    <form method='post' action='prosestambahswa.php'>
        <table>
            <tr><td>NIS</td><td>:</td><td><input type='text' name='NIS'></td></tr>
            <tr><td>Nama</td><td>:</td><td><input type='text' name='Nama'></td></tr>
            <tr>
                <td>Jenis Kelamin</td><td>:</td><td>
                <input type='radio' name='Jkel' value='Laki'>Laki
                <input type='radio' name='Jkel' value='Perempuan'>Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan</td><td>:</td><td>
                <input type='radio' name='Jurusan' value='RPL'>RPL
                <input type='radio' name='Jurusan' value='UPW'>UPW
                <input type='radio' name='Jurusan' value='PH'>PH
                <input type='radio' name='Jurusan' value='TBG'>TBG
                <input type='radio' name='Jurusan' value='TBS'>TBS
                </td>
            </tr>
            <tr>
                <td><input type='submit' value='Tambah'>
                <button><a href="bacasiswa2.php">Back</a></button></td>
            </tr>
        </table>
    </form>
    </body>
    </head>
</html>