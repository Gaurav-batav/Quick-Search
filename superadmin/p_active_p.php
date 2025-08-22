<?php
include'includes/session.php';
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
		$paid_status = $_POST['paid_status'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET paid_status=:paid_status WHERE id=:id");
			$stmt->execute(['paid_status'=>$paid_status, 'id'=>$id]);
			$_SESSION['success'] = 'Paid Profile Status Updated Successfully !!';
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