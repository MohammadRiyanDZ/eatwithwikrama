<?php
    $server = mysqli_connect("localhost", "root", "", "kantin_db");

    function query($query) {
        global $server;
        $result = mysqli_query($server, $query);
        $kotak = [];
        while( $box = mysqli_fetch_assoc($result)) {
         $kotak[] = $box;
        }
 
        return $kotak;
    }
    function registrasi($regis) {
        global $server;

        $username = strtolower(stripslashes($regis["username"]));
        $password = mysqli_real_escape_string ($server, $regis["password"]);
        $password2 = mysqli_real_escape_string ($server, $regis["password2"]);

        mysqli_query($server, "SELECT username FROM users WHERE username = '$username'");

        if($password !== $password2) {
            echo "<script>
                alert('password tidak sesuai!');
            </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users VALUES('', '$username', '$password')";

        mysqli_query($server, $query);

        return mysqli_affected_rows($server);
    }
?>