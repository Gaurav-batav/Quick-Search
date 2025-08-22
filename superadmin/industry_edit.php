<?php
include'includes/session.php';
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
		$name = $_POST['name'];
		$status = $_POST['status'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE industries SET name=:name, status=:status WHERE id=:id");
			$stmt->execute(['name'=>$name, 'status'=>$status, 'id'=>$id]);
			$_SESSION['success'] = 'Industry Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';


	}
	header('location: industries.php');
	
?>