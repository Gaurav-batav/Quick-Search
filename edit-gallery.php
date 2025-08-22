<?php include('dash_header.php');?>
<?php
	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM product_images WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Photo deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Photo to delete first';
	}

//	header('location: active-profile.php');
	
?>
<?php
include'includes/config.php';
if(isset($_POST['add']))
{
$profile_id = $_POST['profile_id'];
$filename = $_FILES['image']['name'];

            if(!empty($filename)){
			    $rand= rand("0000000","9999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/original/'.$new_filename);	
			}
			if(!empty($filename)){
			    $rand= rand("0000000","9999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename1 = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/small/'.$new_filename1);	
			}
			if(!empty($filename)){
			    $rand= rand("0000000","9999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename2 = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/medium/'.$new_filename2);	
			}
			if(!empty($filename)){
			    $rand= rand("0000000","9999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename3 = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/large/'.$new_filename3);	
			}

$sql=mysqli_query($conn,"insert into product_images(profile_id, original_path, small_path, medium_path, large_path) values('$profile_id','$new_filename','$new_filename1','$new_filename2','$new_filename3')");
$_SESSION['success']="Product Added Successfully !!";
}
?>
<?php
include'includes/config.php';
if(isset($_POST['update']))
{
$assign_id=$_POST['assign_id'];
$id=$_POST['id'];

$sql=mysqli_query($conn,"update tbl_profile set assign_id='$assign_id' where profile_id='$id'");
$_SESSION['msg']="Thumbnail Updated Successfully !!";
}
?>

<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-md">
        <div class="dashboard__content property-page bgc-f7">
            <div class="row align-items-center pb40">
                <div class="col-xxl-3">
                    <div class="dashboard_title_area">
                        <h2>My Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col-xl-5">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="packages_table table-responsive">
                  <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Add Photo</h3>
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="profile_id" value="<?php echo $_GET['id'];?>">
                       <div class="upload-img position-relative overflow-hidden bdrs12 text-center mb30 px-2">
                            <img src="images/istockphoto-1222357475-612x612.jpg" id="blah" width="150" class="icon" height="150">
                            <h4 class="title fz17 mb10">Upload photos of your Profile</h4>
                            <p class="text mb25">Photos must be JPEG or PNG format and least 2048x768</p>
                            <input id="image" name="image" accept=".jpg,.png,.jpeg" hidden type="file" required/>
                            <label for="image" class="ud-btn btn-white" tabindex="0">Browse Files<i class="fal fa-arrow-right-long"></i>
                            </label>
                        </div>
                        <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="d-grid">
                                <a class="ud-btn btn-success" href="business-profile"><i class="fal fa-arrow-left"></i> Back</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-grid">
                                <button class="ud-btn btn-dark" type="submit" name="add"><i class="fal fa-arrow-right-long"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
            <div class="col-xl-7">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="row mb30 mt30 wow fadeInUp" data-wow-delay="300ms">
                  
                    <div class="row">
                     <?php
                            $conn = $pdo->open();
                            try{
                                        
                            $stmt = $conn->prepare("SELECT * from product_images WHERE profile_id='".$_GET['id']."'");
                            $stmt->execute();
                            foreach ($stmt as $row2) {
                           
                        ?>
                          <div class="col-4 ps-sm-0">
                            <div class="sp-img-content">
                              <a class="popup-img preview-img-2 sp-img mb10" href="uploads/original/<?php echo $row2['original_path'];?>" alt="image">
                                <img class="w-100" style="height:170px"  src="uploads/original/<?php echo $row2['original_path'];?>" alt="<?php echo $row2['original_path'];?>">
                              </a>
                              <div class="d-grid">
                                  <div class="row col-md-12">
                                  <div class="col-md-4">
                                      <form method="post">
                                          <input type="hidden" name="id" value="<?php echo $row2['id'];?>">
                                        <button class="btn btn-warning" style="color:#fff;background-color:red" type="submit" name="delete"><i class="fa fa-trash"></i> </button>
                                    </form>
                                </div>
                                
                                <div class="col-md-8">
                                            
                                           <!-- <form method="post">
                                          <input type="hidden" name="id" value="<?php echo $row2['profile_id'];?>">
                                          <input type="hidden" name="assign_id" value="<?php echo $row2['id'];?>">
                                        <button class="btn btn-dark" type="submit" name="update"><i class="fa fa-plus"></i>  Thumbnail </button>
                                    </form>-->
                                          
                                </div>
                                </div>
                                <!--<form method="post">
                                      <input type="hidden" name="id" value="<?php echo $row2['id'];?>">
                                <button class="ud-btn btn-dark" type="submit" name="delete">Assign thumbanil </button>
                                </form>-->
                            </div>
                        </div>
                    </div>
                    <?php 
                         }
                        }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                    ?>
                </div>
              </div>
            </div>
           
          </div>
         <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
           <div class="modal fade zoomIn" id="delete" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this record ?</p>
                                </div>
                            </div>
                            <form method="POST">
                                <input type="hidden" class="distid" name="id">
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn w-sm btn-danger" name="delete">Yes, Delete It!</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php include'dash_footer.php';?>
<script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#active').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });


  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'gallery_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.distid').val(response.id);
     /* $('#edit_franchise_id').val(response.franchise_id);
      $('#edit_franchise_name').val(response.franchise_name);
      $('#edit_owner_name').val(response.owner_name);
      $('#edit_contact_no').val(response.contact_no);
      $('#edit_alt_phone').val(response.alt_phone);
      $('#edit_landline_no').val(response.landline_no);
      $('#edit_alt_landline_no').val(response.alt_landline_no);
      $('#edit_email').val(response.email);
      $('#edit_website').val(response.website);
      $('#edit_adhar_no').val(response.adhar_no);
      $('#edit_pan_no').val(response.pan_no);
      $('#edit_gst').val(response.gst);
      $('#edit_city').val(response.city);
      $('#edit_address').val(response.address);
      $('#edit_creation_on').val(response.creation_on);*/
      $('#edit_status').val(response.status);
    }
  });
}
</script>
<script>
    image.onchange = evt => {
    const [file] = image.files
    if (file) {
    blah.src = URL.createObjectURL(file)
    }
    }
    </script>