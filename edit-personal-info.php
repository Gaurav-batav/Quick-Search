<?php include('dash_header.php');?>
<?php
	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id=$_POST['id'];
	$company_name=$_POST['company_name'];
	$slug = slugify($company_name);
	$experience=$_POST['experience'];
	$contact_person=$_POST['contact_person'];
	$phone=$_POST['phone'];
	$alt_phone=$_POST['alt_phone'];
	$whatsap_no=$_POST['whatsap_no'];
	$landline_no=$_POST['landline_no'];
	$alt_landline_no=$_POST['alt_landline_no'];
	$email=$_POST['email'];
	$alt_email=$_POST['alt_email'];
	$website=$_POST['website'];
	$description=$_POST['description'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET company_name=:company_name, slug=:slug, experience=:experience, contact_person=:contact_person, phone=:phone, alt_phone=:alt_phone, whatsap_no=:whatsap_no, landline_no=:landline_no, alt_landline_no=:alt_landline_no, email=:email, alt_email=:alt_email, website=:website, description=:description  WHERE id=:id");
			$stmt->execute(['id'=>$id, 'company_name'=>$company_name, 'slug'=>$slug, 'experience'=>$experience, 'contact_person'=>$contact_person, 'phone'=>$phone, 'alt_phone'=>$alt_phone, 'whatsap_no'=>$whatsap_no, 'landline_no'=>$landline_no, 'alt_landline_no'=>$alt_landline_no, 'email'=>$email, 'alt_email'=>$alt_email,  'website'=>$website, 'description'=>$description]);
			$_SESSION['success'] = 'Personal Detail Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';
	}

	header('location:business-profile');

