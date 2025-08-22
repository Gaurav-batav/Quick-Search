<?php include'includes/session.php';?>
<?php
//	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$franchise_id = $_POST['franchise_id'];
		$franchise_name = $_POST['franchise_name'];
		$owner_name = $_POST['owner_name'];
		$contact_no = $_POST['contact_no'];
		$alt_phone = $_POST['alt_phone'];
		$landline_no = $_POST['landline_no'];
		$alt_landline_no = $_POST['alt_landline_no'];
		$email = $_POST['email'];
		$alt_email = $_POST['alt_email'];
		$website = $_POST['website'];
		$adhar_no = $_POST['adhar_no'];
		$pan_no = $_POST['pan_no'];
		$gst = $_POST['gst'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$address = $_POST['address'];
		$status = $_POST['status'];
		$password = $_POST['password'];
	//	$password = password_hash($password, PASSWORD_DEFAULT);
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM tbl_franchise  WHERE franchise_id=:franchise_id");
		$stmt->execute(['franchise_id'=>$franchise_id]);
		$row = $stmt->fetch();
        $pid = rand();
		if($row['total'] > 0){
			$_SESSION['error'] = 'Profile already exist';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
	
		
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_franchise ( franchise_id, franchise_name, owner_name,contact_no, alt_phone, landline_no, alt_landline_no, email, alt_email, website, adhar_no, pan_no, gst, state, city, address, password, status) VALUES (:franchise_id , :franchise_name, :owner_name, :contact_no, :alt_phone, :landline_no, :alt_landline_no, :email, :alt_email, :website, :adhar_no, :pan_no, :gst, :state, :city, :address, :password, :status)");
				$stmt->execute(['franchise_id'=>$franchise_id, 'franchise_name'=>$franchise_name, 'owner_name'=>$owner_name, 'contact_no'=>$contact_no, 'alt_phone'=>$alt_phone, 'landline_no'=>$landline_no, 'alt_landline_no'=>$alt_landline_no, 'email'=>$email, 'alt_email'=>$alt_email, 'website'=>$website, 'adhar_no'=>$adhar_no, 'pan_no'=>$pan_no, 'gst'=>$gst, 'state'=>$state, 'city'=>$city, 'address'=>$address, 'password'=>$password, 'status'=>$status]);
				$_SESSION['success'] = 'Franchise added successfully';

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

	header('location: active-franchise.php');

?>