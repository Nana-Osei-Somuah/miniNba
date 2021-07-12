<?php include 'connect.php';?>

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

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/pacific.jpg);" data-stellar-background-ratio="0.5">
	</header>

	
	<div id="fh5co-trainer">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>MiniLeague Teams</h2>
					<p>The 5 teams from the league's toughest division, The Pacific Division, going at it to be crowned MiniLeague Champions.</p>
				</div>
			</div>
	<?php
	// displays teams
	$sql = "SELECT * FROM team";
    $result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
	?>

			<div class="row">
	<?php  
    while ($row = $result->fetch_assoc()) { ?>
				<div class="col-md-4 col-sm-4 animate-box" style ="padding-top: 25px;">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="<?php echo $row['Team_Logo'] ?>" alt="trainer"></a>
						<div class="title">
							<h3><a href="<?php echo $row['link'] ?>"><?php echo $row['TeamName'] ?></a></h3>
							<span><?php echo $row['Arena'] ?></span>
						</div>
						<div class="desc text-center">
							<p><?php echo "Coach: " .$row['Head_Coach'] ?></p>
						</div>
					</div>
				</div>	
				<?php } ?>

			</div>
		</div>
	</div>
	



	<?php include 'footer.php';?>

	</body>
</html>

