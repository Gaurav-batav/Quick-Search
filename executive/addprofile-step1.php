<?php include 'includes/session.php';?>
<?php include('header.php');?>
<?php
//	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$executive_id = $_POST['executive_id'];
		$franchise_id = $_POST['franchise_id']; 
		$profile_id = $_POST['profile_id'];
		$category_id = $_POST['category_id'];
		$sub_category_id = $_POST['sub_category_id'];
		$status = 'Pending';
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM tbl_profile WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
        $pid = rand();
		if($row['total'] > 0){
			$_SESSION['error'] = 'Profile already exist';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
	
		
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_profile ( profile_id, category_id, sub_category_id, franchise_id, executive_id, status) VALUES (:profile_id , :category_id, :sub_category_id, :franchise_id, :executive_id, :status)");
				$stmt->execute(['profile_id'=>$profile_id, 'category_id'=>$category_id, 'sub_category_id'=>$sub_category_id, 'franchise_id'=>$franchise_id, 'executive_id'=>$executive_id, 'status'=>$status]);
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
    <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Add Profile</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Active Profile</a></li>
                                        <li class="breadcrumb-item active">Add Profile</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form class="needs-validation" method="post" action="addprofile-step2.php" enctype="multipart/form-data"  novalidate>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1"><span class="text-blue-5">Step 2 :</span> Personal Details</h4>
                                        <div class="flex-shrink-0">
                                            <div class="form-check form-switch form-switch-right form-switch-md">
                                            </div>
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">
                                            <input type="hidden" name="password" value="<?php echo rand(000000,999999);?>">
                                            <input type="hidden" class="" value="<?php echo $admin['f_id'];?>" name="franchise_id">
                                            <input type="hidden" class="" value="<?php echo $admin['e_id'];?>" name="executive_id">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Company Name <span class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name" required>
                                                        <div class="invalid-feedback">Enter Company Name</div>
                                                    </div>
                                                </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="experience" class="form-label">Experience(In Year)</label>
                                                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" name="experience" placeholder="Enter Your Experience">
                                            </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Contact Person <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" pattern="[A-Za-z ]+" name="contact_person" placeholder="Enter Contact Person Name" required>
                                                    <div class="invalid-feedback">Enter Contact Person Name</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Phone No <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" pattern="\d{0,10}" name="phone" placeholder="Enter Contact Person Name" required>
                                                    <div class="invalid-feedback">Enter Phone No </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Alternative Phone No</label>
                                                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" pattern="\d{0,10}" name="alt_phone" placeholder="Enter Contact Person Name">
                                                </div>
                                            </div>
                                            <!--end col-->
                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Enter Whatsapp No <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" maxlength="10" minlength="10" pattern="\d{0,10}" onkeypress="return isNumberKey(event)" name="whatsap_no" placeholder="Enter Whatsapp No" required>
                                                    <div class="invalid-feedback">Enter Whatsapp No</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput-view" class="form-label">Landline No</label>
                                                    <input type="text" class="form-control"maxlength="10" minlength="10" pattern="\d{0,10}" onkeypress="return isNumberKey(event)" name="landline_no" placeholder="Enter Landline No">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput-view" class="form-label">Alternative Landline No</label>
                                                    <input type="text" class="form-control" maxlength="10" minlength="10" pattern="\d{0,10}" onkeypress="return isNumberKey(event)" name="alt_landline_no" placeholder="Enter Alternative Landline No">
                                                </div>
                                            </div>
                                            <!--end col-->
                                           
                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="EmailInput" class="form-label">Email Adress <span class="text-red">*</span></label>
                                                    <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
                                                    <div class="invalid-feedback">Enter Email Address</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="EmailInput" class="form-label">Alternative Email </label>
                                                    <input type="email" class="form-control"  name="alt_email" placeholder="Enter Alternative Email Address">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="websiteInput" class="form-label">Website</label>
                                                    <input type="url" class="form-control" name="website" placeholder="www.example.com">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="validationDefault04" class="form-label">State <span class="text-red">*</span></label>
                                                <select class="form-select" id="validationDefault04" name="state" required>
                                                    <option selected disabled value="">Choose...</option>
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
                                                <div class="invalid-feedback">Select State</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                     <label for="validationDefault03" class="form-label">City <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" name="city" id="validationDefault03"placeholder="Enter Your City" required>
                                                    <div class="invalid-feedback">Enter Your City</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="ZipCodeInput" class="form-label">ZipCode <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" name="zipcode" id="ZipCodeInput"  maxlength="6" minlength="6" pattern="\d{6}" onkeypress="return isNumberKey(event)"  placeholder="Enter zipcode" required>
                                                    <div class="invalid-feedback">Enter Zipcode</div>
                                               </div>
                                            </div>
                                            <!--end col-->
                                             <div class="col-xxl-6 col-lg-12">
                                                <div>
                                                    <label for="AddressInput" class="form-label">Address Line 1 <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" name="location" id="ZipCodeInput" placeholder="Enter Your Address" required>
                                                    <div class="invalid-feedback">Enter Your Address</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea5" rows="3" placeholder="Enter Description"></textarea>
                                                </div>
                                            </div>
                                             <div class="d-flex align-items-start gap-3 mt-4">
                                                <a class="btn btn-link text-decoration-none btn-label previestab" href="#" onclick="goBack()" role="button"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back </a>
                                                 <button type="submit" class="btn btn-success btn-label right ms-auto nexttab " name="add1"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next</button>
                                            </div>
                                        <!--end row-->
                                        </div>
                                        <div class="d-none code-view">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->
        </div>
    </div>
    <?php include('footer.php');?>