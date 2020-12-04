<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IPL 2020 Schedule</title>
        <link rel="stylesheet" type="text/css" href="Schedule.css">
    </head>
    <body>
        <div class="navBarr" onload="activePage('fa-home')">
            <?php
                include 'navBar.html';
            ?>
        </div>
        
        <?php 
            // This is to access DataBase 
            include("Datasource.php");
        ?>

        <?php
            function teamImage($team){
                switch($team){
                    case "CSK": return "../image/Team1_CSK/1_0_CSK.jpg";
                    break;
                    case "DC": return "../image/Team2_DC/2_0_DC.jpg";
                    break;
                    case "KXIP": return "../image/Team3_KXIP/3_0_KXIP.jpg";
                    break;
                    case "KKR": return "../image/Team4_KKR/4_0_KKR.jpg";
                    break;
                    case "MI": return "../image/Team5_MI/5_0_MI.png";
                    break;
                    case "RR": return "../image/Team6_RR/6_0_RR.jpg";
                    break;
                    case "RCB": return "../image/Team7_RCB/7_0_RCB.jpg";
                    break;
                    case "SH": return "../image/Team8_SH/8_0_SH.jpg";
                    break;
                }
            }
        ?>
        <center>
            <div class="scheduleCards">
                <?php
                    $sql = "SELECT * FROM schedule";
                    $result = mysqli_query($conn, $sql);
                    $totalMatchNo = mysqli_num_rows($result);
                    $var = 0;
                    if($totalMatchNo > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            // $currentMatchNo = ++$var;
                            $currentMatchNo = $row['Id'];
                            $team1Name = $row['Team1'] ;
                            $team2Name = $row['Team2'];
                            $matchDate = $row['Match_Date'];
                            $date=date_create($matchDate);
                            $matchDate = date_format($date,"D,d/m");
                    ?>
                <div class="prevMatch">
                    <div class="teamNo">T20 <?php echo $currentMatchNo;?> of <?php echo $totalMatchNo;?></div>
                    <div class="matchDate"><?php echo $matchDate;?></div>
                    <div class="teamDetails">
                        <div class="team1">
                            <div class="teamLogo"><img src="<?php echo teamImage($team1Name);?>" height="100px" width="100px" alt="team1"></div>
                            <div class="teamName"><?php echo $team1Name;?> </div>
                        </div>
                        <div class="vs">vs</div>
                        <div class="team2">
                            <div class="teamLogo"><img src="<?php echo teamImage($team2Name);?> " height="100px" width="100px" alt="team2"></div>
                            <div class="teamName"><?php echo $team2Name;?> </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </center>

        <footer class="footer">
			<?php
				include 'Footer.html';
			?>
		</footer>

        <?php 
            mysqli_close($conn);
        ?>
    </body>
</html>