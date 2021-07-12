<?php include 'connect.php';?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Standings</title>
	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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

	<link rel="stylesheet" href="css/standings.css">
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include 'head.php';?>


	
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>League Table</h2>
					<p>The MiniLeague Table as it stand now</p>
				</div>
			</div>
		</div>
		<!-- <div class="container-fluid"> -->
		
		<!-- </div> -->
	</div>
	
	<div class="body">
	<section class="wrapper">
    <!-- Row title -->
    <main class="row1 title">
      <ul>
        <li>Position</li>
        <li>Team</li>
        <li>Wins</li>
        <li>Losses</li>
        <li>Difference</li>
      </ul>
    </main>
	<!-- Row 1 - fadeIn -->
	<?php
	// finding first team in the league
	$sql = "SELECT TeamName,wins,losses,wins-losses AS dif FROM team ORDER BY dif DESC LIMIT 1 OFFSET 0;";
    $result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
	
    while ($row = $result->fetch_assoc()) { ?>
      <article class="row1 nfl">
        <ul>
          <li class><a href="#">1st</a></li>
          <li><?php echo $row['TeamName'] ?></li>
          <li><?php echo $row['wins'] ?></li>
          <li><?php echo $row['losses'] ?></li>
          <li><?php echo $row['dif'] ?></li>
        </ul>
      </article>
	  <?php } ?>

   
	  <?php
	  
	  
	// finding second team in the league
	$sql = "SELECT TeamName,wins,losses,wins-losses AS dif FROM team ORDER BY dif DESC LIMIT 1 OFFSET 1;";
    $result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
	
    while ($row = $result->fetch_assoc()) { ?>
    <!-- Row 4 -->
    <article class="row1 mlb">
      <ul>
        <li><a href="#">2nd</a></li>
        <li><?php echo $row['TeamName'] ?></li>
        <li><?php echo $row['wins'] ?></li>
        <li><?php echo $row['losses'] ?></li>
        <li><?php echo $row['dif'] ?></li>
      </ul>
	</article>
	<?php } ?>
	
	<?php
	$sql = "SELECT TeamName,wins,losses,wins-losses AS dif FROM team ORDER BY dif DESC LIMIT 1 OFFSET 2;";
    $result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
	
    while ($row = $result->fetch_assoc()) { ?>
    <!-- Row 6 -->
    <article class="row1 nhl">
      <ul>
        <li><a href="#">3rd</a></li>
        <li><?php echo $row['TeamName'] ?></li>
        <li><?php echo $row['wins'] ?></li>
        <li><?php echo $row['losses'] ?></li>
        <li><?php echo $row['dif'] ?></li>
      </ul>
	</article>
	<?php } ?>

	<?php
	$sql = "SELECT TeamName,wins,losses,wins-losses AS dif FROM team ORDER BY dif DESC LIMIT 1 OFFSET 3;";
    $result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
	
    while ($row = $result->fetch_assoc()) { ?>
    <!-- Row 7 -->
    <article class="row1 nhl">
      <ul>
        <li><a href="#">4th</a></li>
        <li><?php echo $row['TeamName'] ?></li>
        <li><?php echo $row['wins'] ?></li>
        <li><?php echo $row['losses'] ?></li>
        <li><?php echo $row['dif'] ?></li>
      </ul>
	</article>  
	<?php } ?>
	
	<?php
	$sql = "SELECT TeamName,wins,losses,wins-losses AS dif FROM team ORDER BY dif DESC LIMIT 1 OFFSET 4;";
    $result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql);
	
    while ($row = $result->fetch_assoc()) { ?>
    <!-- Row 10 -->
    <article class="row1 pga">
      <ul>
        <li><a href="#">5th</a></li>
        <li><?php echo $row['TeamName'] ?></li>
        <li><?php echo $row['wins'] ?></li>
        <li><?php echo $row['losses'] ?></li>
        <li><?php echo $row['dif'] ?></li>
      </ul>
	</article>
	<?php } ?>
  </section>
  
</div>


	<?php include 'footer.php';?>

	</body>
</html>

