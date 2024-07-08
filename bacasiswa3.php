<html>

<h2>DAFTAR SISWA</h2>
<style>
    
</style>
<form method="post">
    <h3>Pilih Jurusan:</h3>
    <input type="radio" name="Jurusan" value="RPL">RPL</input>
    <input type="radio" name="Jurusan" value="UPW">UPW</input>
    <input type="radio" name="Jurusan" value="PH">PH</input>
    <input type="radio" name="Jurusan" value="TBG">TBG</input>
    <input type="radio" name="Jurusan" value="TBS">TBS</input>
    <input type="submit" name="submit" value="Show Data"></input>
</form>

<?php
    include('crudsiswa.php');

    if(isset($_POST['submit'])) {
        if(isset($_POST['Jurusan'])) {
            $jurusan = $_POST['Jurusan'];
            $data = bacaSiswaPerJurusan($jurusan);

            if($data) {
                echo "<h2 class='center'><br>DAFTAR SISWA JURUSAN $jurusan</h2>";
                echo "<table border=1>";
                echo "<tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                      </tr>";
                foreach ($data as $siswa) {
                    echo "<tr>
                            <td>".$siswa['NIS']."</td>
                            <td>".$siswa['Nama']."</td>
                            <td>".$siswa['Jkel']."</td>
                            <td>".$siswa['Jurusan']."</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='center'>Tidak ada siswa terdaftar untuk jurusan $jurusan</p>";
            }
        } else {
            echo "<p class='center'>Silakan pilih jurusan</p>";
        }
    }
?>
</html>