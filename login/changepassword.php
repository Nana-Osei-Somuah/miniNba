<?php
include_once 'user.php';
session_start();
include 'sidebar.php';
// checking which admin has signed in
$_SESSION["Admin_ID"];

$conn = mysqli_connect("localhost", "root", "", "nos26262022") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from `nba_admin` WHERE Admin_Id='" . $_SESSION["Admin_ID"] . "'");
    $row = mysqli_fetch_array($result);
    
    //query to change password
    if ($_POST["currentPassword"] == $row["Admin_Password"]) {
        mysqli_query($conn, "UPDATE `nba_admin` set Admin_Password='" . $_POST["newPassword"] . "' WHERE Admin_ID='" . $_SESSION["Admin_ID"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>



<link rel="stylesheet" type="text/css" href="style3.css" />
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

// validation with javascript
if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<body class="mbody">

    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message" style="color:green; background-color: white"><?php if(isset($message)) { echo $message; } ?></div>
            <table style = "border:0" cellpadding="10" cellspacing="0"
                width="500" style = "align: center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2"><strong>Change Password</strong></td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit1"></td>
                </tr>
            </table>
        </div>
    </form>


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