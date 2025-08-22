<?php include 'includes/session.php';?>
<?php include('header.php');?>
<?php
include 'includes/config.php';
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $filename = $_FILES['thumbnail']['name'];

    if(!empty($filename)){
        $rand = rand("0000000","9999999");
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_filename = $rand.'.'.$ext;
        
        // Temporary upload path
        $temp_file = $_FILES['thumbnail']['tmp_name'];
        
        // Target path for original upload
        $target_path = '../uploads/original/'.$new_filename;
        
        // First move the uploaded file
        move_uploaded_file($temp_file, $target_path);
        
        // Resize the image to exact 1200x450 dimensions
        $resize_result = resize_to_exact_dimensions($target_path, $target_path, 1200, 450, $ext);
        
        if($resize_result) {
            // Delete old thumbnail if exists
            $old_thumb = $conn->query("SELECT thumbnail FROM tbl_profile WHERE id='$id'")->fetch_assoc()['thumbnail'];
            if($old_thumb && file_exists('../uploads/original/'.$old_thumb)) {
                unlink('../uploads/original/'.$old_thumb);
            }
            
            $sql = "UPDATE tbl_profile SET thumbnail='$new_filename' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            
            if($result) {
                $_SESSION['success']="Cover Photo Updated Successfully!";
            } else {
                $_SESSION['error']="Database update failed!";
            }
        } else {
            $_SESSION['error']="Failed to resize cover photo!";
        }
    } else {
        $_SESSION['error']="Please select a cover photo to update!";
    }
}

// Image resizing function
function resize_to_exact_dimensions($source_path, $dest_path, $target_width, $target_height, $ext) {
    switch ($ext) {
        case 'jpg':
        case 'jpeg':
            $src_image = @imagecreatefromjpeg($source_path);
            break;
        case 'png':
            $src_image = @imagecreatefrompng($source_path);
            break;
        case 'gif':
            $src_image = @imagecreatefromgif($source_path);
            break;
        case 'webp':
            $src_image = @imagecreatefromwebp($source_path);
            break;
        default:
            return false;
    }

    if (!$src_image) return false;
    
    // Create new image with exact dimensions
    $dst_image = imagecreatetruecolor($target_width, $target_height);
    
    // Handle transparency for PNG and GIF
    if ($ext === 'png' || $ext === 'gif') {
        imagecolortransparent($dst_image, imagecolorallocatealpha($dst_image, 0, 0, 0, 127));
        imagealphablending($dst_image, false);
        imagesavealpha($dst_image, true);
    }
    
    // Resize without maintaining aspect ratio
    imagecopyresized($dst_image, $src_image, 0, 0, 0, 0, $target_width, $target_height, imagesx($src_image), imagesy($src_image));
    
    $quality = 90;
    
    switch ($ext) {
        case 'jpg':
        case 'jpeg':
            imagejpeg($dst_image, $dest_path, $quality);
            break;
        case 'png':
            imagepng($dst_image, $dest_path, 6);
            break;
        case 'gif':
            imagegif($dst_image, $dest_path);
            break;
        case 'webp':
            imagewebp($dst_image, $dest_path, $quality);
            break;
    }
    
    imagedestroy($src_image);
    imagedestroy($dst_image);
    return true;
}
?>

<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Cover Photo</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                                <li class="breadcrumb-item active">Edit Cover Photo</li>
                            </ol>
                        </div>
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
            
            <div class="row">
                <?php
                $id=intval($_GET['id']);
                $query=mysqli_query($conn,"SELECT thumbnail FROM tbl_profile WHERE id='$id'");
                $row=mysqli_fetch_array($query);
                ?>
                
                <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="col-xxl-8">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Edit Cover Photo (1200x450)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input class="form-control" id="image" name="thumbnail" type="file" accept=".jpg, .png, .jpeg, .webp" required>
                                        <input type="hidden" id="croppedImage" name="croppedImage">
                                        <div class="invalid-feedback">
                                            Please select a valid image file (JPEG, JPG, PNG, or WEBP)
                                        </div>
                                        <br>
                                        <span class="badge bg-info">Recommended: 1200 x 450 pixels</span>
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-8 text-center">
                                        <div id="imagePreviewContainer" class="mb-3" style="display:none;">
                                            <div class="cropper-container-wrapper">
                                                <img id="imagePreview" class="img-fluid rounded shadow-sm">
                                            </div>
                                            <div class="d-flex justify-content-center mt-2">
                                                <button type="button" id="cropButton" class="btn btn-success me-2" style="display:none;">
                                                    <i class="ri-crop-line align-middle me-1"></i> Apply Crop
                                                </button>
                                                <button type="button" id="resetCropButton" class="btn btn-outline-danger" style="display:none;">
                                                    <i class="ri-close-line align-middle me-1"></i> Reset
                                                </button>
                                            </div>
                                        </div>
                                        <?php if(!empty($row['thumbnail']) && file_exists('../uploads/original/' . $row['thumbnail'])): ?>
                                            <img src="../uploads/original/<?php echo $row['thumbnail'];?>" id="blah" class="img-thumbnail" >
                                            <small class="text-muted">Current cover photo</small>
                                        <?php else: ?>
                                            <img src="https://via.placeholder.com/1200x450?text=No+Cover+Photo" id="blah" class="img-thumbnail" >
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <a href="active-profile.php?id=<?php echo $id;?>" class="btn btn-light btn-label">
                                        <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Profile
                                    </a>
                                    <button type="submit" class="btn btn-success btn-label right ms-auto" name="update">
                                        <i class="ri-save-line label-icon align-middle fs-16 ms-2"></i> Update Cover Photo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--end row-->
        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->
    <?php include('footer.php');?>
