<?php include('header3.php');?>
<?php
include'includes/config.php';
if(isset($_POST['add5']))
{
$profile_id = $_POST['profile_id'];
$filename = $_FILES['thumbnail']['name'];

            if(!empty($filename)){
			    $rand= rand("0000000","9999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'uploads/original/'.$new_filename);	
			}

$sql=mysqli_query($conn,"insert into tbl_profile(profile_id, thumbnail) values('$profile_id','$new_filename')");
$_SESSION['success']="photo Added Successfully !!";
}
?>

       <!-- Explore Apartment -->
    <section class="pt0 pb90 pb10-md bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
           <div class="main-title text-center">
              <!--<h2 class="title">See how Realton can help</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>-->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
            
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
            <div class="iconbox-style2 active text-center">
              <div class="icon"><img src="images/thank2.webp" alt="" height="200" width="200"></div>
              <div class="iconbox-content">
                <h4 class="title">Thank You</h4>
                <p class="text">Your business profile has been successfully created. Kindly Make a payment</p>
                
                <div class="icon"><img src="images/QR.jpeg" alt="" height="" width="100%" ></div>
                
                <a href="registration/dashboard.php" class="ud-btn btn-white2">Go To Dashboard<i class="fal fa-arrow-right-long"></i></a>
              </div>
              
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
            
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
<?php include('footer.php');?>