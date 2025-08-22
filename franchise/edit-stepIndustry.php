<?php include 'includes/session.php';?>
<?php
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
	$category_id = $_POST['category_id'];
	$sub_category_id = $_POST['sub_category_id'];

	// Validate inputs
	if(empty($category_id) || empty($sub_category_id)) {
		$_SESSION['error'] = 'Please select both Main Industry and Sub Industry';
	} else {
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET category_id=:category_id, sub_category_id=:sub_category_id WHERE id=:id");
			$stmt->execute(['category_id'=>$category_id, 'sub_category_id'=>$sub_category_id, 'id'=>$id]);
			$_SESSION['success'] = 'Profile Industry Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
	}
}
?>
<?php include('header.php');?>
<?php include('sidebar.php');?>       
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit Industry</h4>
                            </div>
                        </div>
                    </div>
                      <?php
                    if(isset($_SESSION['error'])){
                      echo "
                        <div class='alert alert-danger alert-dismissible bg-danger text-white alert-label-icon fade show' role='alert'>
                            <i class='ri-error-warning-line label-icon'></i><strong>Warning</strong> - ".$_SESSION['error']."
                            <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                      ";
                      unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                      echo "
                        <div class='alert alert-success alert-dismissible bg-success text-white alert-label-icon fade show' role='alert'>
                            <i class='ri-notification-off-line label-icon'></i><strong>Success</strong> ".$_SESSION['success']."
                            <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                      ";
                      unset($_SESSION['success']);
                    }
                    ?>
                    <!-- end page title -->
                     <?php
                include 'includes/config.php';
                $id = intval($_GET['id']);
                $query = mysqli_query($conn, "SELECT tbl_profile.*,tbl_profile.id as p_id,industries.name as c_name,industries.id as cid,sub_industries.name as s_name,sub_industries.id as s_id from tbl_profile join industries on industries.id=tbl_profile.category_id join sub_industries on sub_industries.id=tbl_profile.sub_category_id WHERE tbl_profile.id='$id'");
                while($row = mysqli_fetch_array($query))
                {
                ?>
                  <div class="row">
                        <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate onsubmit="return validateForm()">
                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="hidden" name="id" value="<?php echo $row['p_id'];?>">
                                                    <div class="mb-4">
                                                        <label for="select-category" class="form-label">Main Industry <span class="text-danger">*</span></label>
                                                        <select class="form-control select2" onChange="getcat(this.value);" name="category_id" id="select-category" required>
                                                            <option value="">Select Main Industry</option>
                                                            <option value="<?php echo htmlentities($row['cid']);?>" selected><?php echo htmlentities($row['c_name']);?></option>
                                                            <?php 
                                                            $query2 = mysqli_query($conn, "SELECT * FROM industries WHERE status='Active'");
                                                            while($rw = mysqli_fetch_array($query2)) {
                                                                if($row['c_name'] == $rw['name']) {
                                                                    continue;
                                                                } else {
                                                            ?> 
                                                            <option value="<?php echo $rw['id'];?>"><?php echo $rw['name'];?></option>
                                                            <?php } } ?>
                                                        </select>
                                                        <div class="invalid-feedback">Please select Main Industry</div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="mb-4">
                                                        <label for="category" class="form-label">Sub Industry <span class="text-danger">*</span></label>
                                                        <select class="form-control select2" name="sub_category_id" id="category" required>
                                                            <option value="">Select Sub Industry</option>
                                                            <option value="<?php echo htmlentities($row['s_id']);?>" selected><?php echo htmlentities($row['s_name']);?></option>
                                                            <?php 
                                                            $query3 = mysqli_query($conn, "SELECT * FROM sub_industries WHERE status='Active'");
                                                            while($rw = mysqli_fetch_array($query3)) {
                                                                if($row['s_name'] == $rw['name']) {
                                                                    continue;
                                                                } else {
                                                            ?>
                                                            <option value="<?php echo $rw['id'];?>"><?php echo $rw['name'];?></option>
                                                            <?php } } ?>
                                                        </select>   
                                                        <div class="invalid-feedback">Please select Sub Industry</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-none code-view">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="d-flex align-items-start gap-3 mt-5">
                                                <button type="submit" class="btn btn-success btn-label right ms-auto nexttab" name="update">
                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </form>
                    </div>
                    <?php } ?>
                    <!--end row-->

                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

<?php include('footer.php');?>
<script>
function getcat(val) {
    $.ajax({
        type: "POST",
        url: "get_cat.php",
        data: 'cat_id='+val,
        success: function(data){
            $("#category").html(data);
        }
    });
}

function validateForm() {
    var form = document.querySelector('.needs-validation');
    if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    form.classList.add('was-validated');
    return form.checkValidity();
}

// Initialize form validation on submit
document.addEventListener('DOMContentLoaded', function() {
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script> 