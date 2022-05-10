<?php
$servername = "localhost";//mendefinisikan variable servername
$username = "root";//mendefinisikan variable username
$password = "";//mendefinisikan variable password
$dbname = "db_pegawai";//mendefinisikan variable dbname

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
//periksa koneksi
if (!$conn) { //apabila koneksi tidak tersambung, maka
    die("Connection failed: ".mysqli_connection_error()); //memberikan output error koneksi
}
//qeury CREATE TABLE untuk membuat tabel baru yaitu tabel pegawai
//langsung diisi dengan pembuatan field dengan mengidenifikasikan nama, tipe data, panjang data, dan penetuan primary key
$sql = "CREATE TABLE pegawai ( 
        ID_PEGAWAI INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NIK VARCHAR(30) NOT NULL,
        NAMAD VARCHAR(50) NOT NULL,
        NAMAB VARCHAR(50) NOT NULL
        )";
if (mysqli_query($conn, $sql)) { //apabila database berhasil connect dan query berhasil dijalanlan maka
    echo "Table created successfully"; //menghasilkan output berhasil
}else {//apabila tidak gagal
    echo "Error creating table: ".mysqli_error($conn); //memberikan output error creating table
}
mysqli_close($conn);//menutup koneksi
?>