<?php include 'includes/session.php';?>
<?php include('header.php');?>
<?php include('sidebar.php');?>       
<div class="vertical-overlay"></div>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
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
            <!-- end page title -->  
            <div class="row">
                <form class="needs-validation" method="post" action="addprofile-step1.php" enctype="multipart/form-data" novalidate id="profileForm">
                    <input type="hidden" name="franchise_id" value="QS00001">
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1"><span class="text-blue-5">Step 1 :</span> Select Industry</h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" name="profile_id" value="qso<?php echo random_int(10000, 99999);?>">
                                            <div class="mb-4">
                                                <label for="validationCustom04" class="form-label">Main Industry <span class="text-red">*</span></label>
                                                <select class="form-select" onChange="getcat(this.value);" name="category_id" id="validationCustom04" required>
                                                    <option selected disabled value="">Select Category</option>
                                                    <?php
                                                        $conn = $pdo->open();
                                                        try {
                                                            $stmt = $conn->prepare("SELECT * FROM industries Order By creation_on DESC");
                                                            $stmt->execute();
                                                            foreach($stmt as $row) {
                                                    ?>
                                                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                                    <?php 
                                                            }
                                                        } catch(PDOException $e) {
                                                            echo $e->getMessage();
                                                        }
                                                        $pdo->close();
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">Please select Main Industry</div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label for="sub_category" class="form-label">Sub Industry <span class="text-red">*</span></label>
                                                <select class="form-control select2" name="sub_category_id" id="sub_category" required disabled>
                                                    <option selected disabled value="">Select Sub Category</option>
                                                </select>
                                                <div class="invalid-feedback">Please select Sub Industry</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="d-flex align-items-start gap-3 mt-5">
                                        <button type="submit" class="btn btn-success btn-label right ms-auto nexttab" name="add">
                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </form>
            </div>
        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->
</div>
<?php include('footer.php');?>

<script>
function getcat(val) {
    if(val) {
        $.ajax({
            type: "POST",
            url: "get_cat.php",
            data: 'cat_id='+val,
            success: function(data) {
                $("#sub_category").html(data).prop('disabled', false);
            }
        });
    } else {
        $("#sub_category").html('<option selected disabled value="">Select Sub Category</option>').prop('disabled', true);
    }
}

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

function selectCountry(val) {
    $("#search-box").val(val);
    $("#suggesstion-box").hide();
}
</script>