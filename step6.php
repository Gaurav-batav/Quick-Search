<?php include('header3.php');?>
<?php

	if(isset($_POST['add5'])){
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
				   // $_SESSION['success'] = 'Product added successfully';
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

	header('location: finish.php');

?>
    

      <section class="pt70 pb40 bgc-f7">
     
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 position-relative">
            <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Accept Payment</h3>
              <p class="text mb25">Aliquam lacinia diam quis lacus euismod</p>
              <form class="form-style1">
                <div class="row">
                  <div class="col-lg-4 mb30">
                            <div class="checkbox-style1">
                              <label class="custom_checkbox">Cash
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">NEFT
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Credit Card
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              
                              
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="checkbox-style1">
                              <label class="custom_checkbox">Google Pay
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Pay Pal
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                             
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="checkbox-style1">
                              <label class="custom_checkbox">Phone Pay
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Debit Card
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                          </div>
                  <div class="col-md-12">
                    <div class="d-grid ">
                      <a class="ud-btn btn-dark" href="timing.php">Submit<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
<?php include('footer.php');?>