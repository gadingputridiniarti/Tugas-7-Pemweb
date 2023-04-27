<?php
include("koneksidb.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //query hapus
    $sql = "SELECT namapg FROM datapegawai WHERE idpg = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $nama = $row['namapg'];

    $sql = "DELETE FROM datapegawai WHERE idpg = '$id'";
    $pegawai = mysqli_query($conn,$sql);

    //cek query
    if( $pegawai ){
        echo "<script>alert('Data Pegawai dengan nama ".$nama." berhasil dihapus!'); window.location.href='hapus_pegawai.php'</script>";
    } else {
        echo "<script>alert('Data Pegawai dengan nama ".$nama." gagal dihapus!'); window.location.href='hapus_pegawai.php'</script>";
        die("gagal menghapus...");
    }
} else {
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: hapuspegawai.php');
}
?>