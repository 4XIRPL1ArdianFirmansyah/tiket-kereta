<!DOCTYPE html>
<?php
include 'connect.php';

if(isset($_POST['daftar'])){
    $user=$_POST['newuser'];
    $pass=$_POST['newpass'];
    $query=mysqli_query($conn,"INSERT INTO level values ('','$user','$pass','user')" );
    header('location:index.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <form action="" method=post>
        <table>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="text" name="newuser"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="password" name="newpass"></td>
            </tr>
            <tr>
                <td><button name=daftar>Konfirmasi Pendaftaran</button></td>
            </tr>
        </table>
    </form>
</body>
</html>