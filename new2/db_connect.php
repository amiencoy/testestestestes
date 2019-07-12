<?php 
 
$localhost = "xperimental@testestes.mysql.database.azure.com";
$password = "Bandar05"; 
$dbname = "mahasiswa"; 
$connect = new mysqli($localhost, $password, $dbname); 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
}
 
?>
