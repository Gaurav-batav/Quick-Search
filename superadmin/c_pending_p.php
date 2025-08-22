<?php
include'includes/session.php';
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
		$status = $_POST['status'];
		$active_date = date('d-m-Y');
		$expire_date = date('d-m-Y', strtotime($active_date. ' +2 month'));
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET status=:status, active_date=:active_date, expire_date=:expire_date WHERE id=:id");
			$stmt->execute(['status'=>$status,'active_date'=>$active_date, 'expire_date'=>$expire_date,  'id'=>$id]);
			$_SESSION['success'] = 'Profile Status Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';


	}
	header('location: pending-profile.php');
	
?>