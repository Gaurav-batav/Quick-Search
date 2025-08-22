<?php include'includes/session.php';?>
<?php
	if(isset($_POST['update'])){
	$id=$_POST['id'];
	$fb=$_POST['fb'];
	$google=$_POST['google'];
	$linkdin=$_POST['linkdin'];
	$youtube=$_POST['youtube'];
	$insta=$_POST['insta'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET fb=:fb, google=:google, linkdin=:linkdin, youtube=:youtube, insta=:insta WHERE id=:id");
			$stmt->execute(['id'=>$id, 'fb'=>$fb, 'google'=>$google, 'linkdin'=>$linkdin, 'youtube'=>$youtube, 'insta'=>$insta]);
			$_SESSION['success'] = 'Social Media Updated Successfully !!';
		
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
<?php include('header.php');?>
        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit Social Media</h4>
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
                    <!-- end page title -->
                    <?php
                    include'includes/config.php';
                    $id=intval($_GET['id']);
                    $query=mysqli_query($conn,"SELECT tbl_profile.*,tbl_profile.id as p_id,tbl_states.state_name as s_name,tbl_states.state_id as sid,sub_industries.name as i_name ,sub_industries.id as s_id from tbl_profile join tbl_states on tbl_states.state_id=tbl_profile.state join sub_industries on sub_industries.id=tbl_profile.sub_category_id WHERE tbl_profile.id='$id'");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                    <div class="row">
                        <form class="needs-validation" method="post" enctype="multipart/form-data"  novalidate>
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-body">
                                    <input type="hidden" name="id" value="<?php echo $row['p_id'];?>">
                                    <div class="card-header align-items-center d-flex mt-10">
                                        <h4 class="card-title mb-0 flex-grow-1"> Social Media</h4>
                                        <div class="flex-shrink-0">
                                            <div class="form-check form-switch form-switch-right form-switch-md">
                                            </div>
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <label for="basic-url" class="form-label">Your Facebook URL</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon3">Facebook</span>
                                                            <input type="url" class="form-control" name="fb" id="basic-url" value="<?php echo $row['fb'];?>" aria-describedby="basic-addon3"placeholder="Enter URL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <label for="basic-url" class="form-label">Your Google URL</label>
                                                       <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon3">Google</span>
                                                            <input type="url" class="form-control" value="<?php echo $row['google'];?>" name="google" id="basic-url" aria-describedby="basic-addon3"placeholder="Enter URL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <label for="basic-url" class="form-label">Your Linkdin URL</label>
                                                       <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon3">Linkdin</span>
                                                            <input type="url" class="form-control" value="<?php echo $row['linkdin'];?>" name="linkdin" id="basic-url" aria-describedby="basic-addon3"placeholder="Enter URL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <label for="basic-url" class="form-label">Your YouTube URL</label>
                                                       <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon3">YouTube</span>
                                                            <input type="url" class="form-control" value="<?php echo $row['youtube'];?>" name="youtube" id="basic-url" aria-describedby="basic-addon3"placeholder="Enter URL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <label for="basic-url" class="form-label">Your Instagram URL</label>
                                                       <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon3">Instagram</span>
                                                            <input type="url" class="form-control" value="<?php echo $row['insta'];?>" name="insta" id="basic-url" aria-describedby="basic-addon3"placeholder="Enter URL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                </div>
                                            </div>
                                            <!--end row-->
                                            <div class="d-flex align-items-start gap-3 mt-5">
                                                    <button type="submit" class="btn btn-success btn-label right ms-auto nexttab " name="update"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Update</button>
                                                </div>
                                            </div>
                                            <div class="d-none code-view">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div> <!-- container-fluid -->
                     </div><!-- End Page-content -->
                     </form>
                     <?php } ?>
                </div>
            </div>
    <!-- END layout-wrapper -->
  <?php include('footer.php');?>