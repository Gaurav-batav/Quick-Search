<?php include 'includes/session.php';?>
<?php include('header.php');?>
<?php
if(isset($_POST['add2'])){
    $profile_id=$_POST['profile_id'];
    $fb=$_POST['fb'];
    $google=$_POST['google'];
    $linkdin=$_POST['linkdin'];
    $youtube=$_POST['youtube'];
    $insta=$_POST['insta'];

    $conn = $pdo->open();

    try{
        $stmt = $conn->prepare("UPDATE tbl_profile SET profile_id=:profile_id, fb=:fb, google=:google, linkdin=:linkdin, youtube=:youtube, insta=:insta WHERE profile_id=:profile_id");
        $stmt->execute(['profile_id'=>$profile_id, 'fb'=>$fb, 'google'=>$google, 'linkdin'=>$linkdin, 'youtube'=>$youtube, 'insta'=>$insta]);
    }
    catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
    }
}
?>

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
                <form class="needs-validation" method="post" action="addprofile-step5.php" enctype="multipart/form-data" novalidate onsubmit="return validateForm()">
                    <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">
                    <div class="col-xxl-12">

                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Upload Thumbnail</h4>
                                <div class="flex-shrink-0">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input class="form-control" id="image2" name="thumbnail2" type="file" accept=".jpg, .png, .jpeg, .webp" required>
                                        <input type="hidden" id="croppedImage2" name="croppedImage2">
                                        <div class="invalid-feedback">
                                            Please Select Image (JPEG, JPG, PNG, or WEBP)
                                        </div> <br>
                                        <span class="badge bg-info">Recommended: 600 x 500 pixels</span> <br>
                                        <small class="text-muted">This will be your Thumbnail</small>
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-8 text-center">
                                        <div id="imagePreviewContainer2" class="mb-3" style="display:none;">
                                            <div class="cropper-container-wrapper">
                                                <img id="imagePreview2" class="img-fluid rounded shadow-sm">
                                            </div>
                                            <div class="d-flex justify-content-center mt-2">
                                                <button type="button" id="cropButton2" class="btn btn-success me-2" style="display:none;">
                                                    <i class="ri-crop-line align-middle me-1"></i> Apply Crop
                                                </button>
                                                <button type="button" id="resetCropButton2" class="btn btn-outline-danger" style="display:none;">
                                                    <i class="ri-close-line align-middle me-1"></i> Reset
                                                </button>
                                            </div>
                                        </div>
                                        <img src="https://quicksearchonline.in/images/istockphoto-1222357475-612x612.jpg" id="blah2" class="img-thumbnail" width="320" height="220">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Upload Cover Photo</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input class="form-control" id="image" name="thumbnail" type="file" accept=".jpg, .png, .jpeg, .webp" required>
                                        <input type="hidden" id="croppedImage" name="croppedImage">
                                        <div class="invalid-feedback">
                                            Please Select Image (JPEG, JPG, PNG, or WEBP)
                                        </div> <br>
                                        <span class="badge bg-info">Recommended: 1200 x 450 pixels</span> <br>
                                        <small class="text-muted">This will be your main cover photo</small>
                                        
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
                                        <img src="https://quicksearchonline.in/images/istockphoto-1222357475-612x612.jpg" id="blah" class="img-thumbnail" width="320" height="220">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start gap-3 mt-4">
                            <a class="btn btn-link text-decoration-none btn-label previestab" href="addprofile-step2.php" role="button"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back</a>
                            <button type="submit" class="btn btn-success btn-label right ms-auto nexttab" name="add3"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next</button>
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

<!-- prismjs plugin -->
<script src="assets/libs/prismjs/prism.js"></script>

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
    
    .was-validated .form-control:invalid, .form-control.is-invalid {
        border-color: #f06548;
        padding-right: calc(1.5em + 0.94rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23f06548'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23f06548' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.235rem) center;
        background-size: calc(0.75em + 0.47rem) calc(0.75em + 0.47rem);
    }
</style>

<script src="assets/js/app.js"></script>
<script>
// Initialize croppers
let cropper, cropper2;

