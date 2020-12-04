<?php
    include("Datasource.php");
    $flagNews = false;
    $newsHeadLineErr = $newsIdErr = $newsAuthorErr = $newsContentErr = "*";
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addNews'])) 
    {
        if(empty($_POST["newsHeadLine"]))
        {
            $newsHeadLineErr = "Error: Please Enter News HeadLine";
            $flagNews = false;
        }
        else
        {
            $newsHeadLine = $_POST['newsHeadLine'];
            $newsHeadLineErr = "";
            $flagNews = true;
        }

        if(empty($_POST["newsId"]))
        {
            $newsIdErr = "Error: Please Enter News Id.";
            $flagNews = false;
        }
        else
        {
            $newsId= $_POST['newsId'];
            $newsIdErr = "";
            $flagNews = true;
        }

        if(empty($_POST["newsAuthor"]))
        {
            $newsAuthorErr = "Error: Please Enter News Author Name.";
            $flagNews = false;
        }
        else
        {
            $newsAuthor= $_POST['newsAuthor'];
            $newsAuthorErr = "";
            $flagNews = true;
        }

        if(empty($_POST["newsContent"]))
        {
            $newsContentErr = "Error: Please Enter News Content.";
            $flagNews = false;
        }
        else
        {
            $newsContent= $_POST['newsContent'];
            $newsContentErr = "";
            $flagNews = true;
            if(strlen($newsContent)<40)
            {
                $newsContentErr = "Error: Please Enter News Content of length greater than 40.";
                $flagNews = false;
            }
        }

        if($flagNews && isset($_POST['addNews']))
        {
            $sql = "SELECT * FROM news WHERE Id='$newsId'";
            $result = mysqli_query($conn, $sql);
            $totalnews = mysqli_num_rows($result);
            $var = 0;
            if($totalnews > 0)
            {
                $newsIdErr = "Error: Id. Already Used!!";
                $flagNews = false;
            }
            $sql = "SELECT * FROM news WHERE Name='$newsHeadLine'";
            $result = mysqli_query($conn, $sql);
            if($result!=false)
                $totalnews = mysqli_num_rows($result);
            $var = 0;
            if($totalnews > 0)
            {
                $newsHeadLineErr = "Error: News HeadLine Already Used!!";
                $flagNews = false;
            }
        }
        if(!$flagNews && isset($_POST['addNews'])){
            echo "<script>alert('Please resolve the ERRORS, first!!');</script>";
        }
        if($flagNews && isset($_POST['addNews'])){
            // $_SESSION['news'] = $_POST; 
            // header("Location: adminProductPage-addNews-2.php");
            // include("Datasource.php");
            // $_POST = $_SESSION['news'];
            $currentUser = $_SESSION['mail'];
            $currentTimeStamp = date("Y-m-d H:i:s");
            $query= "INSERT INTO news (Id,Headline,NewsContent,Author,Inserted_By,Inserted_At) VALUES (?,?,?,?,?,?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("isssss",$newsId,$newsHeadLine,$newsContent,$newsAuthor,$currentUser,$currentTimeStamp);
            $stmt->execute();
            echo "$stmt->error";
            $stmt->close();
            // echo "<script>alert('News $newsHeadLine is added!!');</script>";
            $flagNews = false;
            header("Location: adminHomePage.php");
            exit();
        }
    }
?>
<html>
    <form class="addDetails" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
        <label for="newsId">News Id: </label>
        <input name="newsId" type="number" placeholder="Ex.: 5568"> 
            <span class="error"><?php echo $newsIdErr;?></span>
        <br/><br/>
        <label for="newsHeadLine">News Headline: </label>
        <input name="newsHeadLine" type="text" placeholder="Ex.: IPL-2020 Openning Ceremony"> 
            <span class="error"><?php echo $newsHeadLineErr;?></span>
        <br/><br/>
        <label class="address" for="newsContent">News Content: </label>
        <textarea class="inpText" name="newsContent" id="newsContent" rows="3" cols="120" placeholder="Enter the News Content; here...." autocomplete="off"></textarea>
            <span class="error address"><?php echo $newsContentErr;?></span>
        <br/><br/>
        <label for="newsAuthor">Author: </label>
        <input name="newsAuthor" type="text" placeholder="Ex.: P.K. Singh"> 
            <span class="error"><?php echo $newsAuthorErr;?></span>
        <br/><br/>
        <input type="submit" value="ADD" name="addNews" class="button">
        <br/><br/>
    </form>
</html>