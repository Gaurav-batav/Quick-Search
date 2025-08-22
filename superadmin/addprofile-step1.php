<?php include 'includes/session.php';?>
<?php include('header.php');?>
<?php
//	include 'includes/slugify.php';

	if(isset($_POST['add'])){
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
				$stmt = $conn->prepare("INSERT INTO tbl_profile ( profile_id, category_id, sub_category_id, franchise_id, status) VALUES (:profile_id , :category_id, :sub_category_id, :franchise_id, :status)");
				$stmt->execute(['profile_id'=>$profile_id, 'category_id'=>$category_id, 'sub_category_id'=>$sub_category_id, 'franchise_id'=>$franchise_id, 'status'=>$status]);
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
                        <form class="needs-validation" method="post" action="addprofile-step2.php" enctype="multipart/form-data" novalidate id="profileForm">
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
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="company_name" class="form-label">Company Name <span class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name" required>
                                                        <div class="invalid-feedback">Please enter company name</div>
                                                    </div>
                                                </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="experience" class="form-label">Experience(In Month)</label>
                                                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" name="experience" id="experience" placeholder="Enter Your Experience">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="contact_person" class="form-label">Contact Person <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" pattern="[A-Za-z ]+" name="contact_person" id="contact_person" placeholder="Enter Contact Person Name" required>
                                                    <div class="invalid-feedback">Please enter contact person name</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="phone" class="form-label">Phone No <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" pattern="\d{10}" name="phone" id="phone" placeholder="Enter Phone Number" required>
                                                    <div class="invalid-feedback">Please enter a valid 10-digit phone number</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="alt_phone" class="form-label">Alternative Phone No</label>
                                                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" pattern="\d{10}" name="alt_phone" id="alt_phone" placeholder="Enter Alternative Phone Number">
                                                    <div class="invalid-feedback">Please enter a valid 10-digit phone number</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="whatsap_no" class="form-label">Whatsapp No <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" maxlength="10" minlength="10" pattern="\d{10}" onkeypress="return isNumberKey(event)" name="whatsap_no" id="whatsap_no" placeholder="Enter Whatsapp Number" required>
                                                    <div class="invalid-feedback">Please enter a valid 10-digit Whatsapp number</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="landline_no" class="form-label">Landline No</label>
                                                    <input type="text" class="form-control" maxlength="10" minlength="10" pattern="\d{10}" onkeypress="return isNumberKey(event)" name="landline_no" id="landline_no" placeholder="Enter Landline Number">
                                                    <div class="invalid-feedback">Please enter a valid 10-digit landline number</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="alt_landline_no" class="form-label">Alternative Landline No</label>
                                                    <input type="text" class="form-control" maxlength="10" minlength="10" pattern="\d{10}" onkeypress="return isNumberKey(event)" name="alt_landline_no" id="alt_landline_no" placeholder="Enter Alternative Landline Number">
                                                    <div class="invalid-feedback">Please enter a valid 10-digit landline number</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                           
                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="email" class="form-label">Email Address <span class="text-red">*</span></label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required>
                                                    <div class="invalid-feedback">Please enter a valid email address</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="alt_email" class="form-label">Alternative Email</label>
                                                    <input type="email" class="form-control" name="alt_email" id="alt_email" placeholder="Enter Alternative Email Address">
                                                    <div class="invalid-feedback">Please enter a valid email address</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="website" class="form-label">Website</label>
                                                    <input type="url" class="form-control" name="website" id="website" placeholder="www.example.com">
                                                    <div class="invalid-feedback">Please enter a valid website URL</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="state" class="form-label">State <span class="text-red">*</span></label>
                                                    <select class="form-select" id="state" name="state" required>
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
                                                    <div class="invalid-feedback">Please select a state</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="city" class="form-label">City <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter Your City" required>
                                                    <div class="invalid-feedback">Please enter your city</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="zipcode" class="form-label">ZipCode <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" name="zipcode" id="zipcode" maxlength="6" minlength="6" pattern="\d{6}" onkeypress="return isNumberKey(event)" placeholder="Enter 6-digit zipcode" required>
                                                    <div class="invalid-feedback">Please enter a valid 6-digit zipcode</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                             <div class="col-xxl-6 col-lg-12">
                                                <div>
                                                    <label for="location" class="form-label">Address Line 1 <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" name="location" id="location" placeholder="Enter Your Address" required>
                                                    <div class="invalid-feedback">Please enter your address</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter Description"></textarea>
                                                </div>
                                            </div>
                                             <div class="d-flex align-items-start gap-3 mt-4">
                                                <a class="btn btn-link text-decoration-none btn-label previestab" href="addprofile-stepIndustry.php" role="button"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back </a>
                                                <button type="submit" class="btn btn-success btn-label right ms-auto nexttab" name="add1"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next</button>
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

<script>
// Form validation
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var form = document.getElementById('profileForm');
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    }, false);
})();

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>