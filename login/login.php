
<?php
// include database and object files
include_once "database.php";
include_once "user.php";


// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);

//Error messages to be displayed is login credentials are not corrects
$errorlogin = "Incorrect Login credentials";

//Set variables
$user->login = isset($_POST['username']) ? $_POST['username'] : die('username');
$user->password = isset($_POST['password']) ? $_POST['password'] : die('password');

$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    session_start();    
    $_SESSION['Admin_Email'] = $row['Admin_Email'];
    $_SESSION['Admin_ID'] = $row['Admin_ID'];
    
        header('Location: adminTeam.php');
    
}
else{
    session_start();
    $_SESSION["error"] = $errorlogin;
    header("location: loginPage.php");
}

?>
