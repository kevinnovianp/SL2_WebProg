<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 2</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div id="box">
        <p style="font-size: 30pt; margin-top: 15px;">
            Register
        </p>
        <br>
        <form method="post" action="prosesRegister.php" enctype="multipart/form-data" id="formRegister">
            <table>
                <tr>
                    <td id="td1">Nama Depan</td>
                    <td id="td2"><input type="text" name="namaDepan" id="namaDepan"></td>
                    <td id="td3"></td>
                    <td id="td1">Nama Tengah</td>
                    <td id="td2"><input type="text" name="namaTengah" id="namaTengah"></td>
                    <td id="td3"></td>
                    <td id="td1">Nama Belakang</td>
                    <td id="td2"><input type="text" name="namaBelakang" id="namaBelakang"></td>
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
                    <td id="td2"><input type="text" name="tempatLahir" id="tempatLahir"></td>
                    <td id="td3"></td>
                    <td id="td1">Tgl Lahir</td>
                    <td id="td2"><input type="date" name="tglLahir" id="tglLahir"></td>
                    <td id="td3"></td>
                    <td id="td1">NIK</td>
                    <td id="td2"><input type="text" name="nik" id="nik"></td>
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
                    <td id="td2"><input type="text" name="wargaNegara" id="wargaNegara"></td>
                    <td id="td3"></td>
                    <td id="td1">Email</td>
                    <td id="td2"><input type="text" name="email" id="email"></td>
                    <td id="td3"></td>
                    <td id="td1">No HP</td>
                    <td id="td2"><input type="text" name="noHP" id="noHP"></td>
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
                    <td id="td2"><textarea name="alamat" id="alamat"></textarea></td>
                    <td id="td3"></td>
                    <td id="td1">Kode Pos</td>
                    <td id="td2"><input type="text" name="kodePos" id="kodePos"></td>
                    <td id="td3"></td>
                    <td id="td1">Foto Profil</td>
                    <td id="td2"><input type="file" name="fotoProfil" id="fotoProfil"></td>
                </tr>
                <tr>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                </tr>
                <tr>
                    <td id="td1">Username</td>
                    <td id="td2"><input type="text" name="username" id="username"></td>
                    <td id="td3"></td>
                    <td id="td1">Password 1</td>
                    <td id="td2"><input type="password" name="password1" id="password1"></td>
                    <td id="td3"></td>
                    <td id="td1">Password 2</td>
                    <td id="td2"><input type="password" name="password2" id="password2"></td>
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
                    <input type="submit" class="btn" id="register" value="Register" name="Register" onclick="event.preventDefault(); submitForm();" style="background-color: #ADF59F;">
                </div>
            </div>
        </form>
    </div>
</body>
    <script src="./js/register.js"></script>
</html>