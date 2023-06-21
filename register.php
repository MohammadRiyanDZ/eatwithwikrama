<?php
require 'setup.php';

if(isset($_POST["register"])) {
    if( registrasi($_POST) > 0) {
        echo "<script>
            alert('user berhasil ditambahkan');
        </script>";
    }else {
        mysqli_error($server);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    

        <form action="" method="post">
        <img src="img/nguli.png" alt="" style="width: 550px; float: right; margin-top: -50px; margin-right: 140px;" >
            <div class="card" style="width: 18rem; margin-top: 20px; box-shadow: 2px 5px 5px 5px #000000; border-radius: 25px; margin-left: 340px; margin-top: 149px;">
                <div class="card-body">
                    <h4 class="card-title">Silahkan Registrasi</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" type="none">
                        <label for="username">Username</label><br>
                        <input type="text" name="username" id="" autocomplete="off" required>
                    </li>
                    <li class="list-group-item" type="none">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="" autocomplete="off" required>
                    </li>
                    <li class="list-group-item" type="none">
                        <label for="password2">Confirm Password</label><br>
                        <input type="password" name="password2" id="" autocomplete="off" required>
                    </li>
                </ul>
                <div class="card-body">
                    <p>sudah punya akun? <a href="login.php" class="card-link">login</a></p>
                </div>
                    <button class="btn btn-info"type="submit" name="register" style="border-radius: 20px; width: 110px; margin-bottom: 9px; margin-left: 10px;">Register</button>
            </div>
        </form>

</body>
</html>