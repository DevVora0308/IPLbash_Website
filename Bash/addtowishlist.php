<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPLBash- Add To WishList</title>
</head>
    <body>
        <?php
            include("Datasource.php");
            if($_SERVER['REQUEST_METHOD'] === 'GET'){
                $id = $_GET['id'];
                $itemId = $id;
            }
            $mail = $_SESSION['mail'];
            function itemExist($id){
                include 'Datasource.php';
                $query1 = "SELECT * from wishlist WHERE Product_Id=?";
                $stmt = $conn->prepare($query1); 
                $stmt->bind_param("s", $id);
                $stmt->execute();
                $result1 = $stmt->get_result();
                $totalProduct = mysqli_num_rows($result1);
                if($totalProduct > 0)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
            if(!itemExist($id))
            {
                $query1 = "SELECT * from product WHERE Product_Id=?";
                $stmt = $conn->prepare($query1); 
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result1 = $stmt->get_result();
                while($row = $result1->fetch_assoc()){
                    $itemId = $row['Product_Id'];
                    $itemName = $row['Product_Name'];
                    $itemCategory = $row['Category_Id'];
                    $itemImageURL = $row['Image_URL'];
                    $itemDescription = $row['Product_Description'];
                    $quantityDB = $row['Quantity'];
                }
                $quantity = 1;
                $query= "INSERT INTO wishlist (mail, Product_Name, Category_Id, Image_Url, Product_Description, Product_Id) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssissi",$mail,$itemName,$itemCategory,$itemImageURL,$itemDescription,$itemId);
                if($stmt->execute()){
                    $stmt->close();
                    header("location:javascript://history.go(-1)");
                }
                else{
                    echo $stmt->error;
                    $stmt->close();
                    echo "Error";
                }
            }
            else{
                echo "<script>alert('Product Already in WishList !!')</script>";
                // header("refresh:1;url:javascript://history.go(-1)");
                echo "<script>window.history.back();</script>";
                exit;
            }
        ?>
    </body>
</html>