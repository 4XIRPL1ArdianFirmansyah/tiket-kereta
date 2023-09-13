<!DOCTYPE html>
<?php
include 'connect.php';
if(isset($_POST['logout'])){
    header('location:index.php');
}
if(isset($_POST['pesan'])){
    $awal=$_POST['awal'];
    $akhir=$_POST['akhir'];
    $order=$_POST['berangkat'];
    $kereta=$_POST['kereta'];
    $query=mysqli_query($conn,"INSERT INTO tiket VALUES('','$awal','$akhir','$order','','$kereta','')");
    header('location:proses.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>Kereta Api Indonesia
    </header>
    <form action="" method=post>
    <button name=logout>Logout</button>
    </form>
    <form action="" method=post>
        <table>
            <tr>
                <td>Form Pemesanan Tiket</td>
            </tr>
            <tr>
                <td><label for="">Kota Awal</label></td>
                <td><select required value="" name=awal>
                    <option name="blitar" id="">Blitar</option>
                    <option name="malang" id="">Malang</option>
                    <option name="surabaya" id="">Surabaya</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Kota Tujuan</label></td>
                <td><select required value="" name=akhir>
                    <option name="blitar" id="">Blitar</option>
                    <option name="malang" id="">Malang</option>
                    <option name="surabaya" id="">Surabaya</option>
                </select></td>
            </tr>
            <tr>
                <td>Tanggal keberangkatan</td>
                <td><input required type="date" name=berangkat></td>
            </tr>
            <tr>
                <td><label for="">Kereta</label></td>
                <td><select required name=kereta>
                    <option name=eksekutif>Eksekutif</option>
                    <option name=bisnis>Bisnis</option>
                    <option name=ekonomi>Ekonomi</option>
                </select></td>
            </tr>
            <tr>
                <td><button name=pesan>Order Sekarang</button></td>
            </tr>
        </table>
    </form>
</body>
</html>