<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion Variables</title>
</head>

<body>
<?php
    session_start();
    $_SESSION["browser"] = $_SERVER["HTTP_USER_AGENT"];
    $_SESSION["ip"] = $_SERVER["REMOTE_ADDR"];
    $_SESSION["time"] = time();
    echo "<pre>", print_r($_SESSION),  "</pre>";

    ?>

</body>

</html>