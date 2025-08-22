<?php
include'includes/session.php';
	if(isset($_POST['add3'])){
		$profile_id = $_POST['profile_id'];
		
		$originalPath = "uploads/original/";
        $smallPath = "uploads/small/";
        $mediumPath = "uploads/medium/";
        $largePath = "uploads/large/";
        
        if (!file_exists($originalPath)) {
        mkdir($originalPath, 0777, true);
        }
        if (!file_exists($smallPath)) {
            mkdir($smallPath, 0777, true);
        }
        if (!file_exists($mediumPath)) {
            mkdir($mediumPath, 0777, true);
        }
        if (!file_exists($largePath)) {
            mkdir($largePath, 0777, true);
        }
        
        $image = $_FILES['image']['tmp_name'];
        $imageInfo = getimagesize($image);
        $imageName = uniqid() . '.jpg';
    
        // Resize the image to small, medium, and large sizes
        $smallWidth = 80;
        $mediumWidth = 400;
        $largeWidth = 800;

        $smallHeight = $imageInfo[1] * ($smallWidth / $imageInfo[0]);
        $mediumHeight = $imageInfo[1] * ($mediumWidth / $imageInfo[0]);
        $largeHeight = $imageInfo[1] * ($largeWidth / $imageInfo[0]);
        
        $originalImage = imagecreatefromjpeg($image);
        $smallImage = imagecreatetruecolor($smallWidth, $smallHeight);
        $mediumImage = imagecreatetruecolor($mediumWidth, $mediumHeight);
        $largeImage = imagecreatetruecolor($largeWidth, $largeHeight);

        imagecopyresized($smallImage, $originalImage, 0, 0, 0, 0, $smallWidth, $smallHeight, $imageInfo[0], $imageInfo[1]);
        imagecopyresized($mediumImage, $originalImage, 0, 0, 0, 0, $mediumWidth, $mediumHeight, $imageInfo[0], $imageInfo[1]);
        imagecopyresized($largeImage, $originalImage, 0, 0, 0, 0, $largeWidth, $largeHeight, $imageInfo[0], $imageInfo[1]);

        imagejpeg($originalImage, $originalPath . $imageName);
        imagejpeg($smallImage, $smallPath . $imageName);
        imagejpeg($mediumImage, $mediumPath . $imageName);
        imagejpeg($largeImage, $largePath . $imageName);


		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM product_images WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		if($row['total'] > 0){
			$_SESSION['error'] = 'Product already exist';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			
			try{
			       
    				$stmt = $conn->prepare("INSERT INTO product_images(profile_id, original_path, small_path, medium_path, large_path) VALUES (:profile_id, :original_path, :small_path, :medium_path, :large_path)");
    				$stmt->execute(['profile_id'=>$profile_id,'original_path'=>$originalPath.$imageName,'small_path'=>$smallPath.$imageName, 'medium_path'=>$mediumPath.$imageName, 'large_path'=>$largePath.$imageName]);
				    $_SESSION['success'] = 'Image Add successfully';
    			} 
    			catch(PDOException $e){
    				$_SESSION['error'] = $e->getMessage();
    			}
    		}
    
    		$pdo->close();
    	}
    	else{
    		$_SESSION['error'] = 'Fill up product form first';
    	}
	header('location: active-profile.php');
?>