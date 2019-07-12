<?php 
 
$localhost = "xperimental@testestes.mysql.database.azure.com";
$username = "xperimental";
$password = "Bandar05"; 
$dbname = "mahasiswa"; 
$connect = new mysqli($localhost, $username, $password, $dbname); 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
}
 
?>
