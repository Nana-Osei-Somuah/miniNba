<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php


//Get database connection
include_once 'database.php';


include_once 'addAdmin.php';

$database = new Database();
$db = $database-> getConnection();
//creating user object
$user = new User($db);                       
 
// assigning email and password from the form on the addAdmin.php page
$user->email = $_POST['email'];
$user->password = $_POST['pass'];


// call the function that adds a user wnd checks if use was successfully added
if($user->addUser()){
    echo '<script defer>';
    echo 'swal("Done!", "New admin was added successfully!", "success").then(function() {
        window.location = "addAdmin.php";
    });
    </script>';
 
}else{
    echo '<script defer>';
    echo 'swal("Something went wrong!", "Sorry, Failed to add new admin!", "error").then(function() {
        window.location = "addAdmin.php";
    });
    </script>';

}

?>