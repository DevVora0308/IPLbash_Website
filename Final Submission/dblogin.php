<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
    background: navy;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding-left: 100px;
    padding:20px;
    padding-right: 100px;
    align-content:center;
}
</style>
</head>
<body>
<?php
    include("Datasource.php");
    $email=$_POST['mail'];
    $password=$_POST['password'];

    $query1 = "SELECT mail,pass from signup WHERE mail=?";
    $stmt = $conn->prepare($query1); 
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result1 = $stmt->get_result();
    $dbPassword = "";
    while($row = $result1->fetch_assoc()){
        $dbEmail=$row['mail'];
        $dbPassword=$row['pass'];
    }

    if(password_verify($password, $dbPassword))
    {
        $query2 = "SELECT * from signup WHERE mail='$email'";
        $result2 = mysqli_query($conn,$query2);
        $count = mysqli_num_rows($result2);
        if($count>=0)
        {
            while($row=mysqli_fetch_assoc($result2))
            {
                $fname=$row['fname'];
                $lname=$row['lname'];
                $mobile=$row['mobile'];
                $address=$row['address'];
                $userType=$row['user'];
                $favteam=$row['favteam'];
            }
        }
        
        $_SESSION['fname']=$fname;
        $_SESSION['lname']=$lname;
        $_SESSION['mobile']=$mobile;
        $_SESSION['mail']=$email;
        $_SESSION['address']=$address;
        $_SESSION['favteam']=$favteam;
        $_SESSION['user']=$userType;

        if($userType=="User")
        {
            mysqli_close($conn);
            header('Location: teamPage.php');
        }
        else if($userType=="Admin")
        {
            mysqli_close($conn);
            header('Location: adminHomePage.php');
        }   
    }
    else
    {
        echo"<div><h2> INCORRECT PASSWORD </h2>";
        echo "dbPassword: ".$dbPassword."<br/>"." Password:  ".$password;
        echo"<br><br><a href='login2.php'>GO BACK</a></div>";
    }
// }
// else
// {
//     echo"<div><h2> Account doesnot exist </h2><h3> Please Sign Up to continue...!</h3>";
//     echo"<br><a href='login2.php'>GO BACK</a><a style='padding-left:30px;' href='signin.php'> Sign Up</a><br><br><br></div>";
// }

    

?>  
</body>
</html>