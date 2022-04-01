<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 2</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div id="box">
        <p style="font-size: 30pt; margin-top: 15px;">
            Login
        </p>
        <br>
        <div id="box2">
            <form action="./prosesLogin.php" method="post" id="formLogin">
                <table>
                    <tr>
                        <td id="td1">Username</td>
                        <td id="td2"><input type="text" name="username" id="username"></td>
                    </tr>
                    <tr>
                        <td id="td1">Password</td>
                        <td id="td2"><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="buttons">
                            <input type="submit" id="loginBtn" value="Login" name="Login" onclick="event.preventDefault(); submitForm();" style="background-color: #ADF59F;">
                            <input type="button" id="backBtn" value="Kembali" name="Kembali" onclick="back()" style="background-color: #FDD7AC;">
                        </td>
                    </tr>
                </table>
            </form>
            <div id="errorMsg"></div>
        </div>
    </div>
</body>
    <script src="./js/login.js"></script>
</html>