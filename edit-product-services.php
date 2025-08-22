<?php include'dash_header.php';?>
<?php 
include'includes/config.php';
if(isset($_GET['del']))
{
mysqli_query($conn,"delete from tbl_profile where id = '".$_GET['id']."'");
$_SESSION['success']=" Profile Deleted Successfully !!";
}
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
          <div class="row align-items-center pb40">
            <div class="col-xxl-4">
              <div class="dashboard_title_area">
                <h2>My Product & Services</h2>
              </div>
            </div>
          </div>
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
            <div class="col-xl-6">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="packages_table table-responsive">
                    <table class="table-style3 table at-savesearch">
                    <thead class="t-head">
                      <tr>
                      <th scope="col">SR No</th>
                        <th scope="col">Product & Services</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="t-body">
                        <?php
                            include'includes/config.php';
                            $id=intval($_GET['id']);
                            $query=mysqli_query($conn,"SELECT * FROM profile_services WHERE p_id='".$_GET['id']."'");
                            $cnt=1;
                            while($row=mysqli_fetch_array($query))
                            {
                        ?>
                      <tr>
                        <td class="vam"><?php echo $cnt++;?></td>
                        <td class="vam"><?php echo $row['service'];?></td>
                        <td class="vam"><?php echo $row['creation_on'];?></td>
                        <td class="vam">
                          <div class="d-flex">
                            <a class="icon delete" data-id="<?php echo $row['id'];?>" href="#delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" style="color:red"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
             <div class="col-xl-6">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="packages_table table-responsive">
                  <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Product & Services</h3>
              <p class="text mb25"><span class="text-red">* </span> 1 Mandatory to fill </p>
              <form class="form-style1" method="POST">
                <div class="row">
                    <input type="hidden" name="profile_id" value="<?php echo $_GET['id'];?>">
                     <table  class="table table-hover small-text" id="tb1">
                        <tr class="tr-header col-md-12">
                            <th>  <span type="button" class="text-red" data-bs-toggle="modal" id="addMore1" data-bs-target="#"><i class="ri-add-line align-bottom me-1"></i>Add More +</span></th>
                            <th> <label class="heading-color ff-heading fw600 mb10">Enter your Product or Services</label> </th>
                        </tr>
                        <tr class="col-md-12">
                            <td>
                                <a href='javascript:void(0);'  class='remove1'>x</a>
                            </td>
                            <td class="col-md-8" id="hidding_normal">
                                <input class="form-control" name="service[]" type="text" placeholder="Enter Product & Services" required>
                                <div class="invalid-feedback">
                            Please Product & Services
                                </div>
                            </td>    
                        </tr> 
                    </table>
                  <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="d-grid">
                                <a class="ud-btn btn-success" href="business-profile"><i class="fal fa-arrow-left"></i> Back</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-grid">
                                <button class="ud-btn btn-dark" type="submit" name="add3"><i class="fal fa-arrow-right-long"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
       <?php include'dash_footer.php';?>