// First thumbnail functionality
const imageInput = document.getElementById('image');
const imagePreview = document.getElementById('imagePreview');
const imagePreviewContainer = document.getElementById('imagePreviewContainer');
const cropButton = document.getElementById('cropButton');
const resetCropButton = document.getElementById('resetCropButton');
const croppedImageInput = document.getElementById('croppedImage');
const blah = document.getElementById('blah');

// Second thumbnail functionality
const imageInput2 = document.getElementById('image2');
const imagePreview2 = document.getElementById('imagePreview2');
const imagePreviewContainer2 = document.getElementById('imagePreviewContainer2');
const cropButton2 = document.getElementById('cropButton2');
const resetCropButton2 = document.getElementById('resetCropButton2');
const croppedImageInput2 = document.getElementById('croppedImage2');
const blah2 = document.getElementById('blah2');

// Setup for first thumbnail (cover photo - 1200x450)
imageInput.addEventListener('change', function(e) {
    handleImageUpload(e, imagePreview, imagePreviewContainer, cropButton, resetCropButton, blah, 1200/450);
});

// Setup for second thumbnail (thumbnail - 600x500)
imageInput2.addEventListener('change', function(e) {
    handleImageUpload(e, imagePreview2, imagePreviewContainer2, cropButton2, resetCropButton2, blah2, 600/500);
});

// Handle crop button for first thumbnail
cropButton.addEventListener('click', function() {
    handleCrop(cropper, imageInput, croppedImageInput, blah, imagePreviewContainer, cropButton, resetCropButton, 1200, 450);
});

// Handle crop button for second thumbnail
cropButton2.addEventListener('click', function() {
    handleCrop(cropper2, imageInput2, croppedImageInput2, blah2, imagePreviewContainer2, cropButton2, resetCropButton2, 600, 500);
});

// Handle reset crop button for first thumbnail
resetCropButton.addEventListener('click', function() {
    resetCropper(imageInput, blah, imagePreviewContainer, cropButton, resetCropButton);
});

// Handle reset crop button for second thumbnail
resetCropButton2.addEventListener('click', function() {
    resetCropper(imageInput2, blah2, imagePreviewContainer2, cropButton2, resetCropButton2);
});

