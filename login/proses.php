<?php
include 'connect.php';
$i=0;
$query=mysqli_query($conn,'SELECT * FROM tiket where username');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Nomor: </th>
            <th>Kota Awal: </th>
            <th>Kota Akhir: </th>
            <th>Jadwal Keberangkatan: </th>
            <th>Estimasi Sampai Tujuan: </th>
            <th>Kelas Kereta: </th>
            <th>Kode Tiket: </th>
        </tr>
        <?php while ($a=mysqli_fetch_assoc($query)): ?>
            <tr>
                <td><?=++$i?></td>
                <td><?=$a['awal']?></td>
                <td><?=$a['akhir']?></td>
                <td><?=$a['pemesanan']?></td>
                <td><?=$a['sampai']?></td>
                <td><?=$a['kereta']?></td>
                <td><?=$a['kode']?></td>
                
            </tr>
        
        <?php endwhile?>
    </table>
</body>
</html>