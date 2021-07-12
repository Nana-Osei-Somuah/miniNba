<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
define('ROOT_PATH', dirname(__DIR__) . '/../');
include_once 'database.php';
include_once 'user.php';
include_once 'playersclass.php';
include_once 'teamclass.php';
session_start();
include 'sidebar.php';

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<style>
    th {
         font-weight: 600;
         font-size: 12pt;
         color: white;
         background-color: #9c2222c9;
    }

    body{
        background-image: url('images/bg-03.jpg');
    }
</style>            
<div class="container-contact2">
<div id="page-wrapper">
  <div class="container-fluid">

          <div>
            <?php
            // get database connection
            $database = new Database();
            $db = $database->getConnection();
                
            // prepare user object
            $players = new Players($db);
            $conn = $db;
            ?>
                <div class="row" style="padding:20px 0px 20px 50px;" >
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#playeraddmodal" style="background-color:blue;">
                        ADD PLAYER
                    </button>
                </div>

              
                <!-- Modal for Admin to add a player -->
    <div class="modal fade" id="playeraddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Add Player </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <form action="insertplayer.php" method="POST">


        <div class="modal-body">

            <div class="form-group">
                <label> Team </label>
                <select class="form-control" name="team" required>
                    <option value="">---Select---</option>
                    <option value="2">Clippers</option>
                    <option value="3">Kings</option>
                    <option value="4">Lakers</option>  
                    <option value="5">Suns</option> 
                    <option value="6">Warriors</option>            
                </select>
            </div>

            <div class="form-group">
                <label> Kit Number </label>
                <input type="number" name="knumber" class="form-control" placeholder="Enter Kit Number">
            </div>

            <div class="form-group">
                <label> First Name </label>
                <input type="text" class="form-control" name="fname"  required>
            </div>

            <div class="form-group">
                <label> Last Name</label>
                <input type="text" class="form-control" name="lname"  required>
            </div>

            <div class="form-group">
                <label> Position </label>
                <select class="form-control" name="position" required>
                    <option value="">---Select---</option>
                    <option value="PG">PG</option>
                    <option value="SG">SG</option>
                    <option value="PF">PF</option>  
                    <option value="SF">SF</option> 
                    <option value="C">C</option>            
                </select>
            </div>

            
            <div class="form-group">
                <label> Player Photo </label>
                <input type="file" name="photo" accept="image/png, image/jpeg">
            </div>

            <div class="form-group">
                <label> GP </label>
                <input type="number" name="gp" class="form-control" placeholder="Games Played">
            </div>

            <div class="form-group">
                <label> PPG </label>
                <input type="number" step="any" name="ppg" class="form-control" placeholder="PPG">
            </div>

            <div class="form-group">
                <label> APG </label>
                <input type="number" step="any" name="apg" class="form-control" placeholder="APG">
            </div>

            <div class="form-group">
                <label> RPG </label>
                <input type="number" step="any" name="rpg" class="form-control" placeholder="RPG">
            </div>

            <div class="form-group">
                <label> BPG </label>
                <input type="number" step="any" name="bpg" class="form-control" placeholder="BPG">
            </div>

            <div class="form-group">
                <label> SPG </label>
                <input type="number" step="any" name="spg" class="form-control" placeholder="SPG">
            </div>

            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="insertplayer" class="btn btn-primary" style="background-color:blue;">Add Player</button>
        </div>
    </form>



    </div>
    </div>
    </div>


         <?php
        //  displaying all players in a table
            $stmt = $players->AllPlayers();
             
            if($stmt->rowCount() > 0){
                //All echos display html elements
                echo '
                
                <table class="table table-dark table-striped">';
                echo '<thead>
                    <tr>
                        <th>Name</th>
                        <th>Team</th>
                        <th>Kit Number</th>
                        <th>PPG</th>
                        <th>RPG</th>
                        <th>APG</th>
                        <th>SPG</th>
                        <th>BPG</th>
                        <th> </th>   
                        <th> </th>
                        <th> </th>
                        
                    </tr>
                    </thead>';
                // Fill the table body with the values
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {            
                    echo "<tr>";
                       echo     "<td>"; echo  $row["fname"]; echo" "; echo $row["lname"]; echo"</td>";

                   echo     "<td>{$row["TeamName"]}</td>
                            <td>{$row["KitNumber"]}</td>
                            <td>{$row["PointsPG"]}</td>
                            <td>{$row["ReboundsPG"]}</td>
                            <td>{$row["AssistsPG"]}</td>
                            <td>{$row["StealsPG"]}</td>
                            <td>{$row["BlocksPG"]}</td>
                            <td><form method= 'post' action ='adminPlayers.php' id='form'><button type='submit' name='edit1' value ="; echo $row["Player_ID"]; 
                            echo ">Store ID</button></form></td>
                            <td><form method= 'post' action ='adminPlayers.php'>
                                <button type='button' value ='$row[Player_ID]' name='edit' data-toggle='modal' data-target='#stateditmodal' style='background-color:grey; border:1px solid black; color:white;'> 
                                Update Stats </button></form>
                            </td>
                            <td><form method= 'post' action ='adminPlayers.php'>
                                <button type='submit' value ='$row[Player_ID]' name='delete' style='background-color:#9c2222c9; border:1px solid black; color:white;'> 
                                Delete </button></form>
                            </td>
                                
                        </tr>";}
                echo  "</table>";
            }

            if(isset($_POST['delete'])){
                $query = "DELETE  
                FROM
                    players
                WHERE
                Player_ID ='$_POST[delete]'";
                // prepare query statement
                $stmt = $conn->prepare($query);
                // execute query
                $stmt->execute();
                if($stmt->execute() === true){
                    $query1 = "UPDATE team SET RosterSize= RosterSize - 1 WHERE Team_ID= $row[Team_ID]";
                    $stmt1 = $conn->prepare($query1);
                    // execute query
                    $stmt1->execute();
                    echo '<script>';
                    echo 'swal("Done!", "Player sucessfully deleted!", "success").then(function() {
                        window.location = "adminPlayers.php";
                    });
                        </script>';
                        return true;  
                }else{
                    echo '<script>';
                    echo 'swal("Unable to Delete!", "Hmm...It seems there was a problem deleting the player", "error").then(function() {
                        window.location = "adminPlayers.php";
                    });
                        </script>';
                        return false;  
                }
                    
            }

    if(isset($_POST['updateplayer'])){   
    $playerid=$_POST['Player_ID'];
    $points=$_POST['newp'];
    $assists=$_POST['newa'];
    $rebounds=$_POST['newr'];
    $blocks=$_POST['newb'];
    $steals=$_POST['news'];
    // query increases games played by 1 each time a player's game stats are updated
    $query1 = "UPDATE players SET PointsPG = ((PointsPG * GP) + $points) /(GP+1), AssistsPG= ((AssistsPG * GP) + $assists) /(GP+1), 
    ReboundsPG = ((ReboundsPG * GP) + $rebounds) /(GP+1), BlocksPG = ((BlocksPG * GP) + $blocks) /(GP+1), 
    StealsPG = ((StealsPG * GP) + $steals) /(GP+1), GP = GP + 1 WHERE Player_ID = $playerid";

    $stmt1 = $conn->prepare($query1);
    $true = $stmt1->execute();

    if($true)
    {   echo "<script defer>";
        echo "alert('Done! Edit Sucessfull');      
        window.location.href='adminPlayers.php';
            </script>";
    }
    else
    {   echo $playerid;
        echo "<script defer>";
        echo "alert('Error! Unable to Edit. Please store user ID first.');
        window.location.href='adminPlayers.php';      
            </script>";
    }
    
    }

    ?>    


                           <!-- Modal for updating player stats-->
    <div class="modal fade" id="stateditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Update Stats</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <form method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label> Points </label>
                <input type="number" step="any" name="newp" class="form-control" placeholder="Points">
            </div>

            <div class="form-group">
                <label> Assists </label>
                <input type="number" step="any" name="newa" class="form-control" placeholder="Assists">
            </div>

            <div class="form-group">
                <label> Rebounds </label>
                <input type="number" step="any" name="newr" class="form-control" placeholder="Rebounds">
            </div>

            <div class="form-group">
                <label> Blocks </label>
                <input type="number" step="any" name="newb" class="form-control" placeholder="Blocks">
            </div>

            <div class="form-group">
                <label> Steals </label>
                <input type="number" step="any" name="news" class="form-control" placeholder="Steals">
            </div>
            <input type="hidden" value= " <?php echo $_POST['edit1']; ?>" name="Player_ID">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateplayer" class="btn btn-primary" style="background-color:blue;">Update Stats</button>
        </div>
    </form>



    </div>
    </div>
    </div>
             
          </div>

  </div>
</div>
</div>






</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
