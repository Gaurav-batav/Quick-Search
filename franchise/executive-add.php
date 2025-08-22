<?php include'includes/session.php';?>
<?php
//	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$f_id = $_POST['f_id'];
		$e_id = $_POST['e_id'];
		$executive_name = $_POST['executive_name'];
		$phone_no = $_POST['phone_no'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$password = $_POST['password'];
	//	$password = password_hash($password, PASSWORD_DEFAULT);
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM tbl_executive WHERE e_id=:e_id");
		$stmt->execute(['e_id'=>$e_id]);
		$row = $stmt->fetch();
        $pid = rand();
		if($row['total'] > 0){
			$_SESSION['error'] = 'Executive already exist';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
	
		
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_executive ( f_id, e_id, executive_name,phone_no, email, password, status) VALUES (:f_id , :e_id, :executive_name, :phone_no, :email, :password, :status)");
				$stmt->execute(['f_id'=>$f_id, 'e_id'=>$e_id, 'executive_name'=>$executive_name, 'phone_no'=>$phone_no, 'email'=>$email, 'password'=>$password, 'status'=>$status]);
				$_SESSION['success'] = 'Executive added successfully';

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

	header('location: active-executive.php');

?>