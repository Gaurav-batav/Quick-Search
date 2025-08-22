<?php 
require_once("includes/config.php");
if(!empty($_POST["contact_info"])) {
	$mobile_no= $_POST["contact_info"];
	
		$result =mysqli_query($conn,"SELECT contact_info FROM  users WHERE contact_info='$mobile_no'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Mobile number already exists .</span>";
// echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Mobile number available .</span>";
// echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>