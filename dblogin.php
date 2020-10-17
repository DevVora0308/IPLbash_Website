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

    $mail=$_POST['mail'];
    $password=$_POST['password'];

    $query1 = "SELECT mail,pass from signup WHERE mail='$mail'";
    $result1 = mysqli_query($conn,$query1);

    $count = mysqli_num_rows($result1);
    if($count>=0){
       while($row=mysqli_fetch_assoc($result1)){
            $email=$row['mail'];
            $pass=$row['pass'];
       }
    }

    if($password == $pass){
        $query2 = "SELECT * from signup WHERE mail='$mail'";
        $result2 = mysqli_query($conn,$query2);
        $count = mysqli_num_rows($result2);
        if($count>=0){
            while($row=mysqli_fetch_assoc($result2)){
                $mail=$row['mail'];
                $pass=$row['pass'];
                $fname=$row['fname'];
                $lname=$row['lname'];
                $gender=$row['gender'];
                $dob=$row['dob'];
                $mobile=$row['mobile'];
                $address=$row['address'];
                $usertype=$row['user'];
                $favteam=$row['favteam'];
 
            }
        }
        $_SESSION['fname']=$fname;
        $_SESSION['lname']=$lname;
        $_SESSION['gender']=$gender;
        $_SESSION['dob']=$dob;
        $_SESSION['mobile']=$mobile;
        $_SESSION['mail']=$mail;
        $_SESSION['address']=$address;
        $_SESSION['favteam']=$favteam;

    if($usertype == "User"){
        mysqli_close($conn);
        header('Location: HomePage.php');
    }else if($usertype=="admin"){
        mysqli_close($conn);
        header('Location: profile.php');
    }   
}
else{
    echo"INCORRECT PASSWORD";
    echo"<br><br><a href='login.php'>GO BACK</a>";
}

?>  
</body>
</html>