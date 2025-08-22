<?php 
require_once("includes/config.php");
if(!empty($_POST["email_check"])) {
	$email = $_POST["email_check"];
	
		$result =mysqli_query($conn,"SELECT email FROM  users WHERE email='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email already exists .</span>";
// echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available .</span>";
// echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>