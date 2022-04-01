<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 2</title>
    <link rel="stylesheet" href="./css/logout.css">
</head>
<body>
</body>
</html>

<?php
    session_start();
    session_destroy();
    echo "
        <div id='box'>
            <p>Logout Berhasil!<br></p>
            <a href='./welcome.php'>
                <div id='ok'>
                    OK
                </div>
            </a>
        </div>
    ";
?>