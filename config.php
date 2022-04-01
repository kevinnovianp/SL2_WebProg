<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "aplikasi_pengelolaan_keuangan";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        // echo "Koneksi Berhasil";
    } else{
        // throw new Exception("MySQL Connection Error:" .mysqli_error($connection));
    }
?>