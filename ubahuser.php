<?php
include('cruduser.php');
$Username = $_GET['Username'];
    $koneksi = koneksiAkademik(); // Tambahkan koneksi ke database
    $tampilkan = "SELECT * from user where Username = '$Username'"; // Perbaiki query SQL
    $query_tampilkan = mysqli_query($koneksi, $tampilkan); // Tambahkan koneksi ke dalam pemanggilan mysqli_query()
    $hasil = mysqli_fetch_array($query_tampilkan);

    session_start();
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }

echo"
<head>
        <title>Data Mata Pelajaran</title>
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
</head>
<form method='post' action='prosesubahuser.php' onsubmit='return validateInput(this.Password.value)'>
<table>
    <tr>
        <td>Username</td><td><input type='text' name='Username' value='$hasil[Username]' readonly></td>
    </tr>
    <tr>
        <td>Password</td><td><input type='text' name='Password' value='$hasil[Password]'></td>
    </tr>

    <tr>
        <td>Nama</td><td><input type='text' name='Nama' value='$hasil[Nama]'></td>
    </tr>
</table>
<input type='submit' name='submit' value='Update' >
<button><a href='bacauser.php'>Back</a></button>

</form>";
mysqli_close($koneksi);
?>
