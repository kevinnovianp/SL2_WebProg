<?php
    include("config.php");
    session_start();

    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $str_query = "select * from user where id='".$id."'";
        $query = mysqli_query($connection, $str_query);
        $row = mysqli_fetch_assoc($query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 2</title>
    <link rel="stylesheet" href="./css/edit.css">
</head>
<body>
    <div id='box'>
        <div id='box1'>
            <div id='title'>
                Aplikasi Pengelolaan Keuangan
            </div>
            <a href='./home.php'>
                <div id='home'>Home</div>
            </a>
            <a href='./profile.php'>
                <div id='profile'>Profile</div>
            </a>
            <a href='./logout.php'>
                <div id='logout'>Logout</div>
            </a>  
        </div>
        <div id='box2'>
            <p>
                <b>Edit Profil</b>
            </p>
            <form method="post" action="prosesEdit.php" enctype="multipart/form-data" id="formEdit">
                <table>
                    <tr>
                        <td id="td1">Nama Depan</td>
                        <td id="td2"><input type="text" name="namaDepan" id="namaDepan" value="<?php echo $row['namaDepan']; ?>"></td>
                        <td id="td3"></td>
                        <td id="td1">Nama Tengah</td>
                        <td id="td2"><input type="text" name="namaTengah" id="namaTengah" value="<?php echo $row['namaTengah']; ?>"></td>
                        <td id="td3"></td>
                        <td id="td1">Nama Belakang</td>
                        <td id="td2"><input type="text" name="namaBelakang" id="namaBelakang" value="<?php echo $row['namaBelakang']; ?>"></td>
                    </tr>
                    <tr>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    </tr>
                    <tr>
                        <td id="td1">Tempat Lahir</td>
                        <td id="td2"><input type="text" name="tempatLahir" id="tempatLahir" value="<?php echo $row['tempatLahir']; ?>"></td>
                        <td id="td3"></td>
                        <td id="td1">Tgl Lahir</td>
                        <td id="td2"><input type="date" name="tglLahir" id="tglLahir" value="<?php echo $row['tglLahir']; ?>"></td>
                        <td id="td3"></td>
                        <td id="td1">NIK</td>
                        <td id="td2"><input type="text" name="nik" id="nik" value="<?php echo $row['nik']; ?>"></td>
                    </tr>
                    <tr>
                        
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    </tr>
                    <tr>
                        <td id="td1">Warga Negara</td>
                        <td id="td2"><input type="text" name="wargaNegara" id="wargaNegara" value="<?php echo $row['wargaNegara']; ?>"></td>
                        <td id="td3"></td>
                        <td id="td1">Email</td>
                        <td id="td2"><input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"></td>
                        <td id="td3"></td>
                        <td id="td1">No HP</td>
                        <td id="td2"><input type="text" name="noHP" id="noHP" value="<?php echo $row['noHP']; ?>"></td>
                    </tr>
                    <tr>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    </tr>
                    <tr>
                        <td id="td1">Alamat</td>
                        <td id="td2"><textarea name="alamat" id="alamat"><?php echo $row['alamat']; ?></textarea></td>
                        <td id="td3"></td>
                        <td id="td1">Kode Pos</td>
                        <td id="td2"><input type="text" name="kodePos" id="kodePos" value="<?php echo $row['kodePos']; ?>"></td>
                        <td id="td3"></td>
                        <td id="td1">Foto Profil</td>
                        <td id="td2"><input type="file" name="fotoProfil" id="fotoProfil"></td>
                    </tr>
                    <tr>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg">Leave blank if the photo unchanged!</div></td>
                    </tr>
                    <tr>
                        <td id="td1">Username</td>
                        <td id="td2"><input type="text" name="username" id="username" value="<?php echo $row['username']; ?>" readonly></td>
                        <td id="td3"></td>
                        <td id="td1">Password 1</td>
                        <td id="td2"><input type="password" name="password1" id="password1" value="<?php echo $row['password']; ?>"></td>
                        <td id="td3"></td>
                        <td id="td1">Password 2</td>
                        <td id="td2"><input type="password" name="password2" id="password2" value="<?php echo $row['password']; ?>"></td>
                    </tr>
                    <tr>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                        <td id="id3"></td>
                        <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    </tr>
                </table>
                <div id="bottom">
                    <div id="buttons">
                        <input type="button" class="btn" value="Kembali" onclick="back()" style="background-color: #FDD7AC;">
                        <input type="submit" class="btn" id="edit" value="Edit" name="Edit" onclick="event.preventDefault(); submitForm();" style="background-color: #ADF59F;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
    <script src="./js/edit.js"></script>
</html>