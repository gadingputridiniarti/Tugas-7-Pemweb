<?php
    include 'koneksidb.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA PEGAWAI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="form" method="post" action="proses_tambah.php">       
    <center><h1 class="form">Input Data Pegawai</h1></center>
    <br>
    <label>Masukan ID Pegawai :</label>
    <input class="kotakform" type="text" name="idpegawai" placeholder="KPxxx">
    <br>
    <br>
    <label>Nama Pegawai :</label>
    <input class="kotakform" type="text" name="namapegawai" placeholder="Masukan Nama Pegawai">
    <br>
    <br>
    <label>No HP :</label>
    <input class="kotakform" type="text" name="nopegawai" placeholder="08xxxxxxxxxx">
    <br>
    <br>
    <label>E-mail :</label>
    <input class="kotakform" type="text" name="email" placeholder="axxxxx2@gmail.com">
    <br>
    <br>
    <label>Jenis Kelamin :</label>
    <select name="jkelamin" class="kotakform">
        <option></option>
        <option>Laki-Laki</option>
        <option>Perempuan</option>
    </select>
    <br>
    <br>
    <label>Alamat :</label>
    <input class="kotakform" type="text" name="alamat" placeholder="Masukkan Alamat Pegawai">
    <br>
    <br>
    <label>Jabatan :</label>
    <input class="kotakform" type="text" name="jabatan" placeholder="Masukkan Jabatan Pegawai">
    <br>
    <br>
    <button class="button" type="buttonsim" name="simpan">SIMPAN DATA</button>
    <br>
    <br>
    </form>
    <a href="halaman_utama.php"><button class="buttonadd" type="">HALAMAN UTAMA</button></a>
</body>
</html>
