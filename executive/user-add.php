<?php include'includes/session.php';?>
<?php
//	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$franchise_id = $_POST['franchise_id'];
		$executive_id = $_POST['executive_id'];
		$email = $_POST['email'];
		$contact_info = $_POST['contact_info'];
		$status = $_POST['status'];
		$password = $_POST['password'];
		//$password = password_hash($password, PASSWORD_DEFAULT);
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM users WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
        $pid = rand();
		if($row['total'] > 0){
			$_SESSION['error'] = 'User already exist';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
	
		
			
			try{
				$stmt = $conn->prepare("INSERT INTO users (franchise_id, executive_id, name, email, contact_info, password, status) VALUES (:franchise_id, :executive_id, :name , :email, :contact_info, :password, :status)");
				$stmt->execute(['franchise_id'=>$franchise_id, 'executive_id'=>$executive_id, 'name'=>$name, 'email'=>$email, 'contact_info'=>$contact_info, 'password'=>$password, 'status'=>$status]);
				$_SESSION['success'] = 'User added successfully';

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

	header('location: active-user.php');

?>