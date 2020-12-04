<?php
    session_start();
    if(isset($_GET['open'])) {
        include 'adminModal.php';
        echo "<script>onclick='document.getElementById('modal').style.display='block''<script>";
        $userEmailId = $_GET['id'];
    }

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link rel="stylesheet" type="text/css" href="footer.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="adminUserPage.js"></script>
		<script src="modal.js"></script>
		<link rel="stylesheet" type="text/css" href="adminModalcss">
		<link rel="stylesheet" type="text/css" href="adminTable.css">
		<link rel="stylesheet" type="text/css" href="adminUserPage.css">
		<title>IPLBash HomePage</title>
    </head>
	<body onload="openDefaultTab()">      
        <div class="navBarr">
            <?php
                include 'adminSideBar.php';
            ?>
        </div>

        <div class="mainContainer">
            <div class="pageHeader"> User </div>

            <?php 
            // This is to access DataBase 
                include("Datasource.php");
            ?>

            <div class="userContainer">
                <button class="tabLink" onclick="openPage('memberTab', this)">Members</button>
                <button class="tabLink" onclick="openPage('adminTab', this)">Admins</button>
                <button class="tabLink" onclick="openPage('allTab', this)" id="defaultOpen">All</button>
                
                <div id="memberTab" class="tabContent activeTabContent">
                    <table class="userTables">
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Birth Date</th>
                            <th>Mobile No.</th>
                            <th>Email Id.</th>
                            <th>Address</th>
                            <th>Favourite Team</th>
                            <th>Actions</th>
                        </tr>

                        <?php 
                        // This is to fetch user details from DataBase 
                            $sql = "SELECT * FROM signup WHERE user='User'";
                            $result = mysqli_query($conn, $sql);
                            $totalMember = mysqli_num_rows($result);
                            $var = 0;
                            if($totalMember > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $userNo = ++$var;
                                    $userName = $row['fname']." ".$row['lname'] ;
                                    $userGender = $row['gender'];
                                    $userBirthDate = $row['dob'];
                                    $userMobileNo = $row['mobile'];
                                    $userEmailId = $row['mail'];
                                    $userAddress = $row['address'];
                                    $userFavTeam = $row['favteam'];
                        ?>
                        <tr>
                            <td><?php echo $userNo; ?></td>
                            <td><?php echo $userName; ?></td>
                            <td><?php echo $userGender; ?></td>
                            <td><?php echo $userBirthDate; ?></td>
                            <td><?php echo $userMobileNo; ?></td>
                            <td><?php echo $userEmailId; ?></td>
                            <td><?php echo $userAddress; ?></td>
                            <td><?php echo $userFavTeam; ?></td>
                            <td>
                                <div class="deleteBtn" id="openModal">
                                    <a href="adminModal.php?open=true&id=<?php echo $userEmailId; ?>">
                                       <script>console.log('Deleted id '.$emailId);</script>
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php 
                                }
                            }
                        ?>

                    </table>
                </div>

                <div id="adminTab" class="tabContent activeTabContent">
                    <table class="userTables">
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Birth Date</th>
                            <th>Mobile No.</th>
                            <th>Email Id.</th>
                            <th>Address</th>
                            <th>Favourite Team</th>
                            <th>Actions</th>
                        </tr>

                        <?php 
                        // This is to fetch user details from DataBase 
                            $sql = "SELECT * FROM signup WHERE user='Admin'";
                            $result = mysqli_query($conn, $sql);
                            $totalMember = mysqli_num_rows($result);
                            $var = 0;
                            if($totalMember > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $userNo = ++$var;
                                    $userName = $row['fname']." ".$row['lname'] ;
                                    $userGender = $row['gender'];
                                    $userBirthDate = $row['dob'];
                                    $userMobileNo = $row['mobile'];
                                    $userEmailId = $row['mail'];
                                    $userAddress = $row['address'];
                                    $userFavTeam = $row['favteam'];
                        ?>
                        <tr>
                            <td><?php echo $userNo; ?></td>
                            <td><?php echo $userName; ?></td>
                            <td><?php echo $userGender; ?></td>
                            <td><?php echo $userBirthDate; ?></td>
                            <td><?php echo $userMobileNo; ?></td>
                            <td><?php echo $userEmailId; ?></td>
                            <td><?php echo $userAddress; ?></td>
                            <td><?php echo $userFavTeam; ?></td>
                            <td>
                                <div class="deleteBtn" id="openModal">
                                    <a href="adminModal.php?open=true&id=<?php echo $userEmailId; ?>">
                                       <script>console.log('Deleted id '.$emailId);</script>
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php 
                                }
                            }
                        ?>

                    </table>
                </div>

                <div id="allTab" class="tabContent activeTabContent">
                    <table class="userTables">
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Birth Date</th>
                            <th>Mobile No.</th>
                            <th>Email Id.</th>
                            <th>Address</th>
                            <th>Favourite Team</th>
                            <th>Actions</th>
                        </tr>

                        <?php 
                        // This is to fetch user details from DataBase 
                            $sql = "SELECT * FROM signup";
                            $result = mysqli_query($conn, $sql);
                            $totalMember = mysqli_num_rows($result);
                            $var = 0;
                            if($totalMember > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $userNo = ++$var;
                                    $userName = $row['fname']." ".$row['lname'] ;
                                    $userGender = $row['gender'];
                                    $userBirthDate = $row['dob'];
                                    $userMobileNo = $row['mobile'];
                                    $userEmailId = $row['mail'];
                                    $userAddress = $row['address'];
                                    $userFavTeam = $row['favteam'];
                        ?>
                        <tr>
                            <td><?php echo $userNo; ?></td>
                            <td><?php echo $userName; ?></td>
                            <td><?php echo $userGender; ?></td>
                            <td><?php echo $userBirthDate; ?></td>
                            <td><?php echo $userMobileNo; ?></td>
                            <td><?php echo $userEmailId; ?></td>
                            <td><?php echo $userAddress; ?></td>
                            <td><?php echo $userFavTeam; ?></td>
                            <td>
                                <div class="deleteBtn" id="openModal">
                                    <a href="adminModal.php?open=true&id=<?php echo $userEmailId; ?>">
                                       <script>console.log('Deleted id '.$emailId);</script>
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php 
                                }
                            }
                            mysqli_close($conn);
                        ?>

                    </table>
                </div>

            </div>

	</body>
</html>