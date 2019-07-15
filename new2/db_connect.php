<?php 

/*
$localhost = "xperimental@testestes.mysql.database.azure.com";
$username = "xperimental";
$password = "Bandar05"; 
$dbname = "mahasiswa"; 
$connect = new mysqli($localhost, $username, $password, $dbname); 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
}
*/ 
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:testestes.database.windows.net,1433; Database = mahasiswa", "xperimental", "{Bandar05}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "xperimental@testestes", "pwd" => "{Bandar05}", "Database" => "mahasiswa", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:testestes.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>
