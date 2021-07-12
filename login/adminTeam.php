<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
define('ROOT_PATH', dirname(__DIR__) . '/../');
include_once 'database.php';
include_once 'user.php';
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
            $players = new Team($db);
            $conn = $db;
            ?>


    <?php
        $stmt = $players->AllTeams();

        if($stmt->rowCount() > 0){
            //All echos display html elements
            echo '
            <table class="table table-dark table-striped">';
            echo '<thead>
                <tr>
                    <th>Team</th>
                    <th>Roster Size</th>
                    <th>Arena</th>
                    <th>Head Coach</th>
                    <th> </th>   
                    <th> </th>
                    <th> </th>
                    
                </tr>
                </thead>';
            // Fill the table body with the values
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {            
                echo "<tr>";
                echo   "<td>{$row["TeamName"]}</td>
                        <td>{$row["RosterSize"]}</td>
                        <td>{$row["Arena"]}</td>
                        <td>{$row["Head_Coach"]}</td>
                        <td><form method= 'post' action ='adminTeam.php' id='form'><button type='submit' name='edit1' value ="; echo $row["Team_ID"]; 
                        echo ">Store ID</button></form></td>
                        <td><form method= 'post' action ='adminTeam.php'>
                            <button type='button' value ='$row[Team_ID]' name='edit' data-toggle='modal' data-target='#stateditmodal' style='background-color:grey; border:1px solid black; color:white;'> 
                            Update Coach</button></form>
                        </td>                                    
                    </tr>";}
            echo  "</table>";
        }

        if(isset($_POST['updateteam'])){   
            $Team_ID=$_POST['Team_ID'];
            $Head_Coach=$_POST['Head_Coach'];
            
        // query to update coach
            $query1 = "UPDATE team SET Head_Coach = '$Head_Coach' where Team_ID = $Team_ID";
            $stmt1 = $conn->prepare($query1);

            $true = $stmt1->execute();
        
            // sweet alert message for if query executes successfully
            if($true)
            {   echo "<script defer>";
                echo "alert('Done! Edit Sucessful');      
                window.location.href='adminTeam.php';
                    </script>";
            }
            // sweet alert message for if query executes unsuccessfully
            else
            {   echo $Team_ID;
                echo "<script defer>";
                echo "alert('Error! Unable to Edit. Please store user ID first.');
                window.location.href='adminTeam.php';      
                    </script>";
            }
            
        }
    
    ?>

                                      <!-- Modal for updating team coaches-->
    <div class="modal fade" id="stateditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Update Coach</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <form method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label> New Head Coach </label>
                <input type="text" name="Head_Coach" class="form-control" placeholder="Name">
            </div>
            <input type="hidden" value= " <?php echo $_POST['edit1']; ?>" name="Team_ID">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateteam" class="btn btn-primary" style="background-color:blue;">Update Coach</button>
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