</div>
<!-- end main content-->

<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/plugins.js"></script>

<!-- Cropper JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<style>
    .cropper-container-wrapper {
        max-height: 500px;
        overflow: hidden;
        margin-bottom: 10px;
    }
    
    .cropper-view-box,
    .cropper-face {
        border-radius: 0;
    }
    
    .cropper-modal {
        background-color: transparent;
        opacity: 0.5;
    }
    
    .img-thumbnail {
        object-fit: cover;
    }
</style>

<script>
// Initialize cropper
let cropper;

// Thumbnail functionality
const imageInput = document.getElementById('image');
const imagePreview = document.getElementById('imagePreview');
const imagePreviewContainer = document.getElementById('imagePreviewContainer');
const cropButton = document.getElementById('cropButton');
const resetCropButton = document.getElementById('resetCropButton');
const croppedImageInput = document.getElementById('croppedImage');
const blah = document.getElementById('blah');

// Setup for thumbnail (1200x450)
imageInput.addEventListener('change', function(e) {
    const files = e.target.files;
    
    if (files && files.length > 0) {
        const file = files[0];
        
        // Check file type
        if (!file.type.match('image.*')) {
            alert('Please select an image file (JPEG, PNG, JPG, or WEBP)');
            return;
        }
        
        // Check file size (max 5MB)
        if (file.size > 5 * 1024 * 1024) {
            alert('File size should not exceed 5MB');
            return;
        }
        
        const reader = new FileReader();
        
        reader.onload = function(event) {
            imagePreview.src = event.target.result;
            imagePreviewContainer.style.display = 'block';
            blah.style.display = 'none';
            cropButton.style.display = 'block';
            resetCropButton.style.display = 'block';
            
            // Destroy previous cropper instance if exists
            if (cropper) {
                cropper.destroy();
            }
            
            // Initialize cropper with 12:5 aspect ratio (1200x450)
            cropper = new Cropper(imagePreview, {
                aspectRatio: 12/5,
                viewMode: 1,
                autoCropArea: 0.8,
                responsive: true,
                guides: true,
                center: true,
                highlight: true,
                cropBoxMovable: true,
                cropBoxResizable: true,
                ready: function() {
                    // Set crop box data based on aspect ratio
                    const containerData = this.cropper.getContainerData();
                    const cropBoxWidth = containerData.width;
                    const cropBoxHeight = cropBoxWidth / (12/5);
                    
                    this.cropper.setCropBoxData({
                        width: cropBoxWidth,
                        height: cropBoxHeight
                    });
                }
            });
        };
        
        reader.readAsDataURL(file);
    }
});

// Handle crop button
cropButton.addEventListener('click', function() {
    if (cropper) {
        // Get the cropped canvas (1200x450)
        const canvas = cropper.getCroppedCanvas({
            width: 1200,
            height: 450,
            minWidth: 256,
            minHeight: 256,
            maxWidth: 4096,
            maxHeight: 4096,
            fillColor: '#fff',
            imageSmoothingEnabled: true,
            imageSmoothingQuality: 'high',
        });
        
        if (canvas) {
            // Convert canvas to blob
            canvas.toBlob(function(blob) {
                // Create a new file from the blob
                const file = new File([blob], imageInput.files[0].name, {
                    type: blob.type,
                    lastModified: Date.now()
                });
                
                // Create a new FileList and DataTransfer to replace the original file
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                imageInput.files = dataTransfer.files;
                
                // Update the preview
                blah.src = URL.createObjectURL(blob);
                blah.style.display = 'block';
                imagePreviewContainer.style.display = 'none';
                cropButton.style.display = 'none';
                resetCropButton.style.display = 'none';
                
                // Store cropped image data if needed
                croppedImageInput.value = canvas.toDataURL();
                
                // Clean up
                cropper.destroy();
                cropper = null;
            }, imageInput.files[0].type, 0.9); // 0.9 quality
        }
    }
});

// Handle reset crop button
resetCropButton.addEventListener('click', function() {
    // Reset file input
    imageInput.value = '';
    
    // Hide cropper elements
    imagePreviewContainer.style.display = 'none';
    cropButton.style.display = 'none';
    resetCropButton.style.display = 'none';
    
    // Show default thumbnail
    blah.style.display = 'block';
    
    // Destroy cropper instance if exists
    if (cropper) {
        cropper.destroy();
        cropper = null;
    }
});
</script>
</body>
</html>