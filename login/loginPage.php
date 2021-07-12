<?php
session_start();
?>

 <!DOCTYPE html>
<html>
    
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" href="login.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="circle.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form name="Form" action="login.php" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="username" class="form-control input_user" value="" placeholder="email" onfocusout=" return validateForm()">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<?php
						// to display an error message to the user
							if(isset($_SESSION["error"])){
								$error = $_SESSION["error"];
								echo "<div class='alert alert-danger'>
								<strong>Error!</strong> $error.
							  </div>";
							}
                		?>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	            <button type="submit" class="btn login_btn">Login</button>
				            </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                            <button class="btn btn-success" onclick="location.href='../index.php'" type="button" style="padding-right:20px">Return to Homepage</button>
                            </div>
                    </form>
				</div>
		
			</div>
		</div>
	</div>
	<script src="validateForm.js"></script>
</body>
</html>

<?php
    unset($_SESSION["error"]);
?>
