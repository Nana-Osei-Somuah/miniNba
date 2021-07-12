<?php
class Players{
    // database connection and table name
    private $conn;
    private $table_name = "players";

    // object properties
    public $PlayerID;
    public $TeamID;
    public $Kitnumber;
    public $fname;
    public $lname;
    public $position;
    public $player_photo;
    public $GP;
    public $PPG;
    public $RPG;
    public $APG;
    public $SPG;
    public $BPG;
   
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // login user
    function allPlayers(){
        
        //Select all Query
        $query = "SELECT * 
                FROM 
                    players
                INNER JOIN team ON players.Team_ID = team.Team_ID"  ;
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

        //insertRide Function
    function InsertPlayer(){
        // query to insert record
        $query = "INSERT INTO players(Team_ID, KitNumber, fname, lname, position,  player_photo, GP,PointsPG, AssistsPG, ReboundsPG, BlocksPG, StealsPG) 
        VALUES ($this->TeamID, $this->Kitnumber, '$this->fname', '$this->lname', '$this->position', '$this->player_photo', $this->GP,$this->PPG, $this->APG, $this->RPG, $this->BPG, $this->SPG)";
        // prepare query
        $stmt = $this->conn->prepare($query);
            
        // execute query
      $stmt->execute();
      return $stmt;
    }

    function countPlayers(){
        //counts number of players in a team
        $query = "SELECT COUNT(*) AS CurrentSize FROM players WHERE Team_ID = $this->TeamID";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['CurrentSize']; 
    }

    

    

}
?>