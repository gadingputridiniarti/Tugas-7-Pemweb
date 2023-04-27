<?php
//deklarasi server, ussername, pw dan database
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "buku_tamu";
//membuat tabel
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if(!$conn){
    die("connection failed : " . mysqli_connect_error()); //msg eror

}
$querysql = "CREATE TABLE buku_tamu(
    id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi text
    )";
if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn)
?>