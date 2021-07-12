<?php include 'connect.php';?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>League leaders</title>

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
	<style>

    select{
        width:300px;
        height:30px;
       
    }
</style>

    <div style="margin-left:30%;">
		<!-- Dropdown menu for various categories -->
        <form action="leaders.php" method="POST">
            <br><label style="color:white;">Search for:</label>
            <select name = "category" id = "category" required>
                <option value = "PointsPG">Points per Game</option>
                <option value = "AssistsPG">Assists per Game</option>
                <option value = "ReboundsPG">Rebounds per Game</option>
                <option value = "StealsPG">Steals per Game</option>
                <option value = "BlocksPG">Blocks per Game</option>
            </select>
                <button class="filter"  type="submit" name="filter" style ="background-color:orangered; color:black">Search</button>
        </form>
    </div>

					<?php 
					// checks if a category has been selected 
                    if(isset($_POST['category'])){
						// assigns category to a variable
						$search = $_POST['category'];
						// query to get first 5 for that category
                        $query = "SELECT * FROM players ORDER BY `$search` DESC LIMIT 5 OFFSET 0";
						$result = mysqli_query($conn,$query) or die ('request "Could not execute SQL query" '.$sql);
                	?>
							<div class="container">
								<div class="row animate-box">
									<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
										<h2>League Leaders</h2>
										<p>Here are your league leaders in <?php echo $_POST['category'] ?> this far</p>
									</div>
								</div>
								<div class="row">
								
									<div class="pricing">
									<?php  
										while ($row = $result->fetch_assoc()) { 
											?>	 
										<div class="col-md-3 animate-box">
											<div class="price-box">
												<h2 class="pricing-plan"><?php echo $row['fname']. ' '.$row['lname']?></h2>
												<img src="<?php echo $row['player_photo'] ?>" alt="bam" width="150" height="150">
												<ul class="classes">
													<strong><li style="color:orangered"><?php echo $_POST['category'] ?>: <?php echo $row[$search] ?></li></strong>	
												</ul>
											</div>		
										</div>				
					<?php } 
						}
					else{
						// if no category is selected thev5 players with the highest category is returned
						$query = "SELECT * FROM players ORDER BY `PointsPG` DESC LIMIT 5 OFFSET 0";
						$result = mysqli_query($conn,$query) or die ('request "Could not execute SQL query" '.$sql);
					
					?>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>League Leaders</h2>
							<p>Here are your league leaders this far</p>
						</div>
					</div>
					<div class="row">
								
					<div class="pricing">
					<?php  
						while ($row = $result->fetch_assoc()) { ?>
						<div class="col-md-3 animate-box">
							<div class="price-box">
								<h2 class="pricing-plan"><?php echo $row['fname']. ' '.$row['lname']?></h2>
								<img src="<?php echo $row['player_photo'] ?>" alt="bam" width="150" height="150">
								<ul class="classes">
									<strong><li >PointsPG: <?php echo $row['PointsPG'] ?></li></strong>
									
								</ul>
							</div>		
						</div>
						<?php 
							}
						}
						?>
						
	
	
	<?php include 'footer.php';?>
	</body>
</html>

