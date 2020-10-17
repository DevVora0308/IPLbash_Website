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
    setcookie('mail',"",time()+(2 * 365 * 24 * 60 * 60),"/");
    setcookie('fname',"",time()+(2 * 365 * 24 * 60 * 60),"/");
    setcookie('lname',"",time()+(2 * 365 * 24 * 60 * 60),"/");
    header('Location: login.php')

?>
<br><br>
</body>
</html>
