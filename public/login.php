<?php
if (empty($_SESSION['username']) AND !empty($_COOKIE['username'])) {
    header('Refresh: 2; url=loginportal.php');
    echo 'You are being redirected to the login portal.';
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



</body>
</html>