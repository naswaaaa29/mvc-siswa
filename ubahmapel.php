<?php
include('crudmp.php');

if (isset($_POST['edit'])){
    $kopel=$_POST['kodemapel'];
    $napel=$_POST['namamapel'];
    $jmljam=$_POST['jmljam'];

    ubahMapel($kopel, $napel, $jmljam);
    header("Location: bacamapel2.php");
}

$kopel = $_GET['kodemapel'];
$sql = "SELECT * FROM mapel WHERE kodemapel='$kopel'";
$mapel = bacaMapel($sql)[0];

?>

<h2>Edit Mapel</h2>
<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }
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
<form method="post">
    <label>Kode Mapel:</label>
    <input type="text" name="kodemapel" value="<?php echo $mapel['kodemapel']; ?>" readonly><br>
    <label>Nama mapel:</label>
    <input type="text" name="namamapel" value="<?php echo $mapel['namamapel']; ?>"><br>
    <label>jumlah jam:</label>
    <input type="text" name="jmljam" value="<?php echo $mapel['jmljam']; ?>"><br>

    <input type="submit" name="edit" value="Submit">
    <button><a href="bacamapel2.php">Back</a></button>
</form>