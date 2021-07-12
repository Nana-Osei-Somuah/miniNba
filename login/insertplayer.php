<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php


//Get database connection
include_once 'database.php';


include_once 'adminPlayers.php';


$database = new Database();
$db = $database-> getConnection();
$players = new Players($db);                       
$team = new Team($db); 

// assigning instance of player and team to their various attributes defined in adminPlayers.php
$players->TeamID = $_POST['team'];
$team->Team_ID = $players->TeamID;
$players->Kitnumber = $_POST['knumber'];
$players->fname=$_POST['fname'];
$players->lname=$_POST['lname'];
$players->position = $_POST['position'];
$players->player_photo = $_POST['photo'];
$players->GP = $_POST['gp'];
$players->PPG = $_POST['ppg'];
$players->RPG = $_POST['rpg'];
$players->APG = $_POST['apg'];
$players->SPG = $_POST['spg'];
$players->BPG = $_POST['bpg'];


// checking if player's team has less than 10 players before adding him
if($players->countPlayers() < 10){
    if($players->InsertPlayer()){
        // increasing team roster size if player is added successfully
        $team->updateRosterSize();
        echo '<script defer>';
        echo 'swal("Done!", "Player was added successfully!", "success").then(function() {
            window.location = "adminPlayers.php";
        });
        </script>';
    }else{
        echo '<script defer>';
        echo 'swal("Something went wrong!", "Sorry, player insertion failed!", "error").then(function() {
            window.location = "adminPlayers.php";
        });
        </script>';
    }
}
else{
    echo '<script defer>';
    echo 'swal("Player insertion failed!", "Team has max(10) players", "error").then(function() {
        window.location = "adminPlayers.php";
    });
    </script>';  
}
?>