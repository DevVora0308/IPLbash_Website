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
    $password=password_hash($password, PASSWORD_DEFAULT);
    $favteam=$_POST['favTeam'];
    $usertype="User";

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
      
    $query = "INSERT INTO signup (fname,lname,gender,dob,mobile,mail,address,pass,favteam,user) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn,$query);
    if ( !$stmt )
    {
        die('mysqli error: '.mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt,"ssssssssss",$fname,$lname,$gender,$dob,$mobile,$mail,$address,$password,$favteam,$usertype);
    if(mysqli_stmt_execute($stmt))
    {
        header('Location:login.php');
    }
   
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>
</body>
</html>