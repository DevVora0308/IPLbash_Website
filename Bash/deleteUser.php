<?php
    echo "<script>console.log('In delete');</script>" ;
    $emailId = $_GET['id'];
    echo "".$emailId ;
    include("Datasource.php");
    
    $sql = "DELETE FROM signup WHERE mail=(?)";
    $stmt = $conn->prepare($sql);
    echo "".$emailId ;
    echo "<script>console.log('Deleted id '.$emailId);</script>";
    $stmt->bind_param("s", $emailId);

    if ($stmt->execute()) { 
    $message = "Record is Deleted!!";
    }else{
        $message = $conn->error;
    }
    header("Location: adminUserPage.php");
?>