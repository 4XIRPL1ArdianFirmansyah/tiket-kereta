<?php
$conn = mysqli_connect("localhost","root","","kereta_api");

if (isset($_POST['submit'])) {
    $usrName = $_POST['Username'];
    $pass = $_POST['Password'];

    $query = "select * from hal_login";

    $result = mysqli_query($conn, $query);

    foreach ($result as $user) {
        if($usrName == $user) {
            header("Location: utama.html");
            exit();
        }else {
            echo "Error: " . mysqli_error($conn);
        }

    }

    if ($result) {
        header("Location: utama.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tiket Kereta Api</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
   
    <div class="login-container">
        <h1>Login Tiket Kereta Api</h1>
        <form action=""<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="input-container">
                <label for="username">Username:</label>
                <input type="text" id="username" name="Username" required>
            </div>
            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="Password" required>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>

</body>
</html>
