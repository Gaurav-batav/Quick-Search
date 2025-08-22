<?php
include'includes/session.php';
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	    $id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact_info = $_POST['contact_info'];
		$password = $_POST['password'];
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE users SET name=:name, email=:email, contact_info=:contact_info, password=:password  WHERE id=:id");
			$stmt->execute(['name'=>$name,'email'=>$email, 'contact_info'=>$contact_info, 'password'=>$password, 'id'=>$id]);
			$_SESSION['success'] = 'User Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';


	}
	header('location: active-user.php');
	
?>