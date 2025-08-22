<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['login']))
{
 $contact_info = $_POST['contact_info'];
$password = $_POST['password'];
$ret=mysqli_query($conn,"SELECT * FROM users WHERE contact_info='$contact_info' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="index.php";//
$_SESSION['user']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['user'] = $num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:dashboard");
exit();
}
else
{
$_SESSION['errmsg']="Invalid email or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:index.php");
exit();
}
}
?>
