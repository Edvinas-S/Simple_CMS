<?php require(ROOT .'includes/config.php');
     require(ROOT .'includes/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CMS (Login)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="logBody">
    <div class="login">
        <form action="./index.php" method="post">
            <label>Username</label><br><input type="text" name="user" required/><br>
            <label>Password</label><br><input type="password" name="pass" required/><br>
            <button type="submit" name="login" >Login</button>
        </form>
    </div>
</body>
</html>