<?php include 'includes/session.php'; ?>
<?php

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['delete'])){
    // Verify CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $_SESSION['error'] = 'Invalid CSRF token';
        header('Location: edit-gallery.php?id='.$_GET['id']);
        exit();
    }

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
    
    // Redirect after processing
    header('Location: edit-gallery.php?id='.$_GET['id']);
    exit();
}
elseif(isset($_POST['add'])){
    // Verify CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $_SESSION['error'] = 'Invalid CSRF token';
        header('Location: edit-gallery.php?id='.$_GET['id']);
        exit();
    }

    $profile_id = $_POST['profile_id'];
    
    if(empty($_POST['croppedImage'])) {
        $_SESSION['error'] = 'Please crop the image before uploading';
        header('Location: edit-gallery.php?id='.$_GET['id']);
        exit();
    }
    
    $originalPath = "../uploads/original/";
    $smallPath = "../uploads/small/";
    $mediumPath = "../uploads/medium/";
    $largePath = "../uploads/large/";
    
    if (!file_exists($originalPath)) {
        mkdir($originalPath, 0777, true);
    }
    if (!file_exists($smallPath)) {
        mkdir($smallPath, 0777, true);
    }
    if (!file_exists($mediumPath)) {
        mkdir($mediumPath, 0777, true);
    }
    if (!file_exists($largePath)) {
        mkdir($largePath, 0777, true);
    }
    
    // Process the cropped image
    if(isset($_POST['croppedImage']) && !empty($_POST['croppedImage'])){
        $croppedImage = $_POST['croppedImage'];
        $imageName = uniqid() . '.jpg';
        
        $croppedImage = str_replace('data:image/jpeg;base64,', '', $croppedImage);
        $croppedImage = str_replace(' ', '+', $croppedImage);
        $imageData = base64_decode($croppedImage);
        
        file_put_contents($originalPath . $imageName, $imageData);
        
        $originalImage = imagecreatefromstring($imageData);
        
        $smallWidth = 80;
        $mediumWidth = 280;
        $largeWidth = 800;
        
        $originalWidth = imagesx($originalImage);
        $originalHeight = imagesy($originalImage);
        $aspectRatio = $originalHeight / $originalWidth;
        
        $smallHeight = round($smallWidth * $aspectRatio);
        $mediumHeight = round($mediumWidth * $aspectRatio);
        $largeHeight = round($largeWidth * $aspectRatio);
        
        $smallImage = imagecreatetruecolor($smallWidth, $smallHeight);
        $mediumImage = imagecreatetruecolor($mediumWidth, $mediumHeight);
        $largeImage = imagecreatetruecolor($largeWidth, $largeHeight);
        
        imagecopyresampled($smallImage, $originalImage, 0, 0, 0, 0, $smallWidth, $smallHeight, $originalWidth, $originalHeight);
        imagecopyresampled($mediumImage, $originalImage, 0, 0, 0, 0, $mediumWidth, $mediumHeight, $originalWidth, $originalHeight);
        imagecopyresampled($largeImage, $originalImage, 0, 0, 0, 0, $largeWidth, $largeHeight, $originalWidth, $originalHeight);
        
        imagejpeg($smallImage, $smallPath . $imageName, 90);
        imagejpeg($mediumImage, $mediumPath . $imageName, 90);
        imagejpeg($largeImage, $largePath . $imageName, 90);
        
        imagedestroy($originalImage);
        imagedestroy($smallImage);
        imagedestroy($mediumImage);
        imagedestroy($largeImage);
    }

    $conn = $pdo->open();

    try{
        $stmt = $conn->prepare("INSERT INTO product_images(profile_id, original_path, small_path, medium_path, large_path) VALUES (:profile_id, :original_path, :small_path, :medium_path, :large_path)");
        $stmt->execute(['profile_id'=>$profile_id,'original_path'=>$imageName,'small_path'=>$imageName, 'medium_path'=>$imageName, 'large_path'=>$imageName]);
        $_SESSION['success'] = 'Photo added successfully';
    }
    catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
    
    // Redirect after processing
    header('Location: edit-gallery.php?id='.$_GET['id']);
    exit();
}

