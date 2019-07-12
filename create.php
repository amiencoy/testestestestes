<!DOCTYPE html>
<html>
<head>
    <title>tambah data</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>tambah data</legend>
 
    <form action="new2/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>NIM</th>
                <td><input type="text" name="NIM" placeholder="NIM" /></td>
            </tr>     
            <tr>
                <th>nama</th>
                <td><input type="text" name="nama" placeholder="nama" /></td>
            </tr>
            <tr>
                <th>prodi</th>
                <td><input type="text" name="prodi" placeholder="prodi" /></td>
            </tr>
            <tr>
                <td><button type="submit">simpan data</button></td>
                <td><a href="index.php"><button type="button">kembali</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>