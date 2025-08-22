<?php
include'includes/session.php';
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
		$password = $_POST['password'];
	//	$password = password_hash($password, PASSWORD_DEFAULT);

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_franchise SET password=:password WHERE id=:id");
			$stmt->execute(['password'=>$password, 'id'=>$id]);
			$_SESSION['success'] = 'Franchise Password Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';


	}
	header('location: active-franchise.php');
	
?>