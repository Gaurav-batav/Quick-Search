<?php include'includes/session.php';?>
<?php include('header.php');?>
<?php
	if(isset($_POST['update'])){
	$id=$_POST['id'];
	$franchise_name = $_POST['franchise_name'];
	$owner_name = $_POST['owner_name'];
	$contact_no = $_POST['contact_no'];
	$alt_phone = $_POST['alt_phone'];
	$landline_no = $_POST['landline_no'];
	$alt_landline_no = $_POST['alt_landline_no'];
	$email = $_POST['email'];
	$alt_email = $_POST['alt_email'];
	$website = $_POST['website'];
	$adhar_no = $_POST['adhar_no'];
	$pan_no = $_POST['pan_no'];
	$gst = $_POST['gst'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$address = $_POST['address'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_franchise SET franchise_name=:franchise_name, owner_name=:owner_name, contact_no=:contact_no, alt_phone=:alt_phone, landline_no=:landline_no, alt_landline_no=:alt_landline_no, email=:email, alt_email=:alt_email, website=:website, adhar_no=:adhar_no, pan_no=:pan_no, gst=:gst, state=:state, city=:city, address=:address  WHERE id=:id");
			$stmt->execute(['id'=>$id, 'franchise_name'=>$franchise_name, 'owner_name'=>$owner_name, 'contact_no'=>$contact_no, 'alt_phone'=>$alt_phone, 'landline_no'=>$landline_no, 'alt_landline_no'=>$alt_landline_no, 'email'=>$email, 'alt_email'=>$alt_email, 'website'=>$website, 'adhar_no'=>$adhar_no, 'pan_no'=>$pan_no, 'gst'=>$gst, 'state'=>$state, 'city'=>$city, 'address'=>$address]);
			$_SESSION['success'] = 'Franchise Detail Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';
	}

//	header('location: active-profile.php');

?>
    <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit Franchise</h4>
                                <!--<div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Active Profile</a></li>
                                        <li class="breadcrumb-item active">Add Profile</li>
                                    </ol>
                                </div>-->
                            </div>
                        </div>
                    </div>
                        <?php
                    if(isset($_SESSION['error'])){
                      echo "
                        
                        <div class='alert alert-danger alert-dismissible bg-danger text-white alert-label-icon fade show' role='alert'>
    <i class='ri-error-warning-line label-icon'></i><strong>Warning</strong> -  ".$_SESSION['error']."
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
                      ";
                      unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                      echo "
                        <div class='alert alert-success alert-dismissible bg-success text-white alert-label-icon fade show' role='alert'>
    <i class='ri-notification-off-line label-icon'></i><strong>Success</strong>  ".$_SESSION['success']."
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
                          ";
                          unset($_SESSION['success']);
                        }
                    ?>
                    <?php
                    include'includes/config.php';
                    $id=intval($_GET['id']);
                    $query=mysqli_query($conn,"SELECT tbl_franchise.*,tbl_franchise.id as p_id,tbl_states.state_name as s_name,tbl_states.state_id as sid from tbl_franchise join tbl_states on tbl_states.state_id=tbl_franchise.state WHERE tbl_franchise.id='$id'");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                    <div class="row">
                        <form class="needs-validation" method="post" enctype="multipart/form-data"  novalidate>
                            <div class="col-lg-12">
                                <div class="card">
                                  <!--  <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1"><span class="text-blue-5">Step 2 :</span> Personal Details</h4>
                                        <div class="flex-shrink-0">
                                            <div class="form-check form-switch form-switch-right form-switch-md">
                                            </div>
                                        </div>
                                    </div>--><!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                             <div class="row g-3">
                        <div class="col-lg-4">
                        <div>
                            <label for="companyname-field" class="form-label">Franchise Name <span class="text-red">*</span></label>
                            <input type="text" value="<?php echo $row['franchise_name'];?>" name="franchise_name" class="form-control" placeholder="Enter franchise name" required >
                            <div class="invalid-feedback">Enter franchise name</div>
                        </div> 
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="owner-field" class="form-label">Owner Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" value="<?php echo $row['owner_name'];?>" name="owner_name" placeholder="Enter owner name" required />
                            <div class="invalid-feedback">Enter owner name</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Phone <span class="text-red">*</span></label>
                            <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $row['contact_no'];?>" maxlength="10" name="contact_no" class="form-control" placeholder="Enter contact Phone No" required />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Alternative Phone</label>
                            <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $row['alt_phone'];?>" maxlength="10" name="alt_phone" class="form-control" placeholder="Enter Alternative Phone" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Landline No</label>
                            <input type="text" class="form-control" onkeypress="return isNumberKey(event)" value="<?php echo $row['landline_no'];?>" maxlength="10" name="landline_no" placeholder="Enter Landline No" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Alternative Landline No</label>
                            <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="alt_landline_no"  value="<?php echo $row['alt_landline_no'];?>" class="form-control" placeholder="Enter Alternative Landline No" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email" placeholder="Enter contact email" required />
                            <div class="invalid-feedback"> Enter contact email</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Alternative Email</label>
                            <input type="email" name="alt_email" value="<?php echo $row['alt_email'];?>" class="form-control" placeholder="Enter contact email" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Website</label>
                            <input type="url" name="website" class="form-control" value="<?php echo $row['website'];?>" placeholder="Enter Website" />
                        </div>
                    </div>                                   
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Aadhaar Card No.</label>
                            <input type="text" name="adhar_no"  onkeypress="return isNumberKey(event)" value="<?php echo $row['adhar_no'];?>" class="form-control" placeholder="Enter Adhaar Card No."  />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">Pan Card No.</label>
                            <input type="text" name="pan_no" class="form-control" value="<?php echo $row['pan_no'];?>" placeholder="Enter Pancard No." />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <label for="contact_email-field" class="form-label">GST</label>
                            <input type="text" name="gst" class="form-control" value="<?php echo $row['gst'];?>" placeholder="Enter GST"  />
                        </div>
                    </div>
                <div class="col-lg-6">
                    <div>
                        <label for="industry_type-field" class="form-label">City <span class="text-red">*</span></label>
                        <input type="text" name="city" placeholder="Enter City" value="<?php echo $row['city'];?>" class="form-control">
                        <div class="invalid-feedback"> Enter City</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <label for="industry_type-field" class="form-label">State <span class="text-red">*</span></label>
                        <select class="form-select" name="state" required="required">
                            <option value="<?php echo htmlentities($row['sid']);?>"><?php echo htmlentities($row['s_name']);?></option>
                                <?php $query=mysqli_query($conn,"select * from tbl_states");
                                while($rw=mysqli_fetch_array($query))
                                {
                                if($row['s_name']==$rw['state_name'])
                                {
                                continue;
                                }
                                else{
                                ?>
                                <option value="<?php echo $rw['state_id'];?>"><?php echo $rw['state_name'];?></option>
                                <?php } } ?>
                        </select>
                        <div class="invalid-feedback"> Select State </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <label for="contact_email-field" class="form-label">Address <span class="text-red">*</span></label>
                        <input type="text" name="address" value="<?php echo $row['address'];?>" id="address" class="form-control" placeholder="Enter Your Address" required />
                        <div class="invalid-feedback"> Enter Your Address</div>
                    </div>
                </div>
              
            </div>
            <div class="hstack gap-2 justify-content-end mt-4">
                
                 <button type="submit" class="btn btn-success btn-label right ms-auto nexttab " name="update"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Update</button>
                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
            </div>
                                        <div class="d-none code-view">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->
        </div>
    </div>
    <?php include('footer.php');?>
