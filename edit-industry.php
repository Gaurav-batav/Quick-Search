<?php include('dash_header.php');?>
<?php
//	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id = $_POST['id'];
		$category_id = $_POST['category_id'];
		$sub_category_id = $_POST['sub_category_id'];
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET category_id=:category_id, sub_category_id=:sub_category_id WHERE id=:id");
			$stmt->execute(['category_id'=>$category_id, 'sub_category_id'=>$sub_category_id, 'id'=>$id]);
			$_SESSION['success'] = 'Profile Industry Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();

	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';


	}
	
	//header('location: business-profile');
	
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
          <div class="col-md-6 offset-md-3 position-relative">
            <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Select Industry</h3>
                <p class="text mb25">Fill required details</p>
                 
              <?php
                include'includes/config.php';
                $id=intval($_GET['id']);
                $query=mysqli_query($conn,"SELECT tbl_profile.*,tbl_profile.id as p_id,industries.name as c_name,industries.id as cid,sub_industries.name as s_name ,sub_industries.id as s_id from tbl_profile join industries on industries.id=tbl_profile.category_id join sub_industries on sub_industries.id=tbl_profile.sub_category_id WHERE tbl_profile.id='$id'");
                while($row=mysqli_fetch_array($query))
                {
                ?>
             <form class="needs-validation" method="post"  enctype="multipart/form-data"  novalidate>
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $row['p_id'];?>">
                    <div class="col-lg-12">
                        <div class="mb20">
                            <label class="heading-color ff-heading fw600 mb10">Main Industry <span class="text-red">* </span></label>
                            <div class="location-area">
                                <select  class="form-control select2" onChange="getcat(this.value);" data-choices name="category_id" data-choices-search-false id="select-category" name="category_id" required>
                                                            <option value="<?php echo htmlentities($row['cid']);?>"><?php echo htmlentities($row['c_name']);?></option>
                                                            <?php $query=mysqli_query($conn,"select * from industries where status='Active'");
                                                            while($rw=mysqli_fetch_array($query))
                                                            {
                                                            if($row['c_name']==$rw['name'])
                                                            {
                                                            continue;
                                                            }
                                                            else{
                                                            ?>
                                                            <option value="<?php echo $rw['id'];?>"><?php echo $rw['name'];?></option>
                                                            <?php } } ?>
                                                        </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb20">
                            <label class="heading-color ff-heading fw600 mb10">Sub-Industry<span class="text-red">* </span></label>
                            <div class="location-area">
                                 <select  class="form-control select2" name="sub_category_id" id="category" required>
                                    <option value="<?php echo htmlentities($row['s_id']);?>"><?php echo htmlentities($row['s_name']);?></option>
                                        <?php  include'includes/config.php'; $query=mysqli_query($conn,"select * from sub_industries  where status='Active'");
                                        while($rw=mysqli_fetch_array($query))
                                        {
                                        if($row['s_name']==$rw['name'])
                                        {
                                        continue;
                                        }
                                        else{
                                        ?>
                                        <option value="<?php echo $rw['id'];?>"><?php echo $rw['name'];?></option>
                                        <?php } } ?>
                                </select>
                            </div>
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
<script>
function getcat(val) {
$.ajax({
type: "POST",
url: "get_cat.php",
data:'cat_id='+val,
success: function(data){
$("#category").html(data);
}
});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>  