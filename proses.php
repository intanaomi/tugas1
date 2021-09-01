<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="sty.css">

    <title>LOGIN</title>
</head>
<body>
    <center>
    <h1>You have successfully login</h1>
    <a href="cek-logout.php">Logout</a>
</center>
</body>
</html>