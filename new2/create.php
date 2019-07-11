<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $NIM = $_POST['NIM'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $sql = "INSERT INTO mahasiswa (NIM, nama, prodi) VALUES ('$NIM', '$nama', '$prodi')";
    if($connect->query($sql) === TRUE) {
        echo "<p>data berhasil ditambahkan</p>";
        echo "<a href='../create.php'><button type='button'>kembali</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>