// Generate new CSRF token for the form
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;
?>
<?php include('header.php');?>
<?php include('sidebar.php');?>      
<div class="vertical-overlay"></div>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Gallery</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Gallery</a></li>
                                <li class="breadcrumb-item active">Edit Gallery</li>
                            </ol>
                        </div>
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
                    <i class='ri-notification-off-line label-icon'></i><strong>Success</strong> - ".$_SESSION['success']."
                    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
                unset($_SESSION['success']);
            }
            ?>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <ul class="list-inline categories-filter animation-nav" id="filter">
                                            <li class="list-inline-item">
                                                <a class="categories active" data-filter="*" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal">
                                                    Upload Photo
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row gallery-wrapper">
                                        <?php
                                        include 'includes/config.php';
                                        $id=intval($_GET['id']);
                                        $query=mysqli_query($conn,"SELECT * FROM tbl_profile WHERE id='$id'");
                                        while($row=mysqli_fetch_array($query))
                                        {
                                        ?>
                                        <?php
                                        $query=mysqli_query($conn,"SELECT * from product_images WHERE profile_id='".$row['profile_id']."'");
                                        $cnt=1;
                                        while($row1=mysqli_fetch_array($query))
                                        {
                                        ?>
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="../uploads/original/<?php echo $row1['large_path'];?>" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="../uploads/medium/<?php echo $row1['medium_path'];?>" alt="" />
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <a data-bs-toggle="modal" data-id="<?php echo $row1['id'];?>" href="#delete" class="btn btn-sm fs-20 btn-link text-body text-decoration-none px-0 text-right fs-15 delete">
                                                                    <i class="ri-delete-bin-line" style="color:red"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Delete Confirmation Modal -->
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
                                <h4>Are you sure?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this photo?</p>
                            </div>
                        </div>
                        <form method="POST">
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
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
        
        <!-- Upload Photo Modal -->
        <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title">Upload Photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                        <div class="modal-body">
                            <?php
                            $id=intval($_GET['id']);
                            $query=mysqli_query($conn,"SELECT * FROM tbl_profile WHERE id='$id'");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>
                            <input type="hidden" value="<?php echo $row['profile_id'];?>" name="profile_id">
                            <?php } ?>
                            
                            <div class="mb-3">
                                <label class="form-label">Upload File <span class="text-danger">*</span></label>
                                <input type="file" id="imageInput" name="image" accept=".jpg, .jpeg, .png" class="form-control" required>
                                <div class="invalid-feedback">Please select an image file</div>
                            </div>
                            
                            <div id="imagePreviewContainer" style="display: none; margin-top: 20px;">
                                <div id="cropperContainer" style="max-height: 500px; margin-bottom: 10px;">
                                    <img id="imageToCrop" style="max-width: 100%; max-height: 100%;">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="button" id="cropButton" class="btn btn-primary">Crop Image</button>
                                    <button type="button" id="resetCrop" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>
                            
                            <div id="croppedPreviewContainer" style="display: none; margin-top: 20px;">
                                <h5 class="text-center">Cropped Preview</h5>
                                <div class="text-center">
                                    <img id="croppedPreview" style="max-width: 100%; max-height: 300px; border: 1px solid #ddd; padding: 5px;">
                                </div>
                                <div class="text-center mt-2">
                                    <button type="button" id="editCrop" class="btn btn-info">Edit Crop</button>
                                </div>
                            </div>
                            
                            <input type="hidden" id="croppedImage" name="croppedImage">
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="add" id="submitButton" class="btn btn-success" disabled>Add Photo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>

<!-- Cropper JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize cropper
    let cropper;
    const imageInput = document.getElementById('imageInput');
    const cropperContainer = document.getElementById('cropperContainer');
    const imagePreviewContainer = document.getElementById('imagePreviewContainer');
    const cropButton = document.getElementById('cropButton');
    const resetCrop = document.getElementById('resetCrop');
    const editCrop = document.getElementById('editCrop');
    const croppedImageInput = document.getElementById('croppedImage');
    const croppedPreviewContainer = document.getElementById('croppedPreviewContainer');
    const croppedPreview = document.getElementById('croppedPreview');
    const submitButton = document.getElementById('submitButton');
    const imageToCrop = document.getElementById('imageToCrop');

    imageInput.addEventListener('change', function(e) {
        const files = e.target.files;
        
        if (files && files.length > 0) {
            const file = files[0];
            
            // Check if file is an image
            if (!file.type.match('image.*')) {
                alert('Please select an image file (JPEG, PNG)');
                return;
            }
            
            const reader = new FileReader();
            
            reader.onload = function(event) {
                // Clear previous cropper instance if exists
                if (cropper) {
                    cropper.destroy();
                }
                
                // Hide cropped preview if showing
                croppedPreviewContainer.style.display = 'none';
                
                // Set image source
                imageToCrop.src = event.target.result;
                
                // Show preview container
                imagePreviewContainer.style.display = 'block';
                
                // Disable submit button
                submitButton.disabled = true;
                
                // Initialize cropper with 4:3 aspect ratio
                cropper = new Cropper(imageToCrop, {
                    aspectRatio: 4/3,
                    viewMode: 1,
                    autoCropArea: 0.8,
                    responsive: true,
                    guides: true,
                    center: true,
                    highlight: true,
                    cropBoxMovable: true,
                    cropBoxResizable: true
                });
            };
            
            reader.readAsDataURL(file);
        }
    });

    // Crop button click handler
    cropButton.addEventListener('click', function() {
        if (cropper) {
            // Get the cropped canvas
            const canvas = cropper.getCroppedCanvas({
                width: 1200,
                height: 900,
                minWidth: 256,
                minHeight: 192,
                maxWidth: 4096,
                maxHeight: 4096,
                fillColor: '#fff',
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
            });
            
            if (canvas) {
                // Convert canvas to data URL and store in hidden input
                const croppedImageData = canvas.toDataURL('image/jpeg', 0.9);
                croppedImageInput.value = croppedImageData;
                
                // Show the cropped preview
                croppedPreview.src = croppedImageData;
                croppedPreviewContainer.style.display = 'block';
                
                // Hide the cropper interface
                imagePreviewContainer.style.display = 'none';
                
                // Enable the submit button
                submitButton.disabled = false;
            }
        }
    });

    // Reset crop button
    resetCrop.addEventListener('click', function() {
        if (cropper) {
            cropper.reset();
        }
    });

    // Edit crop button
    editCrop.addEventListener('click', function() {
        // Show the cropper again
        imagePreviewContainer.style.display = 'block';
        croppedPreviewContainer.style.display = 'none';
        submitButton.disabled = true;
    });

    // Delete photo handler
    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $('.distid').val(id);
    });

    // Reset everything when modal is closed
    $('#showModal').on('hidden.bs.modal', function () {
        // Destroy cropper if exists
        if (cropper) {
            cropper.destroy();
        }
        
        // Reset form elements
        imageInput.value = '';
        croppedImageInput.value = '';
        imageToCrop.src = '';
        imagePreviewContainer.style.display = 'none';
        croppedPreviewContainer.style.display = 'none';
        submitButton.disabled = true;
        
        // Reset the form validation
        $('form')[0].reset();
        $('form').removeClass('was-validated');
    });

    // Form validation
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity() || !croppedImageInput.value) {
                        event.preventDefault()
                        event.stopPropagation()
                        
                        if (!croppedImageInput.value) {
                            alert('Please crop the image before submitting.');
                            // Show the cropping interface again
                            imagePreviewContainer.style.display = 'block';
                            croppedPreviewContainer.style.display = 'none';
                        }
                    }
                    
                    form.classList.add('was-validated')
                }, false)
            })
    })()
});
</script>