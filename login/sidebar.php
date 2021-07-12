<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MiniLeague Admin</title>
  

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">



  
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class='logo'>
        <img src="nba.png" alt="nba logo" width="30" height="48" style="float:left;">
      </div>
      <div  id="text1"><h4>Admin</h4> </div>
 
      <div class="list-group list-group-flush">
        <a href="adminTeam.php" class="list-group-item list-group-item-action bg-light">Teams</a>
        <a href="adminPlayers.php" class="list-group-item list-group-item-action bg-light">Players</a>
        <a href="adminResults.php" class="list-group-item list-group-item-action bg-light">Results</a>
        <a href="addAdmin.php" class="list-group-item list-group-item-action bg-light">New Admin</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle" style="background-color:blue;">Toggle Menu</button>
      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="changepassword.php">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Sign Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
