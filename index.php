
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NBA MiniLeague</title>

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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<!-- Menu bar code -->
	<?php include 'head.php';?>	

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/back1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Eat. Hoop. Repeat. <br> Basketball never stops!</h1>
							<!-- Video message from nba fans -->
							<p><a href="https://www.youtube.com/watch?v=PXHlnmC_veE" class="btn btn-primary popup-vimeo">Message from NBA Stars</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/basketball.svg" alt=""></span>
						<h3>Season Uniforms</h3>
						<p>Every new Nike City Edition uniform design for the 2020-21 season has been unveiled.
							In addition, some teams have released new Classic Edition uniforms, court designs and more. This page will update when new designs are unveiled before the season begins.</p>
						<p><a href="https://www.nba.com/news/new-team-uniforms-2020-21-season" class="btn btn-primary btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Read More<i class="icon-arrow-right"></i></a></p>
					
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/basketball.svg" alt=""></span>
						<h3>10 players we get to see in 2020-21</h3>
						<p>While most of the players in this league are barely catching their breath following the shortest offseason in NBA history, they don’t speak for others who mainly haven’t broken a sweat since March, or in some cases, long before that.</p>
						<p><a href="https://www.nba.com/news/10-players-we-finally-get-to-see-again-in-2020-21" class="btn btn-primary btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Read More<i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/basketball.svg" alt=""></span>
						<h3>Where NBA teams stand on in-arena attendance</h3>
						<p>The 2020-21 NBA regular season is set to tip off on Dec. 22. Fan attendance across the country depends on a variety of factors, including coronavirus guidelines that vary from state to state.</p>
						<p><a href="https://www.nba.com/news/where-nba-teams-stand-on-in-arena-attendance" class="btn btn-primary btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Read More<i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Game schedule code -->
	<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Game Schedule</h2>
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
							// Database connection file
							include 'connect.php';
							//query to all teams and their game fixtures for week 1
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=1;";
    						$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
							//placing each column at a specific place using a while loop
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
									//query to all teams and their game fixtures for week 2
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=2;";
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
									//query to all teams and their game fixtures for week 3
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=3;";
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
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=4;";
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
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=5;";
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
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=6;";
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
							$sql = "SELECT q.Schedule_ID, h.TeamName AS home, a.TeamName AS away, weeknumber, Game_Date, Game_Time, h.Arena FROM teamschedule q INNER JOIN team h ON q.home_team = h.Team_ID INNER JOIN team a ON q.away_team = a.Team_ID WHERE weeknumber=7;";
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

	<!-- Including footer -->
	<?php include 'footer.php';?>
	</body>
</html>
