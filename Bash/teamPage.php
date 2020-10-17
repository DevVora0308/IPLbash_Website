<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link rel="stylesheet" type="text/css" href="footer.css"> -->
		<link rel="stylesheet" type="text/css" href="navBar.css">
		<link rel="stylesheet" type="text/css" href="teamPage.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<link rel="stylesheet" type="text/css" href="homePage.css">
		<script src="slideShow.js"></script>
		<title>IPlBash - Teams</title>
	</head>
	<body onload="currentSlide(1)">
	<?php
    	echo"<a><h2>WELCOME ".$_SESSION['fname']." ".$_SESSION['lname']." ;</h2></a>";
	?>
		<div class="navBarr" onload="activePage('fa-tshirt')">
			<?php
				include 'navBar.html';
			?>
		</div>
        
		<table class="teamsTable" cellspacing="20">
			<tr>
				<td class="teamCard teamCSK">
					<a href="HomePage_CSK.html" target="_self">
                        <img class="teamCardImg" src="image/Team1_CSK/1_0_CSK.jpg">
                        <h1><br>Chennai Super<br>Kings</h1>
                        <h4>M.A. Chidambaram Stadium</h4>
                        <span class="teamCardAward teamCardAwardCSK">
                            <img src="image/0_0_Trophy.jpg" height="18" width="25">2010, 2011, 2018
                        </span>
                        <br><br>
                        <h3>TEAM HOME</h3> <br>
					</a>
				</td>
			
				<td class="teamCard teamDC">
					<a href="HomePage_DC.html" target="_self">
						<center>
							<img class="teamCardImg" src="image/Team2_DC/2_0_DC.jpg">
							<h1><br>Delhi<br>Capitals</h1>
                            <h4> Feroz Shah Kotla Ground</h4>
                            <!-- <span class="teamCardAward teamCardAwardDC">
								<img src="image/0_0_Trophy.jpg" height="18" width="25">
                            </span> -->
                            <br><br>
							<h3>TEAM HOME</h3><br><br>
						</center>
					</a>
				</td>

				<td class="teamCard teamKXIP">
					<a href="HomePage_KXIP.html" target="_self">
						<center>
							<img class="teamCardImg" src="image/Team3_KXIP/3_0_KXIP.jpg">
							<h1><br>Kings XI<br>Punjab</h1>
                            <h4> IS Bindra Stadium </h4>
                            <!-- <span class="teamCardAward teamCardAwardKXIP">
								<img src="image/0_0_Trophy.jpg" height="18" width="25">
                            </span> -->
                            <br><br>
							<h3>TEAM HOME</h3> <br><br>
						</center>
					</a>
				</td>

				<td class="teamCard teamKKR">
					<a href="HomePage_KKR.html" target="_self">
						<center>
							<img class="teamCardImg" src="image/Team4_KKR/4_0_KKR.jpg">
							<h1><br>Kolkata Knight<br>Riders</h1>
							<h4>Eden Garden</h4>
                            <span class="teamCardAward teamCardAwardKKR">
								<img src="image/0_0_Trophy.jpg" height="18" width="25">2012, 2014
                            </span>
                            <br><br>
							<h3>TEAM HOME</h3><br>
						</center>
					</a>
                </td>

			</tr>
            <tr>
				<td class="teamCard teamMI">
					<a href="HomePage_MI.html" target="_self">
						<center>
							<img class="teamCardImg" src="image/team5_MI/5_0_MI.png">
							<h1><br>Mumbai<br>Indians</h1>
							<h4>Wankhede Stadium</h4>
                            <span class="teamCardAward teamCardAwardMI">
								<img src="image/0_0_Trophy.jpg" height="18" width="25">2013, 2015, 2017, 2019
                            </span>
                            <br><br>
							<h3>TEAM HOME</h3><br>
						</center>
					</a>
                </td>
                
				<td class="teamCard teamRR">
					<a href="HomePage_RR.html" target="_self">
						<center>
							<img class="teamCardImg" src="image/Team6_RR/6_0_RR.png">
							<h1><br>Rajasthan<br>Royals</h1>
							<h4>Sawai Mansingh Stadium</h4>
                            <span class="teamCardAward teamCardAwardMI">
								<img src="image/0_0_Trophy.jpg" height="18" width="25">2008
                            </span>
                            <br><br>
							<h3>TEAM HOME</h3><br>
						</center>
					</a>
				</td>
                
				<td class="teamCard teamRCB">
					<a href="HomePage_RCB.html" target="_self">
						<center>
							<img class="teamCardImg" src="image/Team7_RCB/7_0_RCB.png">
							<h1><br>Royal Challengers<br>Bangalore</h1>
							<h4>M. Chinnaswamy Stadium</h4>
                            <!-- <span class="teamCardAward teamCardAwardRCB">
								<img src="image/0_0_Trophy.jpg" height="18" width="25">
                            </span> -->
                            <br><br>
							<h3>TEAM HOME</h3><br>
						</center>
					</a>
				</td>
                
                <td class="teamCard teamSH">
                    <a href="HomePage_SH.html" target="_self">
                        <center>
                            <img class="teamCardImg" src="image/Team8_SH/8_0_SH.png">
                            <h1><br>Sunrisers<br>Hyderabad</h1>
                            <h4>Rajiv Gandhi Intl. Cricket Stadium</h4>
                            <span class="teamCardAward teamCardAwardSH">
                                <img src="image/0_0_Trophy.jpg" height="18" width="25">2016
                            </span>
                            <br><br>
                            <h3>TEAM HOME</h3><br>
                        </center>
                    </a>
                </td>
            </tr>
        </table>

		<footer class="footer">
			<?php
				include 'Footer.html';
			?>
		</footer>
    </body>
</html>