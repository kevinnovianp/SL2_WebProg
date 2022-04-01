<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 2</title>
    <link rel="stylesheet" href="./css/prosesRegister.css">
</head>
<body>
</body>
</html>

<?php
    include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id = NULL;
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
        $fotoProfil = addslashes(file_get_contents($_FILES['fotoProfil']['tmp_name']));
        $username = $_POST['username'];
        $password = $_POST['password1'];

        // $_SESSION["namaDepan"] = $namaDepan;
        // $_SESSION["namaTengah"] = $namaTengah;
        // $_SESSION["namaBelakang"] = $namaBelakang;
        // $_SESSION["tempatLahir"] = $tempatLahir;
        // $_SESSION["tglLahir"] = $tglLahir;
        // $_SESSION["nik"] = $nik;
        // $_SESSION["wargaNegara"] = $wargaNegara;
        // $_SESSION["email"] = $email;
        // $_SESSION["noHP"] = $noHP;
        // $_SESSION["alamat"] = $alamat;
        // $_SESSION["kodePos"] = $kodePos;
        // $_SESSION["username"] = $username;
        // $_SESSION["password"] = $password;

        // $namaFile = $_FILES['fotoProfil']['name'];
        // $tmpFile = $_FILES['fotoProfil']['tmp_name'];
        // $folderName = "photos/";
        // $files = move_uploaded_file($tmpFile, $folderName.$namaFile);
        // $fotoProfil = "./".$folderName."".$namaFile;
        // $_SESSION["fotoProfil"] = $fotoProfil;

        $str_q = "select * from user where username like '$username'";
        $q = mysqli_query($connection, $str_q);

        if($q && mysqli_num_rows($q)!=0){
            echo "
                    <div id='box'>
                        <p id='title'>Register Gagal!</p>
                        <p id='note'>
                            Username sudah dipakai!<br>
                            Silahkan ganti username!
                        </p>
                        <a href='./register.php'>
                            <div id='ok'>
                                OK
                            </div>
                        </a>
                    </div>
                ";
        } else {
            $str_query = "insert into user values('"
                .$id."', '"
                .$namaDepan."', '"
                .$namaTengah."', '"
                .$namaBelakang."', '"
                .$tempatLahir."', '"
                .$tglLahir."', '"
                .$nik."', '"
                .$wargaNegara."', '"
                .$email."', '"
                .$noHP."', '"
                .$alamat."', '"
                .$kodePos."', '"
                .$fotoProfil."', '"
                .$username."', '"
                .$password.
            "')";
    
            $query = mysqli_query($connection, $str_query);
            if($query){
                echo "
                    <div id='box'>
                        <p>Register Berhasil!<br></p>
                        <a href='./welcome.php'>
                            <div id='ok'>
                                OK
                            </div>
                        </a>
                    </div>
                ";
            } else{
                echo "Error".mysqli_error($connection);
            }

        }


    }
?>