<?php
include("koneksidb.php");

//cek id dari form data pegawai
if (!isset($_GET['id'])) {
    header('Location: ubah_pegawai.php');
}

$id = $_GET['id'];

//ambil data berdasarkan id
$query = mysqli_query($conn, "SELECT * FROM datapegawai WHERE idpg = '$id'");
$pegawai = mysqli_fetch_assoc($query);

//cek datanya
if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH DATA PEGAWAI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="form" method="post" action="proses_ubah.php">       
    <center><h1 class="form">Ubah Data Pegawai</h1></center>
    <br>
    <label>Masukan ID Pegawai :</label>
    <input class="kotakform" type="text" name="idpegawai" placeholder="KPxxx" value="<?php echo $pegawai['idpg'] ?>">
    <br>
    <br>
    <label>Nama Pegawai :</label>
    <input class="kotakform" type="text" name="namapegawai" placeholder="Masukan Nama Pegawai" value="<?php echo $pegawai['namapg'] ?>">
    <br>
    <br>
    <label>No HP :</label>
    <input class="kotakform" type="text" name="nopegawai" placeholder="08xxxxxxxxxx" value="<?php echo $pegawai['nopg'] ?>">
    <br>
    <br>
    <label>E-mail :</label>
    <input class="kotakform" type="text" name="email" placeholder="axxxxx2@gmail.com" value="<?php echo $pegawai['emailpg'] ?>">
    <br>
    <br>
    <label>Jenis Kelamin :</label>
    <select name="jkelamin" class="kotakform">
        <option><?php echo $pegawai['jkpg']?></option>
        <option>Laki-Laki</option>
        <option>Perempuan</option>
    </select>
    <br>
    <br>
    <label>Alamat :</label>
    <input class="kotakform" type="text" name="alamat" placeholder="Masukkan Alamat Pegawai" value="<?php echo $pegawai['alamatpg'] ?>">
    <br>
    <br>
    <label>Jabatan :</label>
    <input class="kotakform" type="text" name="jabatan" placeholder="Masukkan Jabatan Pegawai" value="<?php echo $pegawai['jabatan'] ?>">
    <br>
    <br>
    <button class="button" type="buttonsim" name="ubah">UBAH DATA</button>
    <br>
    <br>
    </form>
</body>
</html>
