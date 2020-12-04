<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link rel="stylesheet" type="text/css" href="footer.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="adminHomePage.css">
		<title>IPLBash HomePage</title>
	</head>
	<body onload="activeTab('sideNavLinky')">
        <script>
            function activeTab(var x){
                $('ul.sideNavLink > li').removeClass('activeTab'); 
                $x.addClass(' activeTab'); 
            }
        </script>
        <div class="navBarr">
            <?php
                include 'adminSideBar.php';
            ?>
        </div>

        <div class="mainContainer">
            <div class="pageHeader"> Overview</div>

            <?php 
            // This is to fetch User Count from DataBase 
                include("Datasource.php");
                $sql = "SELECT count(1) FROM signup WHERE user='Admin'";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array($result);
                $countAdmin = $row[0];
                $sql = "SELECT count(1) FROM signup";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array($result);
                $countTotal = $row[0];
                $countUser = $countTotal - $countAdmin;
            ?>

            <div class="userContainer childContainer">
                <div class="contentHeading">
                    <div class="header"> Users</div>
                </div>
                <div class="content">
                    <div class="childCard">
                        <div class="cardHeading">Members</div>
                        <div class="cardValue"><?php echo $countUser ?></div>
                    </div>
                    <div class="childCard">
                        <div class="cardHeading">Admins</div>
                        <div class="cardValue"><?php echo $countAdmin ?></div>
                    </div>
                    <div class="childCard">
                        <div class="cardHeading">Total</div>
                        <div class="cardValue"><?php echo $countTotal ?></div>
                    </div>
                </div>
            </div>

            <div class="productContainer childContainer">
                <div class="contentHeading">
                    <div class="header"> Products</div>
                </div>
                <div class="content">
                
                    <?php 
                    // This is to fetch Product and Category Count from DataBase
                        $sql = "SELECT * FROM Category";
                        $result = mysqli_query($conn, $sql);
                        $countCategory = mysqli_num_rows($result);
                        $totalProducts = 0;
                        if($countCategory > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $categoryId = $row['Id'];
                                $categoryName = $row['Name'];
                                $countProductOfCategoryId = $row['Quantity'];
                                $totalProducts += $countProductOfCategoryId;
                    ?>

                    <div class="childCard">
                        <div class="cardHeading"><?php echo $categoryName ?></div>
                        <div class="cardValue"><?php echo $countProductOfCategoryId ?></div>
                    </div>

                    <?php 
                            }
                        }
                    ?>

                    <div class="childCard">
                        <div class="cardHeading"><?php echo "Total" ?></div>
                        <div class="cardValue"><?php echo $totalProducts ?></div>
                    </div>
                </div>
            </div>

            <?php 
            // This is to fetch News Count from DataBase 
                $sql = "SELECT count(1) FROM News";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array($result);
                $countNews = $row[0];
                mysqli_close($conn);
            ?>

            <div class="newsContainer childContainer">
                <div class="contentHeading">
                    <div class="header"> News</div>
                </div>
                <div class="content">
                    <div class="childCard">
                        <div class="cardHeading"><?php echo "Total" ?></div>
                        <div class="cardValue"><?php echo $countNews ?></div>
                    </div>
                </div>
            </div>
        </div>

        
	</body>
</html>