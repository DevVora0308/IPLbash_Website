<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    include("Datasource.php");
    $_POST = $_SESSION['data'];

    $fname=$_POST['fName'];
    $lname=$_POST['lName'];
    $gender=$_POST['gender'];
    $dob=$_POST['birthDate'];
    $mobile=$_POST['Mobile_No'];
    $mail=$_POST['email'];
    $address=$_POST['Address'];
    $password=$_POST['password1'];
    $favteam=$_POST['favTeam'];
    $usertype="User";
    // $password = password_hash($password, PASSWORD_DEFAULT);

    setcookie('mail',$mail,time()+(2 * 365 * 24 * 60 * 60),"/");
    setcookie('fname',$fname,time()+(2 * 365 * 24 * 60 * 60),"/");
    setcookie('lname',$lname,time()+(2 * 365 * 24 * 60 * 60),"/");
    
    
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['gender']=$gender;
    $_SESSION['dob']=$dob;
    $_SESSION['mobile']=$mobile;
    $_SESSION['mail']=$mail;
    $_SESSION['address']=$address;
    $_SESSION['favteam']=$favteam;

    
    $query1 = "INSERT INTO signup (fname,lname,gender,dob,mobile,mail,address,pass,favteam,user) VALUES ('$fname','$lname','$gender','$dob','$mobile','$mail','$address','$password','$favteam','$usertype')";
    $result1 = mysqli_query($conn,$query1);

    mysqli_close($conn);
    header('Location:login.php');


?>
</body>
</html>