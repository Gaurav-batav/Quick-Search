<?php
include'includes/session.php';
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
			$filename = $_FILES['image']['name'];

		$conn = $pdo->open();
	    if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/icon/industry/'.$new_filename);	
		}
		try{
			$stmt = $conn->prepare("UPDATE industries SET image=:image WHERE id=:id");
			$stmt->execute(['image'=>$new_filename,'id'=>$id]);
			$_SESSION['success'] = 'Industry Icon Updated Successfully !!';
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