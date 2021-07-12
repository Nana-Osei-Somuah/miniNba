<?php
  require_once 'connect.php';


  /**
   * This page is responsible for running a query to come up with a 
   * list of the most likely people the user is searching for.
   */
  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $query = "SELECT * FROM players WHERE fname LIKE '%$inpText%' OR lname LIKE '%$inpText%'";
    $result= $conn->query($query);
    
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
       //this is responsible for listen the possible names
        echo "<a href='#' class='list-group-item list-group-item-action border-1'>"; echo $row['fname']; echo" "; echo $row['lname']; echo "</a>";
      }
    } else {
      echo "<p class='list-group-item border-1'>No Record</p>";
    }
  }
?> 