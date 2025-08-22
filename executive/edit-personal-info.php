<?php include 'includes/session.php'; ?>
<?php
include 'includes/slugify.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $company_name = $_POST['company_name'];
    $slug = slugify($company_name);
    $experience = $_POST['experience'];
    $contact_person = $_POST['contact_person'];
    $phone = $_POST['phone'];
    $alt_phone = $_POST['alt_phone'];
    $whatsap_no = $_POST['whatsap_no'];
    $landline_no = $_POST['landline_no'];
    $alt_landline_no = $_POST['alt_landline_no'];
    $email = $_POST['email'];
    $alt_email = $_POST['alt_email'];
    $website = $_POST['website'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    // Validate required fields
    $required_fields = [
        'company_name' => 'Company Name',
        'contact_person' => 'Contact Person',
        'phone' => 'Phone No',
        'whatsap_no' => 'Whatsapp No',
        'email' => 'Email Address',
        'state' => 'State',
        'city' => 'City',
        'zipcode' => 'Zipcode',
        'location' => 'Address'
    ];
    
    $errors = [];
    foreach($required_fields as $field => $name) {
        if(empty($_POST[$field])) {
            $errors[] = "$name is required";
        }
    }
    
    if(!empty($errors)) {
        $_SESSION['error'] = implode('<br>', $errors);
    } else {
        $conn = $pdo->open();
        try {
            $stmt = $conn->prepare("UPDATE tbl_profile SET company_name=:company_name, slug=:slug, experience=:experience, contact_person=:contact_person, phone=:phone, alt_phone=:alt_phone, whatsap_no=:whatsap_no, landline_no=:landline_no, alt_landline_no=:alt_landline_no, email=:email, alt_email=:alt_email, website=:website, gst=:gst, state=:state, city=:city, zipcode=:zipcode, location=:location, description=:description WHERE id=:id");
            $stmt->execute([
                'id' => $id,
                'company_name' => $company_name,
                'slug' => $slug,
                'experience' => $experience,
                'contact_person' => $contact_person,
                'phone' => $phone,
                'alt_phone' => $alt_phone,
                'whatsap_no' => $whatsap_no,
                'landline_no' => $landline_no,
                'alt_landline_no' => $alt_landline_no,
                'email' => $email,
                'alt_email' => $alt_email,
                'website' => $website,
                'gst' => $gst,
                'state' => $state,
                'city' => $city,
                'zipcode' => $zipcode,
                'location' => $location,
                'description' => $description
            ]);
            $_SESSION['success'] = 'Personal Detail Updated Successfully !!';
        } catch(PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
}
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
                        <h4 class="mb-sm-0">Edit Personal Details</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
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
            <?php
            include 'includes/config.php';
            $id = intval($_GET['id']);
            $query = mysqli_query($conn, "SELECT tbl_profile.*,tbl_profile.id as p_id,tbl_states.state_name as s_name,tbl_states.state_id as sid,sub_industries.name as i_name,sub_industries.id as s_id from tbl_profile join tbl_states on tbl_states.state_id=tbl_profile.state join sub_industries on sub_industries.id=tbl_profile.sub_category_id WHERE tbl_profile.id='$id'");
            while($row = mysqli_fetch_array($query))
            {
            ?>
            <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate onsubmit="return validateForm()">
                <input type="hidden" value="<?php echo $row['p_id'];?>" name="id">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Personal Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <!-- Required Fields -->
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="companyname" class="form-label">Company Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="company_name" value="<?php echo htmlspecialchars($row['company_name']);?>" id="companyname" placeholder="Enter Company Name" required>
                                                <div class="invalid-feedback">Please enter company name</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="experience" class="form-label">Experience</label>
                                                <input type="text" class="form-control" name="experience" value="<?php echo htmlspecialchars($row['experience']);?>" id="experience" placeholder="Enter Your Experience">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="contact_person" class="form-label">Contact Person <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="contact_person" value="<?php echo htmlspecialchars($row['contact_person']);?>" id="contact_person" placeholder="Enter Contact Person Name" required>
                                                <div class="invalid-feedback">Please enter contact person</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="phone" class="form-label">Phone No <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="phone" value="<?php echo htmlspecialchars($row['phone']);?>" id="phone" placeholder="Enter Phone Number" required>
                                                <div class="invalid-feedback">Please enter phone number</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="alt_phone" class="form-label">Alternative Phone No</label>
                                                <input type="text" class="form-control" value="<?php echo htmlspecialchars($row['alt_phone']);?>" name="alt_phone" id="alt_phone" placeholder="Enter Alternative Phone">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="whatsap_no" class="form-label">Whatsapp No <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="whatsap_no" value="<?php echo htmlspecialchars($row['whatsap_no']);?>" id="whatsap_no" placeholder="Whatsapp No" required>
                                                <div class="invalid-feedback">Please enter Whatsapp number</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="landline_no" class="form-label">Landline No</label>
                                                <input type="text" class="form-control" value="<?php echo htmlspecialchars($row['landline_no']);?>" name="landline_no" id="landline_no" placeholder="Enter Landline No">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="alt_landline_no" class="form-label">Alternative Landline No</label>
                                                <input type="text" class="form-control" name="alt_landline_no" value="<?php echo htmlspecialchars($row['alt_landline_no']);?>" id="alt_landline_no" placeholder="Enter Alternative Landline No">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($row['email']);?>" id="email" placeholder="Enter Email Address" required>
                                                <div class="invalid-feedback">Please enter valid email address</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="alt_email" class="form-label">Alternative Email</label>
                                                <input type="email" class="form-control" name="alt_email" value="<?php echo htmlspecialchars($row['alt_email']);?>" id="alt_email" placeholder="Enter Alternative Email Address">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="website" class="form-label">Website</label>
                                                <input type="url" class="form-control" name="website" value="<?php echo htmlspecialchars($row['website']);?>" id="website" placeholder="www.example.com">
                                            </div>
                                        </div>
                                
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="state" class="form-label">State <span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="state" id="state" required>
                                                    <option value="">Select State</option>
                                                    <?php 
                                                    $query_states = mysqli_query($conn, "SELECT * FROM tbl_states");
                                                    while($state = mysqli_fetch_array($query_states)) {
                                                        $selected = ($row['sid'] == $state['state_id']) ? 'selected' : '';
                                                        echo "<option value='{$state['state_id']}' $selected>{$state['state_name']}</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">Please select state</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="city" value="<?php echo htmlspecialchars($row['city']);?>" id="city" placeholder="Enter Your City" required>
                                                <div class="invalid-feedback">Please enter city</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="zipcode" class="form-label">Zipcode <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="zipcode" value="<?php echo htmlspecialchars($row['zipcode']);?>" id="zipcode" minlength="6" maxlength="6" placeholder="Enter zipcode" required>
                                                <div class="invalid-feedback">Please enter valid zipcode (6 characters)</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="location" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="location" value="<?php echo htmlspecialchars($row['location']);?>" id="location" placeholder="Enter Your Address" required>
                                                <div class="invalid-feedback">Please enter address</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter Description"><?php echo htmlspecialchars($row['description']);?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="submit" name="update" class="btn btn-success btn-label right ms-auto nexttab nexttab">
                                                <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Update
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

<script>
// Form validation
function validateForm() {
    'use strict';
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');
    
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
    
    // Additional custom validation
    var phone = document.getElementById('phone');
    if(phone) {
        phone.addEventListener('input', function() {
            this.setCustomValidity('');
            if(!this.checkValidity()) {
                this.setCustomValidity('Please enter a valid phone number');
            }
        });
    }
    
    var email = document.getElementById('email');
    if(email) {
        email.addEventListener('input', function() {
            this.setCustomValidity('');
            if(!this.checkValidity()) {
                this.setCustomValidity('Please enter a valid email address');
            }
        });
    }
    
    var zipcode = document.getElementById('zipcode');
    if(zipcode) {
        zipcode.addEventListener('input', function() {
            this.setCustomValidity('');
            if(this.value.length < 6 || this.value.length > 8) {
                this.setCustomValidity('Zipcode must be between 6-8 characters');
            }
        });
    }
    
    return true;
}

// Initialize form validation on page load
document.addEventListener('DOMContentLoaded', function() {
    validateForm();
    
    // Initialize select2 if it exists
    if($.fn.select2) {
        $('.select2').select2({
            placeholder: "Select an option",
            allowClear: true
        });
    }
});
</script>