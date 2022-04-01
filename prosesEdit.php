<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 2</title>
    <link rel="stylesheet" href="./css/prosesEdit.css">
</head>
<body>
</body>
</html>

<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id = $_SESSION['id'];
        $namaDepan = $_POST['namaDepan'];
        $namaTengah = $_POST['namaTengah'];
        $namaBelakang = $_POST['namaBelakang'];
        $tempatLahir = $_POST['tempatLahir'];
        $tglLahir = $_POST['tglLahir'];
        $nik = $_POST['nik'];
        $wargaNegara = $_POST['wargaNegara'];
        $email = $_POST['email'];
        $noHP = $_POST['noHP'];
        $alamat = $_POST['alamat'];
        $kodePos = $_POST['kodePos'];
        $password = $_POST['password1'];

        if($_FILES['fotoProfil']['tmp_name']){
            $fotoProfil = addslashes(file_get_contents($_FILES['fotoProfil']['tmp_name']));
            $str_query = "update user set 
                namaDepan = '".$namaDepan."', 
                namaTengah = '".$namaTengah."', 
                namaBelakang = '".$namaBelakang."', 
                tempatLahir = '".$tempatLahir."', 
                tglLahir = '".$tglLahir."', 
                nik = '".$nik."', 
                wargaNegara = '".$wargaNegara."', 
                email = '".$email."', 
                noHP = '".$noHP."', 
                alamat = '".$alamat."', 
                kodePos = '".$kodePos."', 
                fotoProfil = '".$fotoProfil."', 
                password = '".$password.
            "' where id = '".$id."'";
        } else{
            $str_query = "update user set 
                namaDepan = '".$namaDepan."', 
                namaTengah = '".$namaTengah."', 
                namaBelakang = '".$namaBelakang."', 
                tempatLahir = '".$tempatLahir."', 
                tglLahir = '".$tglLahir."', 
                nik = '".$nik."', 
                wargaNegara = '".$wargaNegara."', 
                email = '".$email."', 
                noHP = '".$noHP."', 
                alamat = '".$alamat."', 
                kodePos = '".$kodePos."', 
                password = '".$password.
            "' where id = '".$id."'";
        }

        $query = mysqli_query($connection, $str_query);
            if($query){
                echo "
                    <div id='box'>
                        <div id='box1'>
                            <div id='title'>
                                Aplikasi Pengelolaan Keuangan
                            </div>
                            <a href='./home.php' class='link'>
                                <div id='home'>Home</div>
                            </a>
                            <a href='./profile.php' class='link'>
                                <div id='profile'>Profile</div>
                            </a>
                            <a href='./logout.php' class='link'>
                                <div id='logout'>Logout</div>
                            </a>  
                        </div>
                        <div id='box2'>
                            <p>Edit Berhasil!<br></p>
                            <a href='./profile.php'>
                                <div id='ok'>
                                    OK
                                </div>
                            </a>
                        </div>
                    </div>
                ";
            } else{
                echo "Error".mysqli_error($connection);
            }
    }
?>