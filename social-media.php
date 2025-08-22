<?php include('header3.php');?>
    <!-- Breadcumb Sections -->
<?php
	if(isset($_POST['add2'])){
	$profile_id=$_POST['profile_id'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$zipcode=$_POST['zipcode'];
	$location=$_POST['location'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET profile_id=:profile_id, state=:state, city=:city, zipcode=:zipcode, location=:location WHERE profile_id=:profile_id");
			$stmt->execute(['profile_id'=>$profile_id, 'state'=>$state, 'city'=>$city, 'zipcode'=>$zipcode, 'location'=>$location]);
		//	$_SESSION['success'] = 'Product Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';
	}

	//header('location: active-product.php');

?>    

       <section class="pt70 pb40 bgc-f7">
     
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 position-relative">
            <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Social Media</h3>
              <p class="text mb25">Fill required social media details</p>
              <form class="form-style1" method="POST" action="product-services">
                <div class="row">
                     <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Facebook</label>
                      <input type="url" class="form-control" name="fb" placeholder="Enter URL ">
                    </div>
                  </div>

                   <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Instagram</label>
                      <input type="url" name="insta" class="form-control" placeholder="Enter URL ">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Linkdin</label>
                      <input type="text"  name="linkdin" class="form-control" placeholder="Enter URL ">
                    </div>
                  </div>
                

                 <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">YouTube</label>
                      <input type="text" name="youtube" class="form-control" placeholder="Enter URL ">
                    </div>
                  </div>
                   
                   <div class="col-lg-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Google</label>
                      <input type="text" name="google" class="form-control" placeholder="Enter URL ">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="d-grid">
                        <button class="ud-btn btn-dark" type="submit" name="add3">Next<i class="fal fa-arrow-right-long"></i></button>
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