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
    $favteam=$_POST['favTeam'];


    $query= "UPDATE signup SET fname=?,lname=?,gender=?,dob=?,mobile=?,address=?,favteam=? WHERE mail=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssss", $fname,$lname,$gender,$dob,$mobile,$address,$favteam,$mail);
    $stmt->execute();
    $stmt->close();
    echo "<script>console.log('Profile Updated');</script>";
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['gender']=$gender;
    $_SESSION['dob']=$dob;
    $_SESSION['mobile']=$mobile;
    $_SESSION['mail']=$mail;
    $_SESSION['address']=$address;
    $_SESSION['favteam']=$favteam;
    mysqli_close($conn);
    echo "<script>alert('Profile of $mail is Updated!! \\n Refresh To view the Changes');</script>";
    header( "refresh:1;url=profile.php");

?>
</body>
</html>