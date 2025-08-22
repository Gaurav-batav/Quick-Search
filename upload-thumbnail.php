<?php include('header3.php');?>
<?php
	if(isset($_POST['submit'])){
	$profile_id=$_POST['profile_id'];

		$conn = $pdo->open();

		try{
		//	$_SESSION['success'] = 'Product Updated Successfully !!';
			for ($i=0; $i < count($_POST['day_id']) ; $i++){
				$day_id=$_POST['day_id'][$i];
				$open_at=$_POST['open_at'][$i];
				$close_at=$_POST['close_at'][$i];
				$close_id=$_POST['close_id'][$i];
				$stmt = $conn->prepare("INSERT INTO tbl_business_hrs(profile_id, day_id, open_at, close_at, close_id) VALUES (:profile_id, :day_id, :open_at, :close_at, :close_id)");
				$stmt->execute(['profile_id'=>$profile_id,'day_id'=>$day_id, 'open_at'=>$open_at, 'close_at'=>$close_at, 'close_id'=>$close_id]);
				}
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';
	}

	//header('location: addprofile-step4.php');

?>

    <section class="pt70 pb40 bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 position-relative">
                    <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
                        <h3 class="form-title">Upload Images</h3>
                        <p class="text mb25">Select required thumbnail</p>
                            <form class="needs-validation" method="post" action="finish.php" enctype="multipart/form-data"  novalidate>
                            <div class="row">
                                <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">
                                <div class="col-lg-12">
                                    <div class="upload-img position-relative overflow-hidden bdrs12 text-center mb30 px-2">
                                        <img src="images/istockphoto-1222357475-612x612.jpg" id="blah" width="150" class="icon" height="150">
                                            <h4 class="title fz17 mb10">Upload photos of your Profile</h4>
                                            <p class="text mb25">Photos must be JPEG or PNG format and least 2048x768</p>
                                            <input id="image" name="thumbnail" accept=".jpg,.png,.jpeg" hidden type="file" required/>
                                            <label for="image" class="ud-btn btn-white" tabindex="0">Browse Files<i class="fal fa-arrow-right-long"></i>        </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid ">
                                            <button type="submit" name="add5" class="ud-btn btn-dark">Next<i class="fal fa-arrow-right-long"></i></button>
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
<script>
    image.onchange = evt => {
    const [file] = image.files
    if (file) {
    blah.src = URL.createObjectURL(file)
    }
    }
    </script>