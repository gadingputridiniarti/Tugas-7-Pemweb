<?php
    include 'koneksidb.php';
    if (isset($_POST['simpan'])) {
        $idpg = $_POST['idpegawai'];
        $namapg = $_POST['namapegawai'];
        $nopg = $_POST['nopegawai'];
        $emailpg = $_POST['email'];
        $jkpg = $_POST['jkelamin'];
        $alamatpg = $_POST['alamat'];
        $jabatan = $_POST['jabatan'];

        // memeriksa apakah semua data telah diisi
        if (empty($idpg) or empty($namapg) or empty($nopg) or empty($emailpg) or empty($jkpg) or empty($alamatpg) or empty($jabatan)) {
            echo "<script>alert('Harap isi semua data terlebih dahulu!'); window.location.href='tambah_pegawai.php'</script>";
        } 
        else {
            // Menyimpan ke database
            $pegawai = mysqli_query($conn, "INSERT INTO datapegawai VALUES ('$idpg', '$namapg', '$nopg', '$emailpg', '$jkpg', '$alamatpg', '$jabatan')");
            
            if ($pegawai) {
                // pesan jika data tersimpan
                echo "<script>alert('Data Pegawai Berhasil Ditambahkan!'); window.location.href='halaman_utama.php'</script>";
            } 
            else {
                // pesan jika data gagal disimpan
                echo "<script>alert('Data Pegawai Gagal Ditambahkan!!'); window.location.href='tambah_pegawai.php'</script>";
            }
        }
    } 
    else {
      // jika coba akses langsung halaman ini akan diredirect ke halaman utama
      header('Location: halaman_utama.php');
    }
?>