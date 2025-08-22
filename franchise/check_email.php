<?php  
require_once("includes/config.php");
if(isset($_POST["email"]))
{
 $email = mysqli_real_escape_string($conn, $_POST["email"]);
 $query = "SELECT * FROM users WHERE email = '".$email."'";
 $result = mysqli_query($conn, $query);
 echo mysqli_num_rows($result);
}
?>
