<?php include'includes/session.php';?>
<?php include('header.php');?>
<?php
	if(isset($_POST['add4'])){
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
        <!-- ========== App Menu ========== -->
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
                        <div class="col-lg-12">
                            <div>
                                <div class="text-center">
                                    <div class="mb-4 ">
                                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:300px;height:300px"></lord-icon>
                                    </div>
                                    <h5>Well Done !</h5>
                                    <p class="text-muted">Data has been successfully submitted</p>
                                </div>
                            </div>        
                        </div>
                        <div class="text-center">
                            <a class="btn btn-success" href="active-profile.php" type="submit" role="button">Back To Profile</a>
                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->
        </div>
    <!-- END layout-wrapper -->
  <?php include('footer.php');?>