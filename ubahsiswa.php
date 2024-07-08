<?php
    include 'crudsiswa.php';
    
    $nis = $_GET['nis'];
    $koneksi = koneksiAkademik(); // Tambahkan koneksi ke database
    $tampilkan = "SELECT * FROM siswa WHERE NIS = '$nis'"; // Perbaiki query SQL
    $query_tampilkan = mysqli_query($koneksi, $tampilkan); // Tambahkan koneksi ke dalam pemanggilan mysqli_query()
    $hasil = mysqli_fetch_array($query_tampilkan);

    // Inisialisasi variabel untuk radio button
    $radioLaki = ($hasil['Jkel'] == 'Laki') ? 'checked' : '';
    $radioPerempuan = ($hasil['Jkel'] == 'Perempuan') ? 'checked' : '';
    $radioRPL = ($hasil['Jurusan'] == 'RPL') ? 'checked' : '';
    $radioUPW = ($hasil['Jurusan'] == 'UPW') ? 'checked' : '';
    $radioPH = ($hasil['Jurusan'] == 'PH') ? 'checked' : '';
    $radioTBG = ($hasil['Jurusan'] == 'TBG') ? 'checked' : '';
    $radioTBS = ($hasil['Jurusan'] == 'TBS') ? 'checked' : '';

    session_start();
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }

    echo "
    <h2>EDIT DATA SISWA</h2>
    <style>
        body {3
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
    <form method='post' action='proseseditswa.php' onsubmit='return validateInput(this.nama.value)'>
        <table>
            <tr>
                <td>NIS</td><td><input type='text' name='NIS' value='" . $hasil['NIS'] . "' readonly></td>
            </tr>
            <tr>
                <td>Nama</td><td><input type='text' name='Nama' value='" . $hasil['Nama'] . "'></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type='radio' name='Jkel' value='Laki' $radioLaki>Laki
                    <input type='radio' name='Jkel' value='Perempuan' $radioPerempuan>Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <input type='radio' name='Jurusan' value='RPL' $radioRPL>RPL
                    <input type='radio' name='Jurusan' value='UPW' $radioUPW>UPW
                    <input type='radio' name='Jurusan' value='PH' $radioPH>PH
                    <input type='radio' name='Jurusan' value='TBG' $radioTBG>TBG
                    <input type='radio' name='Jurusan' value='TBS' $radioTBS>TBS
                </td>
            </tr>
        </table>
        <input type='submit' name='submit' value='Update' >
    </form>
    ";
    mysqli_close($koneksi); // Tutup koneksi setelah selesai
?>