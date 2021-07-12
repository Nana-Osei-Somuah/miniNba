<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
include 'sidebar.php';
?>

<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
       

                <?php
                    include_once 'database.php';
                    include_once 'user.php';
                    include_once 'teamclass.php';

                    // get database connection
                    $database = new Database();
                    $db = $database->getConnection();
                        
                    $team = new Team($db);
                    $conn = $db;
                ?>
               


               <?php
        $stmt = $team->AllTeams();

        if($stmt->rowCount() > 0){
            //All echos display html elements
            echo '
            <table class="table table-dark table-striped">';
            echo '<thead>
                <tr>
                    <th>Team</th>
                    <th>Wins</th>
                    <th>Losses</th>
                    <th> </th>   
                    <th> </th>
                    <th> </th>
                    
                </tr>
                </thead>';
            // Fill the table body with the values
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {            
                echo "<tr>";
                echo   "<td>{$row["TeamName"]}</td>
                        <td>{$row["wins"]}</td>
                        <td>{$row["losses"]}</td>
                        <td><form method= 'post' action ='adminResults.php' id='form'><button type='submit' name='edit1' value ="; echo $row["Team_ID"]; 
                        echo ">Store ID</button></form></td>
                        <td><form method= 'post' action ='adminResults.php'>
                            <button type='button' value ='$row[Team_ID]' name='edit' data-toggle='modal' data-target='#stateditmodal' style='background-color:grey; border:1px solid black; color:white;'> 
                            Update Results</button></form>
                        </td>                                    
                    </tr>";}
            echo  "</table>";
        }

// updates team results if the post methode = updateteam
 if(isset($_POST['updateteam'])){   
        $teamid=$_POST['Team_ID'];
        $wins=$_POST['wins'];
        $losses=$_POST['losses'];

        $query1 = "UPDATE `team` SET `wins` = '$wins', 
        `losses` = '$losses' WHERE `team`.`Team_ID` = '$teamid'";

        $stmt1 = $conn->prepare($query1);
        $true = $stmt1->execute();

        if($true)
        {   echo "<script defer>";
            echo "alert('Done! Result changed Sucessfully');      
            window.location.href='adminResults.php';
                </script>";
        }
        else
        {   echo $teamid;
            echo "<script defer>";
            echo "alert('Error! Unable to Edit. Please store user ID first.');
            window.location.href='adminResults.php';      
                </script>";
        }
    
        }

        ?>    

                                   <!-- Modal -->
    <div class="modal fade" id="stateditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Update Results</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <form method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label> Wins </label>
                <input type="number"  name="wins" class="form-control" placeholder="Wins">
            </div>

            <div class="form-group">
                <label> Losses </label>
                <input type="number"  name="losses" class="form-control" placeholder="Losses">
            </div>

            <input type="hidden" value= " <?php echo $_POST['edit1']; ?>" name="Team_ID">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateteam" class="btn btn-primary" style="background-color:blue;">Update Results</button>
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