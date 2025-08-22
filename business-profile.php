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
            <div class="col-xxl-4">
              <div class="dashboard_title_area">
                <h2>My Business Profile</h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="packages_table table-responsive">
                  <table class="table-style3 table at-savesearch">
                    <thead class="t-head">
                      <tr>
                        <th scope="col">Listing title</th>
                        <th scope="col">Date Published</th>
                        <th scope="col">Status</th>
                        <th scope="col">Views</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="t-body">
                         <?php
                            $conn = $pdo->open();
                            try{
                            $stmt = $conn->prepare("SELECT * FROM tbl_profile where user_id='".$user['id']."'");
                            //$cnt=1;
                            $stmt->execute();
                            foreach($stmt as $row){
                            ?> 
                      <tr>
                        <th scope="row">
                          <div class="listing-style1 dashboard-style d-xxl-flex align-items-center mb-0">
                            <div class="list-thumb">
                              <img class="w-100" src="../uploads/original/<?php echo $row['thumbnail'];?>" alt="">

                            </div>
                            <div class="list-content py-0 p-0 mt-2 mt-xxl-0 ps-xxl-4">
                              <div class="h6 list-title"><a href="https://quicksearchonline.in/description?slug=<?php echo $row['slug'];?>" target="_blank"><?php echo $row['company_name'];?></a></div>
                              <p class="list-text mb-0"><?php echo $row['location'];?></p>
                              <div class="list-price"><a href="#"><?php echo $row['contact_person'];?></a></div>
                            </div>
                          </div>
                        </th>
                        <td class="vam"><?php echo $row['creation_on'];?></td>
                        <td class="vam">
                            
                            <span class="pending-style style1"><?php echo $row['status'];?></span>
                            
                            </td>
                        <td class="vam"><?php echo $row['count'];?></td>
                        <td class="vam">
                             <div class="dropdown">
                    <a class="btn" href="#" data-bs-toggle="dropdown">
                      Menu
                    </a>
                    <div class="dropdown-menu">
                      <div class="user_setting_content">
                        <a class="dropdown-item" href="edit-industry?id=<?php echo $row['id'];?>"><i class="flaticon-pencil mr10"></i>Edit Industry</a>
                        <a class="dropdown-item" href="edit-personal-info?id=<?php echo $row['id'];?>"><i class="flaticon-pencil mr10"></i>Edit Personal Info</a>
                        <a class="dropdown-item" href="edit-product-services?id=<?php echo $row['profile_id'];?>"><i class="flaticon-pencil mr10"></i>Edit Product & Services</a>
                        <a class="dropdown-item" href="edit-social?id=<?php echo $row['id'];?>"><i class="flaticon-pencil mr10"></i>Edit Social Media</a>
                        <a class="dropdown-item" href="edit-gallery?id=<?php echo $row['profile_id'];?>"><i class="flaticon-pencil mr10"></i>Edit Gallery</a>
                        <a class="dropdown-item" href="edit-business-hours?id=<?php echo $row['profile_id'];?>"><i class="flaticon-pencil mr10"></i>Edit business Hours</a>
                        <a class="dropdown-item" href="edit-thumbnail?id=<?php echo $row['profile_id'];?>"><i class="flaticon-pencil mr10"></i>Edit Thumbnail</a>
                        <a class="dropdown-item" href="business-profile?id=<?php echo $row['id']?>&del=delete"onClick="return confirm('Are you sure you want to delete?')" style="color:red"><i class="flaticon-exit mr10"></i>Delete</a>
                      </div>
                    </div>
                  </div>
                        
                          
                        </td>
                      </tr>
                    <?php
                            }
                        }
                        catch(PDOException $e){
                        echo $e->getMessage();
                        }

                        $pdo->close();
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php include'dash_footer.php';?>