?>
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="dashboard" class="items-center"><i class="flaticon-discovery mr15"></i>Dashboard</a>
          </div>
          <div class="sidebar_list_item ">
            <!--<a href="page-dashboard-message.html" class="items-center"><i class="flaticon-chat-1 mr15"></i>Message</a>-->
          </div>
          <?php
                $conn = $pdo->open();
                try{
                $stmt = $conn->prepare("SELECT * FROM tbl_profile where user_id='".$user['id']."' Order By creation_on DESC limit 1");
                $cnt=1;
                $stmt->execute();
                foreach($stmt as $row){
            ?> 
          <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
          <div class="sidebar_list_item">
            <a href="business-profile" class="items-center -is-active"><i class="flaticon-new-tab mr15"></i>My Business Profile</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="enquiry" class="items-center"><i class="flaticon-email mr15"></i>Enquiry</a>
          </div>
           <?php
                }
            }
            catch(PDOException $e){
            echo $e->getMessage();
            }

            $pdo->close();
            ?>
          <div class="sidebar_list_item ">
            <!--<a href="page-dashboard-savesearch.html" class="items-center"><i class="flaticon-search-2 mr15"></i>Saved Search</a>-->
          </div>
          <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
          
          <div class="sidebar_list_item ">
            <a href="my-profile" class="items-center"><i class="flaticon-user mr15"></i>My Profile</a>
          </div>
          <div class="sidebar_list_item">
            <a href="logout" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
          </div>
        </div>
      </div>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-f7">
          <div class="row pb40">
            <div class="col-lg-12">
              <div class="dashboard_navigationbar d-block d-lg-none">
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                  <ul id="myDropdown" class="dropdown-content">
                    <li class="active"><a href="dashboard"><i class="flaticon-discovery mr10"></i>Dashboard</a></li>
                     <?php
                $conn = $pdo->open();
                try{
                $stmt = $conn->prepare("SELECT * FROM tbl_profile where user_id='".$user['id']."' Order By creation_on DESC limit 1");
                $cnt=1;
                $stmt->execute();
                foreach($stmt as $row){
            ?> 
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE LISTINGS</p></li>
                    <li><a href="business-profile"><i class="flaticon-new-tab mr15"></i>My Business Profile</a></li>
                    <li><a href="enquiry"><i class="flaticon-email mr15"></i>Enquiry</a></li>
                    <?php
                }
            }
            catch(PDOException $e){
            echo $e->getMessage();
            }

            $pdo->close();
            ?>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE ACCOUNT</p></li>
                    <li><a href="my-profile"><i class="flaticon-user mr10"></i>My Profile</a></li>
                    <li><a class="" href="logout"><i class="flaticon-exit mr10"></i>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
    <!-- Breadcumb Sections -->
      <section class="pt30 pb40 bgc-f7">
      <div class="container">
        <div class="row">
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
          <div class="col-md-8 offset-md-2 position-relative">
            <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Personal Details</h3>
              <p class="text mb25">Fill all required personal details</p>
              <?php
                    include'includes/config.php';
                    $id=intval($_GET['id']);
                    $query=mysqli_query($conn,"SELECT tbl_profile.*,tbl_profile.id as p_id,tbl_states.state_name as s_name,tbl_states.state_id as sid,sub_industries.name as i_name ,sub_industries.id as s_id from tbl_profile join tbl_states on tbl_states.state_id=tbl_profile.state join sub_industries on sub_industries.id=tbl_profile.sub_category_id WHERE tbl_profile.id='$id'");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
              <form class="needs-validation" method="post" enctype="multipart/form-data"  novalidate>
                         <input type="hidden" value="<?php echo $row['p_id'];?>" name="id">
                <div class="row">
                     <input type="hidden" name="profile_id" value="<?php echo $row['p_id'];?>">
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Company Name <span class="text-red">* </span></label>
                      <input type="text"  name="company_name" value="<?php echo $row['company_name'];?>" class="form-control" placeholder="Enter Company Name" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Experience</label>
                      <input type="text" onkeypress="return isNumberKey(event)"  name="experience" value="<?php echo $row['experience'];?>" class="form-control" placeholder="Enter Your Experience ">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Contact Person <span class="text-red">* </span></label>
                      <input type="text" name="contact_person" value="<?php echo $row['contact_person'];?>" class="form-control" placeholder="Enter Contact Person" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Website</label>
                      <input type="url" name="website" value="<?php echo $row['website'];?>" class="form-control" placeholder="Enter Your Website">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Mobile No <span class="text-red">* </span></label>
                      <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="phone" value="<?php echo $row['phone'];?>" class="form-control" placeholder="Enter Mobile No " required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Alternative Mobile No</label>
                      <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" value="<?php echo $row['alt_phone'];?>" name="alt_phone" class="form-control" placeholder="Enter Alternative Mobile No">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Landline No</label>
                      <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $row['landline_no'];?>" name="landline_no" class="form-control" placeholder="Enter Landline No">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Alternative Landline No</label>
                      <input type="text" onkeypress="return isNumberKey(event)" name="alt_landline_no" value="<?php echo $row['alt_landline_no'];?>"  class="form-control" placeholder="Enter Alternative Landline No">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Email <span class="text-red">* </span></label>
                      <input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control" placeholder="Enter Your Email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Alternative Email</label>
                      <input type="email" name="alt_email" value="<?php echo $row['alt_email'];?>" class="form-control" placeholder="Enter Alternative Email ">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Whatsapp No</label>
                      <input type="text" maxlength="10" onkeypress="return isNumberKey(event)" name="whatsap_no" value="<?php echo $row['whatsap_no'];?>" class="form-control" placeholder="Enter Whatsapp No">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Description</label>
                      <textarea cols="30" name="description" rows="3" placeholder="There are many variations of passages."><?php echo $row['description'];?></textarea>
                    </div>
                  </div>
                  <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="d-grid">
                                <a class="ud-btn btn-success" href="business-profile"><i class="fal fa-arrow-left"></i> Back</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-grid">
                                <button class="ud-btn btn-dark" type="submit" name="update"><i class="fal fa-arrow-right-long"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>

<?php include('dash_footer.php');?>