// Form validation function
function validateForm() {
    const form = document.querySelector('.needs-validation');
    let isValid = true;
    
    // Check if both images are selected and cropped
    if (!imageInput.files || imageInput.files.length === 0) {
        imageInput.classList.add('is-invalid');
        isValid = false;
    } else {
        imageInput.classList.remove('is-invalid');
    }
    
    if (!imageInput2.files || imageInput2.files.length === 0) {
        imageInput2.classList.add('is-invalid');
        isValid = false;
    } else {
        imageInput2.classList.remove('is-invalid');
    }
    
    // Check if cropped images are available (if cropper was used)
    if (cropper && !croppedImageInput.value) {
        alert('Please apply crop for the cover photo');
        isValid = false;
    }
    
    if (cropper2 && !croppedImageInput2.value) {
        alert('Please apply crop for the thumbnail');
        isValid = false;
    }
    
    if (!isValid) {
        // Scroll to the first invalid field
        const firstInvalid = document.querySelector('.is-invalid');
        if (firstInvalid) {
            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        return false;
    }
    
    return true;
}

// Generic function to handle image upload and preview
function handleImageUpload(e, previewElement, containerElement, buttonElement, resetButtonElement, thumbnailElement, aspectRatio) {
    const files = e.target.files;
    const inputElement = e.target;
    
    if (files && files.length > 0) {
        const file = files[0];
        
        // Check file type
        const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
        if (!validTypes.includes(file.type)) {
            alert('Please select an image file (JPEG, PNG, JPG, or WEBP)');
            inputElement.value = '';
            inputElement.classList.add('is-invalid');
            return;
        }
        
        // Check file size (max 5MB)
        if (file.size > 5 * 1024 * 1024) {
            alert('File size should not exceed 5MB');
            inputElement.value = '';
            inputElement.classList.add('is-invalid');
            return;
        }
        
        inputElement.classList.remove('is-invalid');
        
        const reader = new FileReader();
        
        reader.onload = function(event) {
            previewElement.src = event.target.result;
            containerElement.style.display = 'block';
            thumbnailElement.style.display = 'none';
            buttonElement.style.display = 'block';
            resetButtonElement.style.display = 'block';
            
            // Destroy previous cropper instance if exists
            if (previewElement.id === 'imagePreview' && cropper) {
                cropper.destroy();
            } else if (previewElement.id === 'imagePreview2' && cropper2) {
                cropper2.destroy();
            }
            
            // Initialize cropper with specified aspect ratio
            const newCropper = new Cropper(previewElement, {
                aspectRatio: aspectRatio,
                viewMode: 1,
                autoCropArea: 0.8,
                responsive: true,
                guides: true,
                center: true,
                highlight: true,
                cropBoxMovable: true,
                cropBoxResizable: true,
                minContainerWidth: 300,
                minContainerHeight: 300,
                ready: function() {
                    // Set crop box data based on aspect ratio
                    const containerData = this.cropper.getContainerData();
                    const cropBoxWidth = containerData.width;
                    const cropBoxHeight = cropBoxWidth / aspectRatio;
                    
                    this.cropper.setCropBoxData({
                        width: cropBoxWidth,
                        height: cropBoxHeight
                    });
                }
            });
            
            // Store the cropper instance based on which image it is
            if (previewElement.id === 'imagePreview') {
                cropper = newCropper;
            } else {
                cropper2 = newCropper;
            }
        };
        
        reader.readAsDataURL(file);
    } else {
        inputElement.classList.add('is-invalid');
    }
}

// Generic function to handle cropping
function handleCrop(cropperInstance, inputElement, croppedInputElement, thumbnailElement, containerElement, buttonElement, resetButtonElement, targetWidth, targetHeight) {
    if (cropperInstance) {
        // Get the cropped canvas
        const canvas = cropperInstance.getCroppedCanvas({
            width: targetWidth,
            height: targetHeight,
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
                const file = new File([blob], inputElement.files[0].name, {
                    type: blob.type,
                    lastModified: Date.now()
                });
                
                // Create a new FileList and DataTransfer to replace the original file
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                inputElement.files = dataTransfer.files;
                
                // Update the preview
                thumbnailElement.src = URL.createObjectURL(blob);
                thumbnailElement.style.display = 'block';
                containerElement.style.display = 'none';
                buttonElement.style.display = 'none';
                resetButtonElement.style.display = 'none';
                
                // Store cropped image data if needed
                croppedInputElement.value = canvas.toDataURL();
                
                // Clean up
                cropperInstance.destroy();
                
                // Clear the correct cropper instance
                if (inputElement.id === 'image') {
                    cropper = null;
                } else {
                    cropper2 = null;
                }
                
                // Remove invalid class after successful crop
                inputElement.classList.remove('is-invalid');
            }, inputElement.files[0].type, 0.9); // 0.9 quality
        }
    }
}

// Generic function to reset cropper
function resetCropper(inputElement, thumbnailElement, containerElement, buttonElement, resetButtonElement) {
    // Reset file input
    inputElement.value = '';
    
    // Hide cropper elements
    containerElement.style.display = 'none';
    buttonElement.style.display = 'none';
    resetButtonElement.style.display = 'none';
    
    // Show default thumbnail
    thumbnailElement.style.display = 'block';
    thumbnailElement.src = "https://quicksearchonline.in/images/istockphoto-1222357475-612x612.jpg";
    
    // Destroy cropper instance if exists
    if (inputElement.id === 'image' && cropper) {
        cropper.destroy();
        cropper = null;
    } else if (inputElement.id === 'image2' && cropper2) {
        cropper2.destroy();
        cropper2 = null;
    }
    
    // Add invalid class since the field is now empty
    inputElement.classList.add('is-invalid');
}

// Bootstrap validation
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
</body>
</html>