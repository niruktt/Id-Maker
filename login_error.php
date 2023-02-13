<?php
session_start();
if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
    header("Location: page_access_error.php");
    die();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>loginerror</title>
</head>
<body>
    <div class="error-msg">
        <p >Wrong username and password <br>
            you are now being redirected to login page...
        </p>
        <?php
        header("refresh: 4; url=login.php");
        ?>
    </div>
    
    
</body>
</html>