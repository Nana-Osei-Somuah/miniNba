<?php
class Team{
    // database connection and table name
    private $conn;
    private $table_name = "team";

    // object properties
    public $Team_ID;
    public $TeamName;
    public $RosterSize;
    public $Arena;
    public $Team_Logo;
    public $Head_Coach;
    public $wins;
    public $losses;
    public $biglogo;
    
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // login user
    function AllTeams(){
        //Select all Query
        $query = "SELECT * 
                FROM  
                    team";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function updateRosterSize(){
        $query = "UPDATE team SET RosterSize= RosterSize + 1 WHERE Team_ID= $this->Team_ID";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    

}
?>