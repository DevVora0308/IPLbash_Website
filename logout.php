<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>IPL Registration Form</title>
<link rel="stylesheet" type="text/css" href="signUp.css">
</head>
<body>
<?php

    session_unset();
    session_destroy();
    header('Location: login.php')

?>
<br><br>
</body>
</html>
