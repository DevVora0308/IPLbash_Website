<?php
    session_start();
    include("Datasource.php");
    $_POST = $_SESSION['item'];
    //Process the image that is uploaded by the user
    $itemId = $_POST['itemId'];
    echo "<script>console.log('Hello, $itemId');</script>";
    $itemImageName = $_POST['imageName'];
    $itemName = $_POST["ProductName"];
    $itemDescription = $_POST["description"];
    $itemQuantity = $_POST["quantity"];
    $currentUser = $_SESSION['emailId'];
    $currentTimeStamp = date("Y-m-d H:i:s");
    if($itemImageName=="")
    {
        $query= "UPDATE product SET Product_Name=?, Product_Description=?, Quantity=?, Updated_By=?, Updated_At=? WHERE Product_Id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssissi", $itemName, $itemDescription, $itemQuantity, $currentUser, $currentTimeStamp, $itemId);
    }
    else{
        $query= "UPDATE product SET Product_Name=?, Product_Description=?, Quantity=?, Image_URL=?, Updated_By=?, Updated_At=? WHERE Product_Id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssisssi", $itemName, $itemDescription, $itemQuantity, $itemImageName, $currentUser, $currentTimeStamp, $itemId);
    }
    $stmt->execute();
    if(!$stmt->execute()) echo "<script>console.log('$stmt->error');</script>";
    $stmt->close();
    //storing the data in your database
    echo "Details are Updated, you will be redirected to your account page in 3 seconds....";
    unset ($_SESSION["item"]);
    header( "Refresh:3; url=adminProductPage.php",true,303);
?>