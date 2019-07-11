<?php 
 
$host = "testestes.database.windows.net"; 
$username = "xperimental"; 
$password = "Bandar05"; 
$dbname = "mahasiswa"; 
$connect = new mysqli($host, $username, $password, $dbname); 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
}
 
?>
