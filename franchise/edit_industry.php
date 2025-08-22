<?php
include'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
		$category_id = $_POST['category_id'];
		$sub_category_id = $_POST['sub_category_id'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET category_id=:category_id, sub_category_id=:sub_category_id WHERE id=:id");
			$stmt->execute(['category_id'=>$category_id, 'sub_category_id'=>$sub_category_id, 'id'=>$id]);
			$_SESSION['success'] = 'Profile Industry Updated Successfully !!';
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