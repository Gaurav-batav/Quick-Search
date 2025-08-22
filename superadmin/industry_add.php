<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['add'])){
		$status = $_POST['status'];
		$name = $_POST['name'];
		$cat_slug = slugify($name);
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM industries WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['total'] > 0){
			$_SESSION['error'] = 'industry already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['image']['name'];
			//$now = date('Y-m-d');
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/icon/industry/'.$new_filename);	
			}
			try{
			 $stmt = $conn->prepare("INSERT INTO industries(name, cat_slug, image, status) VALUES (:name, :cat_slug, :image, :status)");
				$stmt->execute(['name'=>$name, 'cat_slug'=>$cat_slug, 'image'=>$new_filename, 'status'=>$status]);
				$_SESSION['success'] = 'Industry added successfully';

		    }
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: industries.php');

?>