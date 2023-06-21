<?php
require 'setup.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($server, "SELECT * FROM users WHERE username ='$username'");
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            margin-top: 2cm;
            background: rgb(147,191,207);
            background: linear-gradient(90deg, rgba(147,191,207,1) 0%, rgba(189,205,214,1) 50%, rgba(238,233,218,1) 100%);
        }
        h1{
            color: black;
        }
        input{
        width: 55%;
        padding: 10px 12px;
        margin: 5px 0;
        box-sizing: border-box;
        }
        label{
            color: black;
        }
        a{
            color: black;
        }
        button{
            width: 320px;
        }
        .notif{
            display: flex;
            justify-content: center;
            color: red;
        }
        .container{
            padding: 10px;
            box-shadow: 2px 5px 5px 5px #000000;
            width: 15cm;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Silahkan login!</h1>
    <?php
    if (isset($error)) : ?>
    <p class="notif"> Username / Password salah!</p>
    <?php endif; ?>
    <center>
    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" class="btn btn-dark" name="login" value="Log in"><br><hr>
        <p>Belum punya akun? <a href="register.php">Sign Up</a></p>
    </form>
    </center>
    </div>
</body>
</html>