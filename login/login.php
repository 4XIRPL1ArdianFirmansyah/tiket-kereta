<?php
$conn=mysqli_connect('localhost','root','','user');

$user=$_POST['username'];
$pass=$_POST['password'];
$query=mysqli_query($conn,"SELECT * FROM level where username='$user' and password='$pass'");
$cek=mysqli_num_rows($query);
echo $cek;
if($cek>0){
    $data=mysqli_fetch_assoc($query);
    if($data['lv']=='admin'){
        header("location:admin.php");
    }else if($data['lv']=='user'){
        header("location:user.php");
    }
}else{
    header('location:index.php');
}
if(isset($_POST['register'])){
    header('location:register.php');
}
?>