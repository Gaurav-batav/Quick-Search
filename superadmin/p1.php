<?php
	include 'include/session.php';
//	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$profile_id = $_POST['profile_id'];
		$category_id = $_POST['category_id'];
		$sub_category_id = $_POST['sub_category_id'];
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM tbl_profile WHERE profile_id=:profile_id");
		$stmt->execute(['profile_id'=>$profile_id]);
		$row = $stmt->fetch();
        $pid = rand();
		if($row['total'] > 0){
			$_SESSION['error'] = 'Profile already exist';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
	
		
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_profile ( profile_id, category_id, sub_category_id) VALUES (:profile_id , :category_id, :sub_category_id)");
				$stmt->execute(['profile_id'=>$profile_id, 'category_id'=>$category_id, 'sub_category_id'=>$sub_category_id]);
				//$_SESSION['success'] = 'Product added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		//$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up product form first';
	}

	header('location: addprofile-step1.php');

?>