<?php 
require_once 'new2/db_connect.php';
$query = "SELECT *FROM mahasiswa";
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>data mahasiswa</title>
 
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
 
<div class="manageMember">
    <a href="create.php"><button type="button">tambah data</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>NIM</th>
                <th>nama</th>
                <th>prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM mahasiswa";
            $result = $connect->query($sql);
 
            
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>".$row['NIM']." </td>
                        <td>".$row['nama']."</td>
                        <td>".$row['prodi']."</td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>