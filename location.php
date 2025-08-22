<?php include('header3.php');?>
<?php
	include 'includes/slugify.php';
	if(isset($_POST['add1'])){
	$profile_id=$_POST['profile_id'];
	$company_name=$_POST['company_name'];
	$slug = slugify($company_name);
	$experience=$_POST['experience'];
	$contact_person=$_POST['contact_person'];
	$phone=$_POST['phone'];
	$alt_phone=$_POST['alt_phone'];
	$whatsap_no=$_POST['whatsap_no'];
	$landline_no=$_POST['landline_no'];
	$alt_landline_no=$_POST['alt_landline_no'];
	$email=$_POST['email'];
	$alt_email=$_POST['alt_email'];
	$website=$_POST['website'];
	$gst=$_POST['gst'];
	$description=$_POST['description'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET company_name=:company_name, slug=:slug, experience=:experience, contact_person=:contact_person, phone=:phone, alt_phone=:alt_phone, whatsap_no=:whatsap_no, landline_no=:landline_no, alt_landline_no=:alt_landline_no, email=:email, alt_email=:alt_email, website=:website, gst=:gst, description=:description WHERE profile_id=:profile_id");
			$stmt->execute(['profile_id'=>$profile_id, 'company_name'=>$company_name, 'slug'=>$slug, 'experience'=>$experience, 'contact_person'=>$contact_person, 'phone'=>$phone, 'alt_phone'=>$alt_phone, 'whatsap_no'=>$whatsap_no, 'landline_no'=>$landline_no, 'alt_landline_no'=>$alt_landline_no, 'email'=>$email, 'alt_email'=>$alt_email,  'website'=>$website, 'gst'=>$gst, 'description'=>$description]);
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
              <h3 class="form-title">Location</h3>
              <p class="text mb25">Aliquam lacinia diam quis lacus euismod</p>
              <form class="form-style1" method="POST" action="social-media">
                <div class="row">
                      <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">
                  <div class="col-lg-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">State <span class="text-red">* </span></label>
                      <div class="location-area">
                                  <select class="selectpicker" data-live-search="true" data-width="100%" placeholder="Select Your State" name="state" required>
                                   <option selected value="">Choose...</option>
                                                    <?php
                                                            $conn = $pdo->open();
                    
                                                            try{
                                                            $stmt = $conn->prepare("SELECT * FROM tbl_states");
                                                            $cnt=1;
                                                              $stmt->execute();
                                                              foreach($stmt as $row){
                                       
                                                            ?>
                                                            <option value="<?php echo $row['state_id'];?>"><?php echo $row['state_name'];?></option>
                                                            <?php 
                                                              }
                                                            }
                                                            catch(PDOException $e){
                                                              echo $e->getMessage();
                                                            }
                                        
                                                            $pdo->close();
                                                            ?>
                                  </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">City <span class="text-red">* </span></label>
                      <div class="location-area">
                                  <input type="text" class="form-control" name="city" placeholder="Enter Your City" required>
                      </div>
                    </div>
                  </div>
                  
                 
                 <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Zip Code <span class="text-red">* </span></label>
                       <input type="text" class="form-control" name="zipcode" id="ZipCodeInput" onkeypress="return isNumberKey(event)" minlength="5" maxlength="6" placeholder="Enter zipcode" >
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Address <span class="text-red">* </span></label>
                      <input type="text" class="form-control" name="location" id="ZipCodeInput" placeholder="Enter Your Address"  reuired>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="d-grid">
                        <button class="ud-btn btn-dark" type="submit" name="add2">Next<i class="fal fa-arrow-right-long"></i></button>
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