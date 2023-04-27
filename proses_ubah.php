<?php
include("koneksidb.php");

//proses untuk update data
if (isset($_POST['ubah'])) {
    $idpg = $_POST['idpegawai'];
    $namapg = $_POST['namapegawai'];
    $nopg = $_POST['nopegawai'];
    $emailpg = $_POST['email'];
    $jkpg = $_POST['jkelamin'];
    $alamatpg = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];

    //query insert
    $sql = "UPDATE datapegawai SET idpg='$idpg', namapg='$namapg', nopg='$nopg', emailpg='$emailpg', jkpg='$jkpg', alamatpg='$alamatpg', jabatan='$jabatan' WHERE idpg='$idpg'";
    $pegawai = mysqli_query($conn, $sql);

    //cek query
    if( $pegawai ) {
        echo "<script>alert('Data Pegawai Berhasil Di Ubah!'); window.location.href='ubah_pegawai.php'</script>";
    } else {
        echo "<script>alert('Data Pegawai Gagal Di Ubah!!'); window.location.href='ubah_pegawai.php'</script>";
       die("Gagal Menyimpan Data");
    }
} else {
    header('Location: halaman_utama.php');
}
?>
