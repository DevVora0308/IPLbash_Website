<?php
    $emailId = $_GET['id'];
    echo "".$emailId ;
    include("Datasource.php");
    
    $sql = "DELETE FROM signup WHERE mail=(?)";
    $stmt = $conn->prepare($sql);
    echo "".$emailId ;
    $stmt->bind_param("s", $emailId);

    if ($stmt->execute()) { 
        $message = "Record is Deleted!!";
    }else{
        $message = $conn->error;
    }
    header("Location: adminUserPage.php");
?>