<?php include 'connect.php';?>
<!-- This page dynamically displays the page of the which has been selected by a user-->
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Teams</title>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	
	</head>
	<body>	
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include 'head.php';?>
		<?php
			$array = $conn->query("SELECT * FROM team INNER JOIN players ON team.Team_ID = players.Team_ID WHERE team.Team_ID ='$_GET[id]'"); ?>
		<?php $row = $array->fetch_assoc()?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo $row['biglogo'] ?>);" data-stellar-background-ratio="0.5">
				
	</header>

	
	<div id="fh5co-trainer">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php 
						$array = $conn->query("SELECT * FROM team INNER JOIN players ON team.Team_ID = players.Team_ID WHERE team.Team_ID ='$_GET[id]'"); ?>
					<?php $row = $array->fetch_assoc() ?>
					<h2><?php echo $row['TeamName'] ?> Roster</h2>
				</div>
			</div>

            <div class="pricing">
			<!-- Displaying the players of specific team -->
					<?php
                    $array = $conn->query("SELECT * FROM team INNER JOIN players ON team.Team_ID = players.Team_ID WHERE team.Team_ID ='$_GET[id]'"); ?>
					<?php	while ($row = $array->fetch_assoc()){  ?>				
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan"><?php echo $row['fname']. ' '.$row['lname']?></h2>
							<img src="<?php echo $row['player_photo'] ?>" alt="bam" width="150" height="150">
							<ul class="classes">
							<li class="color">Kit Number: <?php echo $row['KitNumber'] ?></li>
								<li>PPG: <?php echo $row['PointsPG'] ?></li>
								<li class="color">APG: <?php echo $row['AssistsPG'] ?></li>
								<li>RPG: <?php echo $row['ReboundsPG'] ?></li>
								<li class="color">SPG: <?php echo $row['StealsPG'] ?></li>
								<li>BPG: <?php echo $row['BlocksPG'] ?></li>
							</ul>
						</div>		
					</div>
					<?php } ?>
            </div>
		
        </div>  
	</div>



	<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row">
								<!-- Displaying schedule for specific team -->
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<?php 
						$array = $conn->query("SELECT * FROM team INNER JOIN players ON team.Team_ID = players.Team_ID WHERE team.Team_ID ='$_GET[id]'"); ?>
					<?php $row = $array->fetch_assoc() ?>
					<h2><?php echo $row['TeamName'] ?> Game Schedule</h2>
				</div>
			</div>

			<div class="row animate-box">
		
				<div class="fh5co-tabs">
					<ul class="fh5co-tab-nav">
						<li class="active"><a href="#" data-tab="1"><span class="visible-xs">S</span><span class="hidden-xs">WEEK 1</span></a></li>
						<li><a href="#" data-tab="2"><span class="visible-xs">M</span><span class="hidden-xs">WEEK 2</span></a></li>
						<li><a href="#" data-tab="3"><span class="visible-xs">T</span><span class="hidden-xs">WEEK 3</span></a></li>
						<li><a href="#" data-tab="4"><span class="visible-xs">W</span><span class="hidden-xs">WEEK 4</span></a></li>
						<li><a href="#" data-tab="5"><span class="visible-xs">Th</span><span class="hidden-xs">WEEK 5</span></a></li>
						<li><a href="#" data-tab="6"><span class="visible-xs">F</span><span class="hidden-xs">WEEK 6</span></a></li>
						<li><a href="#" data-tab="7"><span class="visible-xs">S</span><span class="hidden-xs">WEEK 7</span></a></li>
					</ul>

					<!-- Tabs -->
					<div class="fh5co-tab-content-wrap">
					<div class="fh5co-tab-content tab-content active" data-tab-content="1">
							<ul class="class-schedule">
							<?php
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=1 AND (h.Team_ID = '$_GET[id]' OR a.Team_ID = '$_GET[id]');";
    						$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
							while ($row = $result->fetch_assoc()) { ?>
								<li class="text-center">
									<span><img src="images/basketball.svg" class="img-responsive" alt=""></span>
									<span class="time"><?php echo $row['Game_Date'].' '. $row['Game_Time'] ?></span>
									<h4><?php echo $row['home'].' v '. $row['away'] ?></h4>
									<small><?php echo $row['Arena'] ?></small>
								</li>
								<?php }?>
							</ul>
					
						</div> 

						<div class="fh5co-tab-content tab-content active" data-tab-content="2">
							<ul class="class-schedule">
							<?php 
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=2 AND (h.Team_ID = '$_GET[id]' OR a.Team_ID = '$_GET[id]');";
    						$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
							while ($row = $result->fetch_assoc()) { ?>
								<li class="text-center">
									<span><img src="images/basketball.svg" class="img-responsive" alt=""></span>
									<span class="time"><?php echo $row['Game_Date'].' '. $row['Game_Time'] ?></span>
									<h4><?php echo $row['home'].' v '. $row['away'] ?></h4>
									<small><?php echo $row['Arena'] ?></small>
								</li>
								<?php }?>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="3">
							<ul class="class-schedule">
							<?php
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=3 AND (h.Team_ID = '$_GET[id]' OR a.Team_ID = '$_GET[id]');";
    						$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
							while ($row = $result->fetch_assoc()) { ?>
								<li class="text-center">
									<span><img src="images/basketball.svg" class="img-responsive" alt=""></span>
									<span class="time"><?php echo $row['Game_Date'].' '. $row['Game_Time'] ?></span>
									<h4><?php echo $row['home'].' v '. $row['away'] ?></h4>
									<small><?php echo $row['Arena'] ?></small>
								</li>
								<?php }?>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="4">
							<ul class="class-schedule">
							<?php
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=4 AND (h.Team_ID = '$_GET[id]' OR a.Team_ID = '$_GET[id]');";
    						$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
							while ($row = $result->fetch_assoc()) { ?>
								<li class="text-center">
									<span><img src="images/basketball.svg" class="img-responsive" alt=""></span>
									<span class="time"><?php echo $row['Game_Date'].' '. $row['Game_Time'] ?></span>
									<h4><?php echo $row['home'].' v '. $row['away'] ?></h4>
									<small><?php echo $row['Arena'] ?></small>
								</li>
								<?php }?>		
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="5">
							<ul class="class-schedule">
							<?php
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=5 AND (h.Team_ID = '$_GET[id]' OR a.Team_ID = '$_GET[id]');";
    						$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
							while ($row = $result->fetch_assoc()) { ?>
								<li class="text-center">
									<span><img src="images/basketball.svg" class="img-responsive" alt=""></span>
									<span class="time"><?php echo $row['Game_Date'].' '. $row['Game_Time'] ?></span>
									<h4><?php echo $row['home'].' v '. $row['away'] ?></h4>
									<small><?php echo $row['Arena'] ?></small>
								</li>
								<?php }?>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="6">
							<ul class="class-schedule">
							<?php
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=6 AND (h.Team_ID = '$_GET[id]' OR a.Team_ID = '$_GET[id]');";
    						$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
							while ($row = $result->fetch_assoc()) { ?>
								<li class="text-center">
									<span><img src="images/basketball.svg" class="img-responsive" alt=""></span>
									<span class="time"><?php echo $row['Game_Date'].' '. $row['Game_Time'] ?></span>
									<h4><?php echo $row['home'].' v '. $row['away'] ?></h4>
									<small><?php echo $row['Arena'] ?></small>
								</li>
								<?php }?>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="7">
							<ul class="class-schedule">
							<?php
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=7 AND (h.Team_ID = '$_GET[id]' OR a.Team_ID = '$_GET[id]');";
    						$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
							while ($row = $result->fetch_assoc()) { ?>
								<li class="text-center">
									<span><img src="images/basketball.svg" class="img-responsive" alt=""></span>
									<span class="time"><?php echo $row['Game_Date'].' '. $row['Game_Time'] ?></span>
									<h4><?php echo $row['home'].' v '. $row['away'] ?></h4>
									<small><?php echo $row['Arena'] ?></small>
								</li>
								<?php }?>
							</ul>
						</div>

					</div>
		
				</div>
			</div>
		</div>
	</div>
    
    

    




	<?php include 'footer.php';?>

	</body>
</html>

