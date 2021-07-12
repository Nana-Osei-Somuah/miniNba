<?php
class User{
    // database connection and table name
    private $conn;
    private $table_name = "nba_admin";

    // object properties
    public $login;
    public $email;
    public $password;
    
    

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // login user
    function login(){
        //Select all Query
        $query = "SELECT
                    Admin_ID,Admin_Email, Admin_Password
                FROM
                    " . $this->table_name . " 
                WHERE
                    Admin_Email='".$this->login."' AND Admin_Password='".$this->password."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    function user(){
        //Select all Query
        $query = "SELECT Admin_ID, Admin_Email, Admin_Password,
                    FROM  . $this->table_name . ";

         // prepare query statement
         $stmt = $this->conn->prepare($query);
         // execute query
         $stmt->execute();
         return $stmt;

    }
    function allusers(){
        //Select all Query
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name;
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function addUser(){
        // query to insert record
        $query = "INSERT INTO nba_admin(Admin_Email, Admin_Password) 
                VALUES ('$this->email', '$this->password')";
        // prepare query
        $stmt = $this->conn->prepare($query);
            
        // execute query
        $stmt->execute();
        return $stmt;
    }
    

}
?>