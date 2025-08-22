<?php include('header3.php');?>
<?php
//	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$user_id = $_POST['user_id'];
		$profile_id = $_POST['profile_id'];
		$category_id = $_POST['category_id'];
		$sub_category_id = $_POST['sub_category_id'];
		$status = 'Pending';
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM tbl_profile WHERE profile_id=:profile_id");
		$stmt->execute(['profile_id'=>$profile_id]);
		$row = $stmt->fetch();
        $pid = rand();
		if($row['total'] > 0){
			$_SESSION['error'] = 'Profile already exist';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
	
		
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_profile ( profile_id, category_id, sub_category_id, user_id, status) VALUES (:profile_id , :category_id, :sub_category_id, :user_id, :status)");
				$stmt->execute(['profile_id'=>$profile_id, 'category_id'=>$category_id, 'sub_category_id'=>$sub_category_id, 'user_id'=>$user_id, 'status'=>$status]);
				//$_SESSION['success'] = 'Product added successfully';

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

//	header('location: addprofile-step1.php');

?>
    <!-- Breadcumb Sections -->
      <section class="pt70 pb40 bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 position-relative">
            <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Personal Details</h3>
              <p class="text mb25">Fill all required personal details</p>
              <form class="form-style1" method="POST" action="location">
                <div class="row">
                     <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Company Name <span class="text-red">* </span></label>
                      <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Experience</label>
                      <input type="text" onkeypress="return isNumberKey(event)" name="experience" class="form-control" placeholder="Enter Your Experience ">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Contact Person <span class="text-red">* </span></label>
                      <input type="text" name="contact_person" class="form-control" placeholder="Enter Contact Person" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Website</label>
                      <input type="url" name="website" class="form-control" placeholder="Enter Your Website">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Mobile No <span class="text-red">* </span></label>
                      <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="phone" class="form-control" placeholder="Enter Mobile No " required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Alternative Mobile No</label>
                      <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="alt_phone" class="form-control" placeholder="Enter Alternative Mobile No">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Landline No</label>
                      <input type="text" onkeypress="return isNumberKey(event)" name="landline_no" class="form-control" placeholder="Enter Landline No">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Alternative Landline No</label>
                      <input type="text" onkeypress="return isNumberKey(event)" name="alt_landline_no"  class="form-control" placeholder="Enter Alternative Landline No">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Email <span class="text-red">* </span></label>
                      <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Alternative Email</label>
                      <input type="email" name="alt_email" class="form-control" placeholder="Enter Alternative Email ">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">GST </label>
                      <input type="text" name="gst" class="form-control" placeholder="Enter GST">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Whatsapp No</label>
                      <input type="text" maxlength="10" onkeypress="return isNumberKey(event)" name="whatsap_no" class="form-control" placeholder="Enter Whatsapp No">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Description</label>
                      <textarea cols="30" name="description" rows="3" placeholder="There are many variations of passages."></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="d-grid">
                        <button class="ud-btn btn-dark" type="submit" name="add1">Next<i class="fal fa-arrow-right-long"></i></button>
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