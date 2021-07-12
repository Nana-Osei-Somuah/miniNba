<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>head</title>
</head>
<body>
<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
				<div class="col-xs-12">
				<img src="images/nba.png" alt="nba logo" width="30" height="48">
				</div>	
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
				
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.php">MiniLeague<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>		
							<li class="has-dropdown">
								<a href="teams.php">Teams</a>
								<?php include 'connect.php';?>
								<?php
									$sql = "SELECT Team_ID FROM team";
    								$result = mysqli_query($conn,$sql) or die ('request "Could not execute SQL query" '.$sql); ?>
								<?php while ($row = $result->fetch_assoc()) { ?>
								<ul class="dropdown">
									<li><a href="specificteam.php?id=2">Clippers</a></li>
									<li><a href="specificteam.php?id=3">Kings</a></li>
									<li><a href="specificteam.php?id=4">Lakers</a></li>
									<li><a href="specificteam.php?id=5">Suns</a></li>
									<li><a href="specificteam.php?id=6">Warriors</a></li>	
								</ul>
								<?php } ?> 
							</li>
							<li><a href="news.php">News</a></li>
							<li><a href="standings.php">Standings</a></li>
							
							<li class="has-dropdown"><a href="players.php">Players</a>
								<ul class="dropdown">
								<li><a href="leaders.php">League Leaders</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
</body>
</html>