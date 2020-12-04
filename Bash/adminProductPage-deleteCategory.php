<?php
    session_start();
    include("Datasource.php");
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $flagCategory = false;
        $id = $_GET['id'];
        $query= "DELETE FROM category WHERE Id=?";
        $stmt = $conn->prepare($query);
        echo "".$id;
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Category with id: $id is deleted!!');</script>";
        header("Location: adminProductPage.php");
    }
?>