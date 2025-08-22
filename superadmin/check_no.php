<?php  
require_once("includes/config.php");
if(isset($_POST["contact_info"]))
{
 $contact_info = mysqli_real_escape_string($conn, $_POST["contact_info"]);
 $query = "SELECT * FROM users WHERE contact_info = '".$contact_info."'";
 $result = mysqli_query($conn, $query);
 echo mysqli_num_rows($result);
}
?>
