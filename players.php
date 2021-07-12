<?php include 'connect.php';?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Players</title>
	
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
	<?php include 'head.php';?>

	<!-- Including the search bar -->
	<?php include_once 'search.php'; ?>

						<?php
						// checks if a name from the search drop down has been selected by user
						if (isset($_POST['submit'])) {
							$term = $_POST['search'];
							//query to find player by selected name name
							$query1 = "SELECT * FROM `players` INNER JOIN team ON players.Team_ID = team.Team_ID WHERE CONCAT(fname,' ',lname) LIKE '%$term%'";
							$result = mysqli_query($conn,$query1) or die ('request "Could not execute SQL query" '.$query1);
						?>
							<div id="fh5co-pricing">
								<div class="container">
									<div class="row animate-box">
										<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
											<h2>The Players</h2>
											<p>Meet the players battling it out to be crowned first MiniLeague Champions</p>
										</div>
									</div>
									<div class="row">
									
						<div class="pricing">
						<?php  
							while ($row = $result->fetch_assoc()) { 
								?>
							<div class="col-md-3 animate-box" >
								<div class="price-box" >
									<h2 class="pricing-plan"><?php echo $row['fname']. ' '.$row['lname']?></h2>
									<img src="<?php echo $row['player_photo'] ?>" alt="" width="150" height="150">
									<ul class="classes">
										<li>Team: <?php echo $row['TeamName'] ?></li>
										<li class="color">Kit Number: <?php echo $row['KitNumber'] ?></li>
										<li>PPG: <?php echo $row['PointsPG'] ?></li>
										<li class="color">APG: <?php echo $row['AssistsPG'] ?></li>
										<li>RPG: <?php echo $row['ReboundsPG'] ?></li>
										<li class="color">SPG: <?php echo $row['StealsPG'] ?></li>
										<li>BPG: <?php echo $row['BlocksPG'] ?></li>
									</ul>
								</div>		
							</div>
					<?php } 
						}
					else{ 
						// if no player is selected all players are displayed
						$sql = "SELECT * FROM players INNER JOIN team ON players.Team_ID = team.Team_ID";
    					$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
						?>

							<div class="container">
							<div class="row animate-box">
								<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
									<h2>The Players</h2>
									<p>Meet the players battling it out to be crowned first MiniLeague Champions</p>
								</div>
							</div>
							<div class="row">
							
								<div class="pricing">
								<?php  
									while ($row = $result->fetch_assoc()) { ?>
									<div class="col-md-3 animate-box">
										<div class="price-box" >
											<h2 class="pricing-plan"><?php echo $row['fname']. ' '.$row['lname']?></h2>
											<img src="<?php echo $row['player_photo'] ?>" alt="" width="150" height="150">
											<ul class="classes">
											<li>Team: <?php echo $row['TeamName'] ?></li>
											<li class="color">Kit Number: <?php echo $row['KitNumber'] ?></li>
												<li>PPG: <?php echo $row['PointsPG'] ?></li>
												<li class="color">APG: <?php echo $row['AssistsPG'] ?></li>
												<li>RPG: <?php echo $row['ReboundsPG'] ?></li>
												<li class="color">SPG: <?php echo $row['StealsPG'] ?></li>
												<li>BPG: <?php echo $row['BlocksPG'] ?></li>
											</ul>
										</div>		
									</div>
								<?php } 
								}
								?>
								</div>
			</div>
		</div>
		</div>

				
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="search.js"></script>
	
	
	
	<?php include 'footer.php';?>
	</body>
</html>

