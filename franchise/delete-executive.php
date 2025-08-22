<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM tbl_executive WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Executive deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Franchise to delete first';
	}

	header('location: active-executive.php');
	
?>