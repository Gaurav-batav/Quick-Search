<?php
include'includes/config.php';
if(isset($_POST['update'])){
$id = $_POST['id'];
$contact_info=$_POST['contact_info'];
$name=$_POST['name'];
$email=$_POST['email'];
$sql=mysqli_query($conn,"UPDATE users SET name='$name', contact_info='$contact_info', email='$email' WHERE id='$id'");
//$_SESSION['msg']="Product Updated Successfully !!";
header('location: my-profile');
}
?>