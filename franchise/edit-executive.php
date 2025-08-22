<?php include'includes/session.php';?>
<?php include('header.php');?>
<?php
	if(isset($_POST['update'])){
	$id=$_POST['id'];
		$executive_name = $_POST['executive_name'];
		$phone_no = $_POST['phone_no'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$password = $_POST['password'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_executive SET executive_name=:executive_name, phone_no=:phone_no, email=:email, status=:status, password=:password WHERE id=:id");
			$stmt->execute(['id'=>$id, 'executive_name'=>$executive_name, 'phone_no'=>$phone_no, 'email'=>$email, 'status'=>$status, 'password'=>$password]);
			$_SESSION['success'] = 'Executive Detail Updated Successfully !!';
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
                                <h4 class="mb-sm-0">Edit Executive</h4>
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
                    $query=mysqli_query($conn,"SELECT tbl_executive.*,tbl_executive.id as p_id,tbl_status.status as s_name,tbl_status.id as sid from tbl_executive join tbl_status on tbl_status.status=tbl_executive.status WHERE tbl_executive.id='$id'");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                    <div class="row">
                        <form class="needs-validation" method="post" enctype="multipart/form-data"  novalidate>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                             <div class="row g-3">
                                                <div class="col-lg-6">
                                                <div>
                                                    <label for="companyname-field" class="form-label"> Executive Name</label>
                                                    <input type="text" name="executive_name" value="<?php echo $row['executive_name'];?>" class="form-control" placeholder="Enter Executive Name" required />
                                                </div> 
                                            </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Phone</label>
                            <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $row['phone_no'];?>" maxlength="10" name="phone_no" class="form-control" placeholder="Enter contact Phone No" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" placeholder="Enter contact email" required />
                        </div>
                    </div>
                   <div class="col-lg-6">
                            <div>
                                <label for="contact_email-field" class="form-label">Password</label>
                                <input type="password" class="form-control" maxlength="6" name="password" value="<?php echo $row['password'];?>" placeholder="Enter Password" required />
                            </div>
                        </div>
                 <div class="col-lg-12">
                    <div>
                        <label for="industry_type-field" class="form-label">Status <span class="text-red">*</span></label>
                        <select class="form-select" name="status" required="required">
                            <option value="<?php echo htmlentities($row['s_name']);?>"><?php echo htmlentities($row['s_name']);?></option>
                                <?php $query=mysqli_query($conn,"select * from tbl_status");
                                while($rw=mysqli_fetch_array($query))
                                {
                                if($row['s_name']==$rw['status'])
                                {
                                continue;
                                }
                                else{
                                ?>
                                <option value="<?php echo $rw['status'];?>"><?php echo $rw['status'];?></option>
                                <?php } } ?>
                        </select>
                        <div class="invalid-feedback"> Select Status </div>
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
