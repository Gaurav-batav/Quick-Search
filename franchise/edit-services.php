<?php include 'includes/session.php';?>
<?php

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM profile_services WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Profile service deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Service to delete first';
	}

//	header('location: active-profile.php');
	
?>
<?php
//	include 'includes/slugify.php';
	if(isset($_POST['add'])){
		$service = $_POST['service'];
		$p_id = $_POST['id'];

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM profile_services WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['total'] > 0){
			$_SESSION['error'] = 'Services already taken';
		}
		else{
	
		
			try{
			 $stmt = $conn->prepare("INSERT INTO profile_services(p_id, service) VALUES (:p_id, :service)");
				$stmt->execute(['p_id'=>$p_id, 'service'=>$service]);
				$_SESSION['success'] = 'Service added successfully';

		    }
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up service form first';
	}

//	header('location: industries.php');

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
                                <h4 class="mb-sm-0">Edit Product & Services</h4>

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
                    include 'includes/config.php';
                    $id=intval($_GET['id']);
                    $query=mysqli_query($conn,"SELECT * FROM tbl_profile WHERE id='$id'");
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"> Add Product & Services</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="live-preview">
                                        <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">
                                        <span >
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add More           </button>
                                        <br>
                                        <div class="mb-3">
                                            <br>
                                            <table class="table table-success table-striped align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Service</th>
                                                       
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query=mysqli_query($conn,"SELECT * FROM profile_services WHERE p_id='".$row['profile_id']."'");
                                                $cnt=1;
                                                    while($row1=mysqli_fetch_array($query))
                                                    {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $cnt++;?></th>
                                                        <td><?php echo $row1['service'];?></td>
                                                        <td>
                                                            <div class="hstack gap-3 flex-wrap">
                                                                
                                                                <adata-bs-toggle="modal" data-id="<?php echo $row1['id'];?>" href="#delete" class="link-danger fs-15 delete"><i class="ri-delete-bin-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div> 
                            </div>
                        </div>  
                     </div>
                     <?php } ?>
                </div>
            </div>
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
            <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" >Add Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                            <div class="modal-body">
                                <?php
                                $id=intval($_GET['id']);
                                $query=mysqli_query($conn,"SELECT * FROM tbl_profile WHERE id='$id'");
                                    while($row=mysqli_fetch_array($query))
                                    {
                                    ?>
                                <input type="hidden" value="<?php echo $row['profile_id'];?>" name="id">
                                <?php } ?>
                                <div class="mb-3">
                                <div>
                                    <label class="form-label">Service<span>*</span></label>
                                    <input type="text" name="service" class="form-control" placeholder="Enter Service name" required/>
                                    <div class="invalid-feedback">Enter Service name</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="add" class="btn btn-success">Add</button>
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     <?php include('footer.php');?>
<script>
$(function(){
$('#addMore1').on('click', function() {
var data = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
data.find("input").val('');
});
$(document).on('click', '.remove1', function() {
var trIndex = $(this).closest("tr").index();
if(trIndex>1) {
$(this).closest("tr").remove();
} else {
alert("Sorry!! Can't remove first row!");
}
});
});      
</script>
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

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
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
    url: 'e_services_row.php',
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