<?php include 'includes/session.php';?>
<?php include('header.php');?>
<?php
include 'includes/config.php';
if(isset($_POST['add3']))
{
    $profile_id = $_POST['profile_id'];
    
    // Handle first thumbnail
    $filename = $_FILES['thumbnail']['name'];
    $new_filename = '';
    if(!empty($filename)){
        $rand = rand("0000000","9999999");
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_filename = $rand.'.'.$ext;
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], '../uploads/original/'.$new_filename);    
    }
    
    // Handle second thumbnail
    $filename2 = $_FILES['thumbnail2']['name'];
    $new_filename2 = '';
    if(!empty($filename2)){
        $rand2 = rand("0000000","9999999");
        $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
        $new_filename2 = $rand2.'.'.$ext2;
        move_uploaded_file($_FILES['thumbnail2']['tmp_name'], '../uploads/original/'.$new_filename2);    
    }
    
    // Update both thumbnails in database
    if(!empty($new_filename)) {
        if(!empty($new_filename2)) {
            // Both thumbnails provided
            $sql = mysqli_query($conn, "UPDATE tbl_profile SET thumbnail='$new_filename', thumbnail2='$new_filename2' WHERE profile_id='$profile_id'");
        } else {
            // Only first thumbnail provided
            $sql = mysqli_query($conn, "UPDATE tbl_profile SET thumbnail='$new_filename' WHERE profile_id='$profile_id'");
        }
    } elseif(!empty($new_filename2)) {
        // Only second thumbnail provided
        $sql = mysqli_query($conn, "UPDATE tbl_profile SET thumbnail2='$new_filename2' WHERE profile_id='$profile_id'");
    }
    
    $_SESSION['msg'] = "Thumbnail(s) Updated Successfully !!";
}
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <!-- Add jQuery if not already included -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <style>
        .error {
            color: red;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }
        .is-invalid {
            border-color: #f46a6a;
        }
    </style>
</head>
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
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"><span class="text-blue-5">Step 5 :</span> Business Hours</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <!--<label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">-->
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="live-preview">
                                          <form method="post" action="addprofile-finish.php" enctype="multipart/form-data" id="businessHoursForm">
                                                <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">

                                         <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $stmt = $conn->prepare("SELECT * FROM tbl_day WHERE status='Active'");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                            ?> 
                                          
                                            <div class="row day-row">
                                                <div class="col-md-4">
                                                    <label for="validationDefault04 " class="form-label me-3 "><?php echo $row['day'];?></label>
                                                   <input type="hidden" name="day_id[]" value="<?php echo $row['id'];?>">
                                                    <div class="mb-4">
                                                        <label for="validationDefault04" class="form-label">Status</label>
                                                        <select class="form-select mb-4 status-select" name="close_id[]" required>
                                                            <option value="0">Close</option>
                                                            <option value="1">Open</option>
                                                        </select>
                                                        <div class="error status-error"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                 <div class="mt-4">
                                                         <label for="validationDefault04" class="form-label">Open At</label>
                                                         <input type="text" class="form-control mb-4 timepicker open-time" name="open_at[]" value="" readonly required>
                                                         <div class="error open-time-error"></div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-4">
                                                     <div class="mt-4">
                                                         <label for="validationDefault04" class="form-label">Closed At</label>
                                                         <input type="text" class="form-control mb-4 timepicker close-time" name="close_at[]" value="" readonly required>
                                                         <div class="error close-time-error"></div>
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
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <a class="btn btn-link text-decoration-none btn-label previestab" href="addprofile-step2.php" role="button"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back</a>
                                        <button type="submit" class="btn btn-success btn-label right ms-auto nexttab" name="add4" id="submitBtn"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next</button>
                                    </div>
                                  </form>
                                    <div class="d-none code-view">
                                      
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!--end row-->
                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->
             <?php include('footer.php');?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

<script>
$(document).ready(function(){
    $('.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '12:00am',
        maxTime: '11:30pm',
        defaultTime: '12:00am',
        startTime: '12:00am',
        dynamic: false,
        dropdown: true,
        scrollbar: true,
        disableTextInput: true,
        forceRoundTime: true,
        useSelect: true
    });
    
    // Set all time inputs to 00:00 initially
    $('.timepicker').timepicker('setTime', '12:00am');
    
    // Validate form on submit
    $('#businessHoursForm').on('submit', function(e) {
        let isValid = true;
        
        // Reset all error states
        $('.error').text('');
        $('.is-invalid').removeClass('is-invalid');
        
        // Validate each day row
        $('.day-row').each(function() {
            const row = $(this);
            const statusSelect = row.find('.status-select');
            const openTime = row.find('.open-time');
            const closeTime = row.find('.close-time');
            
            // Validate status
            if (!statusSelect.val()) {
                statusSelect.addClass('is-invalid');
                row.find('.status-error').text('Please select status');
                isValid = false;
            }
            
            // Only validate times if status is Open (value 1)
            if (statusSelect.val() === '1') {
                // Validate open time
                if (!openTime.val()) {
                    openTime.addClass('is-invalid');
                    row.find('.open-time-error').text('Please select open time');
                    isValid = false;
                }
                
                // Validate close time
                if (!closeTime.val()) {
                    closeTime.addClass('is-invalid');
                    row.find('.close-time-error').text('Please select close time');
                    isValid = false;
                }
                
                // Validate that close time is after open time
                if (openTime.val() && closeTime.val()) {
                    const openTimeValue = convertTimeToMinutes(openTime.val());
                    const closeTimeValue = convertTimeToMinutes(closeTime.val());
                    
                    if (closeTimeValue <= openTimeValue) {
                        closeTime.addClass('is-invalid');
                        row.find('.close-time-error').text('Close time must be after open time');
                        isValid = false;
                    }
                }
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            // Scroll to first error
            $('html, body').animate({
                scrollTop: $('.is-invalid').first().offset().top - 100
            }, 500);
        }
    });
    
    // Helper function to convert time string to minutes
    function convertTimeToMinutes(timeStr) {
        const time = timeStr.match(/(\d+):(\d+)\s*(am|pm)/i);
        if (!time) return 0;
        
        let hours = parseInt(time[1]);
        const minutes = parseInt(time[2]);
        const period = time[3].toLowerCase();
        
        if (period === 'pm' && hours < 12) hours += 12;
        if (period === 'am' && hours === 12) hours = 0;
        
        return hours * 60 + minutes;
    }
    
    // Show/hide time fields based on status selection
    $('.status-select').on('change', function() {
        const row = $(this).closest('.day-row');
        const isOpen = $(this).val() === '1';
        
        if (isOpen) {
            row.find('.open-time, .close-time').prop('required', true);
        } else {
            row.find('.open-time, .close-time').prop('required', false);
            row.find('.open-time, .close-time').val('');
            row.find('.open-time-error, .close-time-error').text('');
            row.find('.open-time, .close-time').removeClass('is-invalid');
        }
    });
});
</script>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <script src="assets/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</body>
</html>