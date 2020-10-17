<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    include("Datasource.php");
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $mobile=$_POST['mobile'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    $password=$_POST['password1'];
    $favteam=$_POST['favteam'];
    $usertype="User";

    setcookie('mail',$mail,time()+(2 * 365 * 24 * 60 * 60),"/");
    setcookie('fname',$fname,time()+(2 * 365 * 24 * 60 * 60),"/");
    setcookie('lname',$lname,time()+(2 * 365 * 24 * 60 * 60),"/");
        
    

    $query1 = "INSERT INTO signup (fname,lname,gender,dob,mobile,mail,address,pass,favteam,user) VALUES ('$fname','$lname','$gender','$dob','$mobile','$mail','$address','$password','$favteam','$usertype')";
    $result1 = mysqli_query($conn,$query1);

    	
    mysqli_close($conn);
    header('Location:login.php');


?>
</body>
</html>