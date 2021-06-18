<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pembelian</title>
</head>
<body>
<style>
    table { 
        border-collapse:collapse;
        border-spacing:0;     
        font-family:Arial, sans-serif;
        font-size:16px;
        padding:300px 300px;
        margin:auto;
        }

    table th {
        font-weight:bold;
        padding:10px;
        color:#fff;
        background-color:#2A72BA;
        border-top:1px black solid;
        border-bottom:1px black solid;
        }
    table td {
        padding:10px;
        border-top:1px black solid;
        border-bottom:1px black solid;
        text-align:center; }         
        tr:nth-child(even) {
        background-color: #DFEBF8;
        }
    div {
        font-family:Arial, sans-serif;
        padding: 20px;
    }
</style>
    <?php
        require("database.php");
        $sql = "SELECT Nama, Jumlah FROM pembelian";
        $query = mysqli_query($koneksi,$sql);
        ?>
            <table border="1">
                <tr>
                    <th>Nama</th>
                    <th>Jumlah</th>
                </tr>
    <?php		
                while($data = mysqli_fetch_assoc($query)){ 
                extract($data);
    ?>
                <tr>
                    <!-- inget nama variable harus sama kek kolom di tabel, case sensitive -->
                    <td><?=$Nama?></td>
                    <td><?=$Jumlah?></td>
                </tr>
    <?php
            }
    ?>
            </table>
            <div align="center">
                [ <a align="center" href="form.html">Beli Tiket</a> ]
            </div>
</body>
</html>