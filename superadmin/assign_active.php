<?php
include'includes/session.php';
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
		$user_id = $_POST['user_id'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET user_id=:user_id WHERE id=:id");
			$stmt->execute(['user_id'=>$user_id, 'id'=>$id]);
			$_SESSION['success'] = 'Profile Assign To User Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';


	}
	header('location: active-profile.php');
	
?>