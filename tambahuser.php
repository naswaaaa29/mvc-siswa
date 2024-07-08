<?php
include('cruduser.php'); 
?>
<html>
    <head>
        <title>Tambah Data User</title>
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
    <body><h2>Tambah Data User</h2></body>
    <form method='post' action='prosestambahuser.php'>
        <table>
            <tr><td>Username</td><td><input type='text' name='Username'></td></tr>
            <tr><td>Password</td><td><input type='text' name='Password'></td></tr>
            <tr><td>Nama</td><td><input type='text' name='Nama'></td></tr>
            <tr>
                <td><input type='submit' value='Tambah'> </td>
                <td></td>
            </tr>
</table>
</form>
<html>