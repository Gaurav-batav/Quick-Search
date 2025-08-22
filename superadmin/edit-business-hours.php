<?php include 'includes/session.php'; ?>
<?php
if(isset($_POST['update'])) {
    $conn = $pdo->open();

    try {
        for ($i=0; $i < count($_POST['day_id']); $i++) {
            $day_id = $_POST['day_id'][$i];
            $id = $_POST['id'][$i];
            
            // Store exactly what comes from the form (12-hour format with AM/PM)
            $open_at = $_POST['open_at'][$i];
            $close_at = $_POST['close_at'][$i];
            $close_id = $_POST['close_id'][$i];
            
            $stmt = $conn->prepare("UPDATE tbl_business_hrs SET day_id=:day_id, open_at=:open_at, close_at=:close_at, close_id=:close_id WHERE id=:id");
            $stmt->execute([
                'day_id' => $day_id, 
                'open_at' => $open_at, 
                'close_at' => $close_at, 
                'close_id' => $close_id, 
                'id' => $id
            ]);
        }
        $_SESSION['success'] = 'Business Hours Updated Successfully!';
    } catch(PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
    
    $pdo->close();
    header('location: edit-business-hours.php?id='.$_GET['id']);
    exit();
}
?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Business Hours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</head>
<body>
    <div class="vertical-overlay"></div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Update Business Hours</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                
                <?php
                if(isset($_SESSION['error'])){
                    echo '
                    <div class="alert alert-danger alert-dismissible bg-danger text-white alert-label-icon fade show" role="alert">
                        <i class="ri-error-warning-line label-icon"></i><strong>Error</strong> - '.$_SESSION['error'].'
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    unset($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                    echo '
                    <div class="alert alert-success alert-dismissible bg-success text-white alert-label-icon fade show" role="alert">
                        <i class="ri-notification-off-line label-icon"></i><strong>Success</strong> - '.$_SESSION['success'].'
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    unset($_SESSION['success']);
                }
                ?>
                
                <div class="row">
                    <div class="col-xxl-8">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Business Hours</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <?php
                                    $conn = $pdo->open();
                                    try {
                                        $id = $_GET['id'];    
                                        $stmt = $conn->prepare("SELECT 
                                            tbl_business_hrs.*,
                                            tbl_business_hrs.id as p_id, 
                                            tbl_close_status.type_id as ct_id, 
                                            tbl_close_status.type as c_type,
                                            tbl_day.day as day_name
                                            FROM tbl_business_hrs 
                                            JOIN tbl_day ON tbl_day.id = tbl_business_hrs.day_id 
                                            JOIN tbl_close_status ON tbl_close_status.type_id = tbl_business_hrs.close_id 
                                            WHERE tbl_business_hrs.profile_id = :profile_id 
                                            ORDER BY tbl_business_hrs.day_id ASC");
                                        $stmt->execute(['profile_id' => $id]);
                                        
                                        while($row = $stmt->fetch()) {
                                            // Convert stored 24-hour times to 12-hour format without seconds for display
                                            $open_time = !empty($row['open_at']) ? $row['open_at'] : '12:00 AM';
                                            $close_time = !empty($row['close_at']) ? $row['close_at'] : '12:00 AM';
                                    ?>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label me-3"><?php echo htmlspecialchars($row['day_name']); ?></label>
                                            <input type="hidden" name="id[]" value="<?php echo $row['p_id']; ?>">
                                            <input type="hidden" name="day_id[]" value="<?php echo $row['day_id']; ?>">
                                            
                                            <div class="mb-4">
                                                <select class="form-select" name="close_id[]">
                                                    <option value="<?php echo $row['ct_id']; ?>"><?php echo htmlspecialchars($row['c_type']); ?></option>
                                                    <?php
                                                    // Get all status options excluding current one
                                                    $status_query = $conn->prepare("SELECT * FROM tbl_close_status WHERE type_id != :current_id");
                                                    $status_query->execute(['current_id' => $row['ct_id']]);
                                                    while($status = $status_query->fetch()) {
                                                        echo '<option value="'.$status['type_id'].'">'.htmlspecialchars($status['type']).'</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label class="form-label">Open At</label>
                                                <input type="text" class="form-control timepicker" name="open_at[]" value="<?php echo $open_time; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label class="form-label">Closed At</label>
                                                <input type="text" class="form-control timepicker" name="close_at[]" value="<?php echo $close_time; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    } catch(PDOException $e) {
                                        $_SESSION['error'] = $e->getMessage();
                                    }
                                    $pdo->close();
                                    ?>
                                    
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="submit" class="btn btn-success btn-label right ms-auto" name="update">
                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>

    <!-- JavaScript Libraries -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
$(document).ready(function(){
    $('.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '12:00am',
        maxTime: '11:30pm',
        startTime: '12:00am',
        dynamic: false,
        dropdown: true,
        scrollbar: true,
        disableTextInput: true,
        forceRoundTime: true,
        useSelect: true
    });
    
    // Update timepicker values when status changes
    $('select[name="close_id[]"]').change(function() {
        var row = $(this).closest('.row');
        if($(this).val() == '0') { // If status is "Closed"
            row.find('.timepicker').val('12:00 AM').timepicker('setTime', '12:00 AM');
        }
    });
});
    </script>
</body>
</html>