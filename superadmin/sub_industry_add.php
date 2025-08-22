<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['add'])){
		$ind_id = $_POST['ind_id'];
		$name = $_POST['name'];
		$s_slug = slugify($name);
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM sub_industries  WHERE s_slug=:s_slug");
		$stmt->execute(['s_slug'=>$s_slug]);
		$row = $stmt->fetch();

		if($row['total'] > 0){
			$_SESSION['error'] = 'Sub industry already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		//	$filename = $_FILES['icon']['name'];
			//$now = date('Y-m-d');
			try{
				$stmt = $conn->prepare("INSERT INTO sub_industries(ind_id, name,  s_slug, status) VALUES (:ind_id, :name, :s_slug, :status)");
				$stmt->execute(['ind_id'=>$ind_id, 'name'=>$name, 's_slug'=>$s_slug, 'status'=>$status]);
				$_SESSION['success'] = 'Sub Industry added successfully';

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

	header('location: sub-industries.php');

?>