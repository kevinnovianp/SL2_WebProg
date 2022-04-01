<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 2</title>
    <link rel="stylesheet" href="./css/prosesLogin.css">
</head>
<body>
    
</body>
</html>

<?php
    include("config.php");
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $str_query = "select id from user where username like '$username' and password like '$password'";
    $query = mysqli_query($connection, $str_query);

    if($query){
        if(mysqli_num_rows($query)==1){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['id'] = $row['id'];
            echo "
                <div id='box'>
                    <p>Login Berhasil!<br></p>
                    <a href='./home.php'>
                        <div id='ok'>
                            OK
                        </div>
                    </a>
                </div>
            ";
        } else {
            echo "
            <div id='box'>
                <p id='title'>Login Gagal!</p>
                <p id='note'>
                    Jika belum registrasi, silahkan melakukan register terlebih dahulu!<br>
                    Jika sudah registrasi, silahkan cek username dan password kembali!
                </p>
                <a href='./login.php'>
                    <div id='ok'>
                        OK
                    </div>
                </a>
            </div>
            ";
        }
    } else{
        echo "Error".mysqli_error($connection);
    }

?>