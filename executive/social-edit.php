<?php
include'includes/session.php';
	if(isset($_POST['update'])){
	$id=$_POST['id'];
	$fb=$_POST['fb'];
	$google=$_POST['google'];
	$linkdin=$_POST['linkdin'];
	$youtube=$_POST['youtube'];
	$insta=$_POST['insta'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET fb=:fb, google=:google, linkdin=:linkdin, youtube=:youtube, insta=:insta WHERE id=:id");
			$stmt->execute(['id'=>$id, 'fb'=>$fb, 'google'=>$google, 'linkdin'=>$linkdin, 'youtube'=>$youtube, 'insta'=>$insta]);
			$_SESSION['success'] = 'Social Media Updated Successfully !!';
		
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