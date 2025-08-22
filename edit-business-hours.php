<?php include('dash_header.php');?>
<?php
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
  

		$conn = $pdo->open();

		try{
		    for ($i=0; $i < count($_POST['day_id']) ; $i++){
				$day_id=$_POST['day_id'][$i];
				$id=$_POST['id'][$i];
				$open_at=$_POST['open_at'][$i];
				$day_shift_id=$_POST['day_shift_id'][$i];
				$close_at=$_POST['close_at'][$i];
				$close_id=$_POST['close_id'][$i];
				$night_shift_id=$_POST['night_shift_id'][$i];
			    $stmt = $conn->prepare("UPDATE tbl_business_hrs SET day_id=:day_id, open_at=:open_at, day_shift_id=:day_shift_id, close_at=:close_at, close_id=:close_id, night_shift_id=:night_shift_id  WHERE id=:id");
			    $stmt->execute(['day_id'=>$day_id, 'open_at'=>$open_at,'day_shift_id'=>$day_shift_id, 'close_at'=>$close_at, 'close_id'=>$close_id,'night_shift_id'=>$night_shift_id, 'id'=>$id]);
			    $_SESSION['success'] = 'Profile Business Hours Updated Successfully !!';
			}
			
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';


	}
//	header('location: active-profile.php');
	
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
      <section class="pt70 pb40 bgc-f7">
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
          <div class="col-md-10 offset-md-1 position-relative">
            <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Business Hours Details</h3><!--
              <p class="text mb25">Aliquam lacinia diam quis lacus euismod</p>-->
               <form method="post" enctype="multipart/form-data">
                                         <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $id = $_GET['id'];    
                                                    $stmt = $conn->prepare("SELECT tbl_business_hrs.*,tbl_business_hrs.id as p_id, tbl_close_status.id as c_id, tbl_close_status.type_id as ct_id, tbl_close_status.type as c_type from tbl_business_hrs join tbl_day on tbl_day.id=tbl_business_hrs.day_id join tbl_close_status on tbl_close_status.type_id=tbl_business_hrs.close_id WHERE tbl_business_hrs.profile_id='".$id."' Order by tbl_business_hrs.day_id=1 DESC");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                            ?> 
                                             <input type="hidden" name="id[]" value="<?php echo $row['p_id'];?>">
                                            <div class="row">
                                                 <?php 
                                        include'includes/config.php';
                                        $query=mysqli_query($conn,"select * from tbl_day WHERE id='".$row['day_id']."'");
                                        while($row1=mysqli_fetch_array($query))
                                                    {
                                                    ?>
                                                    <label for="validationDefault04 " class="form-label me-3 "><?php echo $row1['day'];?></label>
                                                    <?php } ?>
                                                <div class="col-md-2">
                                                    
                                                   <input type="hidden" name="day_id[]" value="<?php echo $row['day_id'];?>">
                                                   
                                                    <div class="mb-4">
                                                        <label for="validationDefault04" class="form-label">Status</label>
                                                        <select class="form-select mb-4" name="close_id[]">
                                                            <option value="<?php echo htmlentities($row['ct_id']);?>"><?php echo htmlentities($row['c_type']);?></option>
                                        <?php 
                                        include'includes/config.php';
                                        $query=mysqli_query($conn,"select * from tbl_close_status");
                                        while($rw=mysqli_fetch_array($query))
                                        {
                                        if($row['c_type']==$rw['type'])
                                        {
                                        continue;
                                        }
                                        else{
                                        ?>
                                        <option value="<?php echo $rw['type_id'];?>"><?php echo $rw['type'];?></option>
                                        <?php } } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-md-3">
                                                    <div class="mb-4">
                                                        <label for="validationDefault04" class="form-label">Open At</label>
                                                       <input type="time" class="form-control"  name="open_at[]" value="<?php echo $row['open_at'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                   <div class="mb-4">
                                        <label for="validationDefault04" class="form-label">Shift</label>
                                        <select class="form-select mb-4" name="day_shift_id[]">
                                            <?php
                                                $conn = $pdo->open();
                                                try{
                                                $stmt = $conn->prepare("SELECT * FROM tbl_shift WHERE status='Active'");
                                                $cnt=1;
                                                $stmt->execute();
                                                foreach($stmt as $row){
                                            ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
                                             <?php
                                                    }
                                                }
                                                catch(PDOException $e){
                                                echo $e->getMessage();
                                                }
            
                                                $pdo->close();
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-4">
                                                        <label for="validationDefault04" class="form-label">Closed At</label>
                                                       <input type="time" class="form-control" name="close_at[]" value="<?php echo $row['close_at'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                   <div class="mb-4">
                                        <label for="validationDefault04" class="form-label">Shift</label>
                                        <select class="form-select mb-4" name="night_shift_id[]">
                                            <?php
                                                $conn = $pdo->open();
                                                try{
                                                $stmt = $conn->prepare("SELECT * FROM tbl_shift WHERE status='Active'");
                                                $cnt=1;
                                                $stmt->execute();
                                                foreach($stmt as $row){
                                            ?>
                                                <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
                                                 <?php
                                                }
                                            }
                                            catch(PDOException $e){
                                            echo $e->getMessage();
                                            }
    
                                            $pdo->close();
                                            ?>
                                        </select>
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
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>

<?php include('dash_footer.php');?>