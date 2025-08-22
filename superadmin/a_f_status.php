<?php
include'includes/session.php';
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
		$status = $_POST['status'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_franchise SET status=:status WHERE id=:id");
			$stmt->execute(['status'=>$status, 'id'=>$id]);
			$_SESSION['success'] = 'Franchise Status Updated Successfully !!';
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